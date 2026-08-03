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



class m4is_yfqx67wb extends TCB\ConditionalDisplay\Field {

public static function get_entity() {
return 'memberium';

}

public static function get_key() {
return 'memberium_membership';
}

public static function get_label() {
return 'Has Any Memberships';

}

static function get_conditions() {
return [
'autocomplete'
];
}

public function get_value( $m4is_6mctr922hbmncpwfrp0x2k ) {
return isset( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_tags'] ) ? array_filter( explode( ',',
 $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_tags'] ) ) : [];
}

public static function get_options( $m4is_ktfw19bb0dkp2zvzdrsx72h9g4g1162 = [],
 $m4is_4eqqg97zdk6gqkmva0a9hbtrvqv55 = '' ) {
$m4is_y7084n6v67jme9va8yz = m4is_bt3b7g83x97j::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_nd8j0cvdtzrh( $m4is_4eqqg97zdk6gqkmva0a9hbtrvqv55 );

if ( ! empty( $m4is_ktfw19bb0dkp2zvzdrsx72h9g4g1162 ) ) {
$m4is_9xe423jwa8tt7dz6y0sd3cbv = array_filter( $m4is_y7084n6v67jme9va8yz,
 function( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ) use ( $m4is_ktfw19bb0dkp2zvzdrsx72h9g4g1162 ) {
return in_array( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $m4is_ktfw19bb0dkp2zvzdrsx72h9g4g1162 );
}, ARRAY_FILTER_USE_KEY );
$m4is_y7084n6v67jme9va8yz = $m4is_9xe423jwa8tt7dz6y0sd3cbv;
}
$m4is_3h2p59t1q80qzpcs = [];

foreach( $m4is_y7084n6v67jme9va8yz as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh => $m4is_h9g6e5cga ) {
$m4is_3h2p59t1q80qzpcs[] = [
'value' =>
 (string) $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
'label' => sprintf( "%s (%s)", $m4is_h9g6e5cga, $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ),

];
}
return $m4is_3h2p59t1q80qzpcs;
}

public static function get_autocomplete_placeholder() {
return 'Search Tags';
}

public static function get_display_order() {
return 10;

}
}
