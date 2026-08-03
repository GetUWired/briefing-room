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

final class m4is_8sm3yww5 {
private m4is_6y9612z4hjd6fzpap4r5n853641m1jc $m4is_132xe588j;
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
private function m4is_bc4npp4d87sptssbk4s596() {
if (class_exists('Yoast_GA_Options') ) {
}
add_filter( 'yoast-ga-custom-vars', [ $this,
 'm4is_v40h862y5mk2n5m4pg6x79acvcqk5g' ], 10, 2 );
}

function m4is_v40h862y5mk2n5m4pg6x79acvcqk5g($m4is_n18xx301tpkf70ek9n00s6dv19m1tvj,
 $m4is_p43drs7je147839eze7fj) {
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();
$m4is_6mctr922hbmncpwfrp0x2k = $this->m4is_132xe588j->m4is_vd3qpw0vkdm();

$m4is_w0vxrs5es51ydcze = (array) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'ga_customvars' );
if ( ! is_array($m4is_w0vxrs5es51ydcze) ) {
return;

}
foreach ($m4is_w0vxrs5es51ydcze as $m4is_7a2gdk96eyg085rz5vn8zc9g6) {
unset($m4is_5n9vbnaj);
unset($m4is_q79pwsbjjwxz63xwwhb62s4sg6n6);

switch ($m4is_7a2gdk96eyg085rz5vn8zc9g6['variable']) {
case '!system.membership_level':
$m4is_5n9vbnaj = isset($m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_level']) ? $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_level'] : '';

break;
case '!system.membership_name':
$m4is_5n9vbnaj = isset($m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_names']) ? $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['membership_names'] : '';

break;
case '!system.remote_auth':
$m4is_5n9vbnaj = isset($m4is_6mctr922hbmncpwfrp0x2k['memb_user']['remote_auth']) ? $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['remote_auth'] : '';

break;
case '!system.source':
$m4is_5n9vbnaj = isset($m4is_6mctr922hbmncpwfrp0x2k['memb_user']['source']) ? $m4is_6mctr922hbmncpwfrp0x2k['memb_user']['source'] : '';

break;
}
if (substr($m4is_7a2gdk96eyg085rz5vn8zc9g6['variable'], 0, 9) == '!contact.') {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = strtolower(substr($m4is_7a2gdk96eyg085rz5vn8zc9g6['variable'],
 9) );
}
if (substr($m4is_7a2gdk96eyg085rz5vn8zc9g6['variable'], 0, 11) == '!affiliate.') {
$m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 = 'affiliate.' . strtolower( substr( $m4is_7a2gdk96eyg085rz5vn8zc9g6['variable'],
 11 ) );
}
if ( ! empty( $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6 ) ) {
$m4is_wk4dh1rnd3wmwvsggq51nhn87 = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_vd3qpw0vkdm();

$m4is_5n9vbnaj = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_9t91sx0acvf1cc2h3qzmqer( $m4is_wk4dh1rnd3wmwvsggq51nhn87, 'contact', $m4is_q79pwsbjjwxz63xwwhb62s4sg6n6,
 '' );
}
$m4is_n18xx301tpkf70ek9n00s6dv19m1tvj[] = "'_setCustomVar'," . $m4is_p43drs7je147839eze7fj . ",'" . addslashes($m4is_7a2gdk96eyg085rz5vn8zc9g6['name']) . "','" . addslashes($m4is_5n9vbnaj) . "', 3";

$m4is_p43drs7je147839eze7fj++;
}
return $m4is_n18xx301tpkf70ek9n00s6dv19m1tvj;
}
}
