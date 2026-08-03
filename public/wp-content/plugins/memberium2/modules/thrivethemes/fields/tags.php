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



class m4is_5j8r6bvs1hewaa6arz431nv1p12065 extends TCB\ConditionalDisplay\Field {

public static function get_entity() {
return 'memberium';

}

public static function get_key() {
return 'memberium_tag';
}

public static function get_label() {
return 'Has Any Tags';
}

static function get_conditions() {
return [
'autocomplete'
];

}
static function is_boolean() {
return false;
}

public function get_value( $m4is_6mctr922hbmncpwfrp0x2k ) {
return isset( $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['tags'] ) ? array_filter( explode( ',',
 $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['tags'] ) ) : [];
}

public static function get_options( $m4is_ktfw19bb0dkp2zvzdrsx72h9g4g1162 = [],
 $m4is_4eqqg97zdk6gqkmva0a9hbtrvqv55 = '' ) {
$m4is_06c8s5xs94f91335gnaey25 = m4is_0ddg4zyk7dn8eg0283::m4is_efv80414zggm01p039yaz3ettdd7( $m4is_4eqqg97zdk6gqkmva0a9hbtrvqv55 );

if ( ! empty( $m4is_ktfw19bb0dkp2zvzdrsx72h9g4g1162 ) ) {
$m4is_ep71e0rvywab175wrv75x324fqm53am9 = array_filter( $m4is_06c8s5xs94f91335gnaey25,
 function( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) use ( $m4is_ktfw19bb0dkp2zvzdrsx72h9g4g1162 ) {
return in_array( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0->id,
 $m4is_ktfw19bb0dkp2zvzdrsx72h9g4g1162 );
} );
$m4is_06c8s5xs94f91335gnaey25 = $m4is_ep71e0rvywab175wrv75x324fqm53am9;
}
$m4is_3h2p59t1q80qzpcs = [];

foreach( $m4is_06c8s5xs94f91335gnaey25 as $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
$m4is_3h2p59t1q80qzpcs[] = [
'value' => (string) $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0->id,

'label' => sprintf( "%s (%s)", $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0->name, $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0->id ),
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
