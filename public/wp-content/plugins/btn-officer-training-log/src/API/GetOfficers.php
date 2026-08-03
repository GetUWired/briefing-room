<?php

namespace BTN\BriefingRoom\API;

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Station;
use BTN\BriefingRoom\Manager;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Sergeant;
use StellarWP\DB\QueryBuilder\JoinQueryBuilder;
use StellarWP\DB\QueryBuilder\QueryBuilder;
use StellarWP\DB\QueryBuilder\WhereQueryBuilder;
use WP_REST_Request as Request;
use BTN\BriefingRoom\Helpers\Memberium;

class GetOfficers
{
    public function registerRoute()
    {
        register_rest_route( 'btn/briefing-room', '/officers', array(
            'methods' => 'GET',
            'callback' => [$this, 'handle'],
            'permission_callback' => function(Request $request) {
                if(current_user_can('manage_options')) return true;

                $user = wp_get_current_user();

                // For Station Manager Get Agency.
                if(in_array(Manager::ROLE, $user->roles)) {
                    /** @var Manager $manager */
                    $manager = Manager::query()->where('userId', get_current_user_id())->get();
                    return $manager->organizationId == $request->get_param('agency')
                        || Memberium::getContactField('_AgencyID') == $request->get_param('agency');
                }

				 // For sergeant's only show officers from their station.
                if(in_array(Sergeant::ROLE, $user->roles) || in_array('memberium_sergeant', $user->roles)) {
                    $sergeant = Sergeant::query()->where('userId', get_current_user_id())->get();
                    $sergeant = Sergeant::find($sergeant->id);
                    return $sergeant->station()->agencyId == $request->get_param('agency');
                }

                return false;
            },
            'args' => [
                'search' => [
                    'required' => false,
                    'type' => 'string',
                ],
                'orderBy' => [
                    'required' => false,
                    'type' => 'string',
                    'validate_callback' => function($param) {
                        return in_array($param, ['firstName', 'lastName']);
                    },
                ],
                'agency' => [
                    'required' => false,
                    'type' => 'integer',
                    'validate_callback' => function($param, $request, $key) {
                        return Agency::exists($param);
                    },
                ],
                'rank' => [
                    'required' => false,
                    'type' => 'string',
                ],
            ]
        ) );
    }

    public function handle(Request $request)
    {

        $query = Officer::query();
        $query->select(
            ['officer.id', 'id'],
            ['officer.firstName', 'firstName'],
            ['officer.lastName', 'lastName'],
            ['officer.badgeId', 'badgeId'],
        );

        if ($request->get_param('agency')) {
			$query->join(function (JoinQueryBuilder $builder) {
				$stationQuery = Station::query();
				$builder->joinRaw("LEFT JOIN ({$stationQuery->getSQL()}) station ON officer.stationId = station.id");
			});
            $query->where('station.agencyId', $request->get_param('agency'));
        }

        if ($request->get_param('rank')) {
            $query->where('rank', $request->get_param('rank'));
        }

        if ($request->get_param('search')) {
            $search = '%' . $request->get_param('search') . '%';
            $query->where(function (WhereQueryBuilder $builder) use ($search) {
                $builder
                    ->whereLike('firstName', $search)
                    ->orWhereLike('lastName', $search)
                    ->orWhereLike('badgeId', $search)
                ;
            });
        }

        if($request->get_param('orderBy')) {
            $query->orderBy($request->get_param('orderBy'));
        }

        return $query->getAll();
    }
}
