<?php

namespace BTN\BriefingRoom\API;

use BTN\BriefingRoom\Actions\CreateManager;
use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Helpers\Memberium;
use BTN\BriefingRoom\Helpers\StatesUS;
use WP_REST_Request as Request;
use WP_REST_Response;

class CreateAgency
{
    public function registerRoute()
    {
        register_rest_route( 'btn/briefing-room', '/agencies', array(
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
                'name' => [
                    'required' => true,
                    'type' => 'string',
                ],
                'state' => [
                    'required' => true,
                    'type' => 'string',
                    'validate_callback' => function($param, $request, $key) {
                        return StatesUS::validate($param);
                    },
                ],
            ]
        ) );
    }

    public function handle(Request $request)
    {
        $agency = Agency::create([
            'name' => $request->get_param('name'),
            'state' => $request->get_param('state'),
        ]);

        $user = get_user_by('ID', Memberium::getUserIdByContactId($request->get_param('contactId')));
        if($user) {
            (new CreateManager)($user, $agency->id);
        }

        return Memberium::setContactField('_AgencyID', $agency->id, $request->get_param('contactId'))
            ? new WP_REST_Response($agency->toArray())
            : new WP_REST_Response('Failed to update contact field.', 500);
    }
}
