<?php

namespace BTN\BriefingRoom\API;

use BTN\BriefingRoom\Actions\CreateManager;
use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Helpers\Memberium;
use WP_REST_Request as Request;
use WP_REST_Response;

class AssignManagerToAgency
{
    public function registerRoute()
    {
        register_rest_route( 'btn/briefing-room', '/agency-manager', array(
            'methods' => 'POST',
            'callback' => [$this, 'handle'],
            'permission_callback' => function(Request $request) {
                // TODO: Authorize incoming webhook.
                return true;
            },
            'args' => [
                'contactId' => [
                    'required' => true,
                    'type' => 'string',
                    'validate_callback' => function($param) {
                        return Memberium::getUserIdByContactId($param);
                    }
                ],
                'agencyId' => [
                    'required' => true,
                    'validate_callback' => function($param) {
                        return Agency::find($param);
                    }
                ],
            ]
        ) );
    }

    public function handle(Request $request)
    {
        error_log('[BTN] Request to add Contact as Agency Manager: ' . json_encode($request->get_params()));
        $agency = Agency::find($request->get_param('agencyId'));
        error_log('[BTN] Agency found for ID: ' . json_encode($agency));

        $user = get_user_by('ID', Memberium::getUserIdByContactId($request->get_param('contactId')));
        error_log('[BTN] User found for Contact ID: ' . json_encode($user));
        if($user) {
            error_log('[BTN] Creating Manager for User/Agency: ' . json_encode([$user->ID, $agency->id]));
            (new CreateManager)($user, $agency->id);
        }

        return Memberium::setContactField('_AgencyID', $agency->id, $request->get_param('contactId'))
            ? new WP_REST_Response($agency->toArray())
            : new WP_REST_Response('Failed to update contact field.', 500);
    }
}
