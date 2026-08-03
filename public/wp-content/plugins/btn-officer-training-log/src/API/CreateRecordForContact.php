<?php

namespace BTN\BriefingRoom\API;

use BTN\BriefingRoom\Helpers\Memberium;
use WP_REST_Request as Request;
use WP_REST_Response;

class CreateRecordForContact
{
    public function registerRoute()
    {
        register_rest_route( 'btn/briefing-room', '/new-contact', array(
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
            ]
        ) );
    }

    public function handle(Request $request)
    {
        $contact_id = $request->get_param('contactId');
        $user_id = Memberium::getUserIdByContactId($contact_id);
        $userdata = get_userdata($user_id);

        wp_set_current_user( $user_id );

        error_log("Checking created user ID ({$user_id}) for contact type...");
        $type = \BTN\BriefingRoom\Helpers\Memberium::getContactField('_ContactType1');

        if(!$type) {
            error_log("No contact type found for Contact ID {$contact_id}");
            return new WP_REST_Response("No contact type found for Contact ID {$contact_id}", 500);
        }

        error_log("Contact type is {$type}.");

        if('Student' == $type) {
            error_log("Creating Student for user ID {$user_id}.");
            $officer = \BTN\BriefingRoom\Officer::create([
                'firstName' => $userdata->first_name,
                'lastName' => $userdata->last_name,
                'emailAddress' => $userdata->user_email,
                'stationId' => \BTN\BriefingRoom\Helpers\Memberium::getContactField('_StationID'),
                'badgeId' => \BTN\BriefingRoom\Helpers\Memberium::getContactField('_BadgeID'),
                'stateId' =>\BTN\BriefingRoom\Helpers\Memberium::getContactField('_StateID'),
                'agencyId' => \BTN\BriefingRoom\Helpers\Memberium::getContactField('_AgencyIDPersonal'),
                'rank' => \BTN\BriefingRoom\Helpers\Memberium::getContactField('JobTitle'),
                'userId' => $user_id,
            ]);

            if(!$officer->id) {
                error_log("Something went wrong with creating student.");
            }

            error_log("Student created with ID {$officer->id}.");
            return new WP_REST_Response("Student created with ID {$officer->id}.");
        }

        if('Facilitator' == $type) {
            error_log("Creating Facilitator for user ID {$user_id}.");
            $facilitator = \BTN\BriefingRoom\Sergeant::create([
                'firstName' => $userdata->first_name,
                'lastName' => $userdata->last_name,
                'emailAddress' => $userdata->user_email,
                'organizationId' => \BTN\BriefingRoom\Helpers\Memberium::getContactField('_AgencyID'),
                'stationId' => \BTN\BriefingRoom\Helpers\Memberium::getContactField('_StationID'),
                'badgeId' => \BTN\BriefingRoom\Helpers\Memberium::getContactField('_BadgeID'),
                'stateId' =>\BTN\BriefingRoom\Helpers\Memberium::getContactField('_StateID'),
                'agencyId' => \BTN\BriefingRoom\Helpers\Memberium::getContactField('_AgencyIDPersonal'),
                'rank' => \BTN\BriefingRoom\Helpers\Memberium::getContactField('JobTitle'),
                'userId' => $user_id,
            ]);

            if(!$facilitator->id) {
                error_log("Something went wrong with creating facilitator.");
            }

            error_log("Facilitator created with ID {$facilitator->id}.");
            return new WP_REST_Response("Facilitator created with ID {$facilitator->id}.");
        }

        error_log("Contact type ({$type}) not supported.");
        return new WP_REST_Response("Contact type ({$type}) not supported.", 500);
    }
}
