<?php

namespace BTN\BriefingRoom\Actions;

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Helpers\Memberium;
use BTN\BriefingRoom\Sergeant;
use BTN\BriefingRoom\Station;

class CreateSergeant
{
    /**
     * @throws \Exception
     */
    public function __invoke(
        string $firstName,
        string $lastName,
        string $emailAddress,
        int $stationId,
        int $organizationId,
        string $badgeId,
        string $stateId,
        string $agencyId,
        string $rank,
        bool $sendWelcomeEmail = false
    )
    {
        $password = wp_generate_password();

        $userId = wp_insert_user([
            'user_login' => $emailAddress,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'user_email' => $emailAddress,
            'user_pass' => $password,
            'role' => Sergeant::ROLE,
        ]);

        if(is_wp_error($userId)) {
            throw new \Exception(
                'existing_user_login' === $userId->get_error_code()
                    ? 'User with this email address already exists.'
                    : $userId->get_error_message()
            );
        }

        $agency = Agency::find($organizationId);
        $station = Station::find($stationId);

        $currentUserId = get_current_user_id();
        wp_set_current_user( $userId );
        Memberium::setContactField('_ContactType1', 'Facilitator');
        Memberium::setContactField('_BriefingRoomPassword', $password);

        Memberium::setContactField('_BadgeID', $badgeId);
        Memberium::setContactField('_StateID', $stateId);
        Memberium::setContactField('_AgencyIDPersonal', $agencyId);

        Memberium::setContactField('_StationID', $station->id);
        Memberium::setContactField('_StationName', $station->name);

        Memberium::setContactField('_AgencyID', $agency->id);
        Memberium::setContactField('_AgencyName', $agency->name);
        Memberium::setContactField('_AgencyState', $agency->state);
        Memberium::setContactField('_AgencyManagersEmail', $agency->managerEmail());

        Memberium::setContactField('JobTitle', $rank); // Job Title is a general field, not a custom field, so no underscore prefix
        Memberium::setContactField('Company', $agency->name);

        [$subscriptionStartDate, $memberExpireDate] = (new GetAgencyManagerContactFields($agency))
            ->getContactFields(
                '_SubscriptionStartDate',
                '_MembershipStartDate',
            );
        Memberium::setContactField('_SubscriptionStartDate', $subscriptionStartDate);
        Memberium::setContactField('_MemberExpireDate', $memberExpireDate);

        if($sendWelcomeEmail) {
            Memberium::addTagById(164); // Tag: "Sergeant Welcome and Nurture: START"
        } else {
            Memberium::addTagById(138); // Tag: All facilitators
        }
        wp_set_current_user( $currentUserId );

        Sergeant::create([
            'firstName' => sanitize_text_field( $firstName ),
            'lastName' => sanitize_text_field( $lastName ),
            'emailAddress' => sanitize_text_field( $emailAddress ),
            'organizationId' => sanitize_text_field( $organizationId ),
            'stationId' => sanitize_text_field( $stationId ),
            'userId' => $userId,
        ]);
    }
}
