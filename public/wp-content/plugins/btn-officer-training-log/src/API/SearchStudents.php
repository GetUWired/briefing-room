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

class SearchStudents
{
    public function registerRoute()
    {
        register_rest_route( 'btn/briefing-room', '/students', array(
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
                    //return $sergeant->station()->agencyId == $request->get_param('agency');
                    return true;
                }

                return false;
            },
            'args' => [
                'search' => [
                    'required' => true,
                    'type' => 'string',
                ],
                'agency' => [
                    'required' => true,
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
        $search = $request->get_param('search');
        $agencyId = $request->get_param('agency');

        $students = $this->getSergeantsQuery($agencyId, $search)
            ->unionAll($this->getOfficersQuery($agencyId, $search))
            ->getAll();

        usort($students, function ($a, $b) {
            return $a->lastName != $b->lastName
                ? strcasecmp($a->lastName, $b->lastName)
                : strcasecmp($a->firstName, $b->firstName);
        });

        return array_slice($students, 0, 100);
    }

    protected function getOfficersQuery($agencyId, $search): QueryBuilder
    {
        $query = Officer::query();
        $query->select(
            ['officer.id', 'id'],
            ['officer.userId', 'userId'],
            ['officer.firstName', 'firstName'],
            ['officer.lastName', 'lastName'],
            ['officer.agencyId', 'referenceId'],
        );

        $query->join(function (JoinQueryBuilder $builder) {
            $stationQuery = Station::query();
            $builder->joinRaw("LEFT JOIN ({$stationQuery->getSQL()}) station ON officer.stationId = station.id");
        })->where('station.agencyId', $agencyId);

        $query->where(function (WhereQueryBuilder $builder) use ($search) {
            $builder
                ->whereLike('firstName', "%$search%")
                ->orWhereLike('lastName', "%$search%")
                ->orWhereLike('officer.agencyId', "%$search%")
            ;
        });

        return $query;
    }

    protected function getSergeantsQuery($agencyId, $search): QueryBuilder
    {
        $query = Sergeant::query();
        $query->select(
            ['sergeant.id', 'id'],
            ['sergeant.userId', 'userId'],
            ['sergeant.firstName', 'firstName'],
            ['sergeant.lastName', 'lastName'],
            ['sergeant.agencyId', 'referenceId'],
        );

        $query->join(function (JoinQueryBuilder $builder) {
            $stationQuery = Station::query();
            $builder->joinRaw("LEFT JOIN ({$stationQuery->getSQL()}) station ON sergeant.stationId = station.id");
        })->where('station.agencyId', $agencyId);

        $query->where(function (WhereQueryBuilder $builder) use ($search) {
            $builder
                ->whereLike('firstName', "%$search%")
                ->orWhereLike('lastName', "%$search%")
                ->orWhereLike('sergeant.agencyId', "%$search%")
            ;
        });

        return $query;
    }
}
