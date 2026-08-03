<?php
/**
 * Proprietary Software - All Rights Reserved
 *
 * This file is part of the Memberium plugin, which is proprietary software developed by Web Power and Light.
 * Unauthorized copying, distribution, or modification of this file, via any medium, is strictly prohibited.
 *
 * Copyright (c) 2012-2026 David J Bullock
 * Web Power and Light
 *
 * For licensing information, please contact Web Power and Light.
 */


class_exists( 'm4is_6y9612z4hjd6fzpap4r5n853641m1jc' ) || die();

final class m4is_azvwve90eh41048xqbzgye9vff {
private static $m4is_62vvt4ay = 'memberium/cron';

public static function m4is_s7bs0aqd6( array $m4is_pjd3y8mb2e ) : array {
return array_merge( $m4is_pjd3y8mb2e,
 [
'1min' => [ 'interval' => 60, 'display' => __( 'Every minute' ) ],
'3min' => [ 'interval' => 3 * 60, 'display' => __( 'Every 3 minutes' ) ],

'5min' => [ 'interval' => 5 * 60, 'display' => __( 'Every 5 minutes' ) ],
'20min' => [ 'interval' => 20 * 60, 'display' => __( 'Every 20 minutes' ) ],

'30min' => [ 'interval' => 30 * 60, 'display' => __( 'Every 30 minutes' ) ],
] );
return $m4is_pjd3y8mb2e;
}

private static function m4is_p25427tgk8ejg754z2f621ekh2c9gh() : array {
return [
'memberium/actionsets/sync' =>
 [ 'i' => 'twicedaily', 'o' => 0 ],
'memberium/affiliates/running_totals' => [ 'i' => 'twicedaily', 'o' => 0 ],
'memberium/contacts/sync_custom_fields' =>
 [ 'i' => 'twicedaily', 'o' => 0 ],
'memberium/contacts/async' => [ 'i' => '3min', 'o' => 0 ],
'memberium/contacts/makepass_scan' =>
 [ 'i' => '3min', 'o' => 0 ],
'memberium/invoices/sync' => [ 'i' => 'hourly', 'o' => 0 ],
'memberium/maintenance/logs/trim' => [ 'i' =>
 'twicedaily', 'o' => 0 ],
'memberium/maintenance/updater' => [ 'i' => 'twicedaily', 'o' => 0 ],
'memberium/products/sync' => [ 'i' =>
 'twicedaily', 'o' => 0 ],
'memberium/subscriptions/scan_expired' => [ 'i' => 'twicedaily', 'o' => 0 ],
'memberium/subscriptions/sync' =>
 [ 'i' => 'twicedaily', 'o' => 0 ],
'memberium/tags/categories/sync' => [ 'i' => 'twicedaily', 'o' => 0 ],
'memberium/tags/sync' =>
 [ 'i' => 'twicedaily', 'o' => 0 ],
'memberium/maintenance/daily' => [ 'i' => 'daily', 'o' => 0 ],
'memberium_maintenance' => [ 'i' =>
 'hourly', 'o' => 0 ],
'memberium/maintenance/daily' => [ 'i' => 'daily', 'o' => 0 ],

];
}

static function m4is_7x0nr6fqhfss4m8whjhhs() {
$m4is_1xxrf32201y4yx6tdw931ek42psjghv = time();

$m4is_r3k9d88yfys3hpk2k3jcb9dc = self::m4is_p25427tgk8ejg754z2f621ekh2c9gh();
foreach( $m4is_r3k9d88yfys3hpk2k3jcb9dc as $m4is_2wf7nssy06p =>
 $m4is_d60kn1d3yvprp62rs332 ) {
$m4is_d2m7dka019zn1w9j = $m4is_d60kn1d3yvprp62rs332['o'] == 0 ? $m4is_1xxrf32201y4yx6tdw931ek42psjghv : $m4is_1xxrf32201y4yx6tdw931ek42psjghv + rand( 0,
 180 );
wp_next_scheduled( $m4is_2wf7nssy06p ) || wp_schedule_event( $m4is_d2m7dka019zn1w9j, $m4is_d60kn1d3yvprp62rs332['i'], $m4is_2wf7nssy06p );

}
update_option( self::$m4is_62vvt4ay, $m4is_1xxrf32201y4yx6tdw931ek42psjghv );
}

static function m4is_02r0myfemrx9c09a22t9bht6e8gyb() {
$m4is_r3k9d88yfys3hpk2k3jcb9dc = self::m4is_p25427tgk8ejg754z2f621ekh2c9gh();

foreach( $m4is_r3k9d88yfys3hpk2k3jcb9dc as $m4is_2wf7nssy06p => $m4is_d60kn1d3yvprp62rs332 ) {
wp_clear_scheduled_hook( $m4is_2wf7nssy06p );

}
delete_option( self::$m4is_62vvt4ay );
}

static function m4is_szkbctx9d6mts7fc6dbpmr() {
}
}
