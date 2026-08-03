<?php

namespace BTN\BriefingRoom\API;

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Station;
use BTN\BriefingRoom\Manager;
use WP_REST_Request as Request;

class GetStations
{
    public function registerRoute()
    {
        register_rest_route( 'btn/briefing-room', '/stations', array(
            'methods' => 'GET',
            'callback' => [$this, 'handle'],
            'permission_callback' => function(Request $request) {
                $user = wp_get_current_user();
                return current_user_can('manage_options') || in_array(Manager::ROLE, $user->roles);
            },
            'args' => [
                'search' => [
                    'required' => false,
                    'type' => 'string',
                ],
                'agency' => [
                    'required' => false,
                    'type' => 'integer',
                    'validate_callback' => function($param, $request, $key) {
                        return Agency::exists($param);
                    },
                ],
            ]
        ) );
    }

    public function handle(Request $request)
    {
        $query = Station::query();

        if ($request->get_param('search')) {
            $search = '%' . $request->get_param('search') . '%';
            $query->whereLike('name', $search);
        }

        if ($request->get_param('agency')) {
            $query->where('agencyId', $request->get_param('agency'));
        }

        return $query->getAll();
    }
}
