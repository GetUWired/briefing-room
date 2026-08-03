<?php
if (! defined('ABSPATH')) {
	header('HTTP/1.0 403 Forbidden');
	die();
}

/**
 * Notifications Class
 *
 * Listens for assignment events and notifies the affected users by
 * triggering a Keap (Infusionsoft) "API Goal" through Memberium's bundled
 * iSDK, one call per affected contact. The goal then drives whatever
 * email/SMS step is configured on that goal inside the Keap campaign.
 *
 * @since      1.0.0
 * @package    btn-briefing
 * @subpackage btn-briefing/classes
 */

final class btn_briefing_notifications {

	// Call Name set on the "API Goal" step in the Keap campaign builder.
	// Confirm/create this on the live Keap app before relying on it.
	const KEAP_GOAL_CALL_NAME = 'trainingAssigned';

	function add_wp_hooks() {
		add_action('btn_briefing_training_assigned', [$this, 'handle_training_assigned'], 10, 5);
		add_action('btn_briefing_notifications_async', [$this, 'process_notifications_async'], 10, 5);
	}

	/**
	 * Fired from btn_briefing_assigned_trainings::assign_training() after a
	 * successful insert/reactivation. Schedules async processing so the AJAX
	 * response is not blocked by synchronous Keap XML-RPC calls (which can
	 * number in the hundreds for a large agency assignment).
	 */
	function handle_training_assigned($training_id, $training_type, $assigned_type, $assigned_to, $assigned_by) {
		wp_schedule_single_event(time(), 'btn_briefing_notifications_async', [
			(int) $training_id,
			(string) $training_type,
			(string) $assigned_type,
			(string) $assigned_to,
			(int) $assigned_by,
		]);
		spawn_cron();
	}

	/**
	 * Background cron handler — resolves affected users and triggers a Keap
	 * API Goal for each one. Runs outside the original AJAX request.
	 */
	function process_notifications_async($training_id, $training_type, $assigned_type, $assigned_to, $assigned_by) {
		$user_ids = $this->get_target_user_ids($assigned_type, $assigned_to);

		if (empty($user_ids)) {
			return;
		}

		$training_title = $this->get_training_title($training_id, $training_type);

		foreach ($user_ids as $user_id) {
			$contact_id = function_exists('memb_getContactIdByUserId')
				? (int) memb_getContactIdByUserId($user_id)
				: 0;

			if (!$contact_id) {
				error_log("[btn-briefing] Skipped Keap goal trigger for user {$user_id}: no Keap contact ID found.");
				continue;
			}

			// Stamp the training name on the contact so the Keap email/SMS
			// tied to this goal can merge-field it in (e.g. {{Contact._LastAssignedTraining}}).
			if (function_exists('memb_setContactField') && $training_title) {
				memb_setContactField('_LastAssignedTraining', $training_title, $contact_id);
			}

			$this->trigger_keap_goal($contact_id);
		}
	}

	/**
	 * Resolve the WP user IDs affected by an assignment.
	 */
	function get_target_user_ids($assigned_type, $assigned_to) {
		switch ($assigned_type) {
			case 'user':
				return [(int) $assigned_to];

			case 'station':
				// agency_id = 0 forces lookup scoped to this single station.
				return btn_briefing()->assigned_training()->get_officers_by_agency(0, $assigned_to, false, true);

			case 'agency':
				return btn_briefing()->assigned_training()->get_officers_by_agency($assigned_to, 0, false, true);

			default:
				return [];
		}
	}

	function get_training_title($training_id, $training_type) {
		if ($training_type === 'category') {
			$taxonomy = btn_briefing()->post()->get_taxonomy_slug();
			$term = get_term($training_id, $taxonomy);
			return (!is_wp_error($term) && $term) ? $term->name : '';
		}

		return get_the_title($training_id);
	}

	/**
	 * Achieve the Keap API Goal for a contact via Memberium's iSDK wrapper.
	 *
	 * memb_get_keap_api() returns Memberium's authenticated iSDK driver
	 * (vendor/i2sdkng), which exposes:
	 *   achieveGoal(string $integration, string $callName, int $contactId)
	 * -> XML-RPC call to FunnelService.achieveGoal under the hood.
	 *
	 * $integration must match the "Integration Name" the API Goal step was
	 * set up under in Keap; memb_getAppName() returns Memberium's own
	 * configured app name, which is the integration name already in use on
	 * this account for every other Memberium-driven goal (login goal, etc).
	 */
	function trigger_keap_goal($contact_id) {
		if (empty($contact_id) || !function_exists('memb_get_keap_api')) {
			error_log('[btn-briefing] Keap goal trigger skipped: Memberium/Keap API not available.');
			return false;
		}

		$keap_api    = memb_get_keap_api();
		$integration = function_exists('memb_getAppName') ? memb_getAppName() : '';

		if (!$keap_api || !method_exists($keap_api, 'achieveGoal') || empty($integration)) {
			error_log('[btn-briefing] Keap goal trigger skipped: iSDK or integration name unavailable.');
			return false;
		}

		try {
			return $keap_api->achieveGoal($integration, self::KEAP_GOAL_CALL_NAME, (int) $contact_id);
		} catch (\Throwable $e) {
			error_log('[btn-briefing] Keap goal trigger failed: ' . $e->getMessage());
			return false;
		}
	}
}
