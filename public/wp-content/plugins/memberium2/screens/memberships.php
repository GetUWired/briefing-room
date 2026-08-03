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

current_user_can( 'manage_options' ) || wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
m4is_yrey4qpn7qxgfz8mzzhahj0pdfpn1h5a::m4is_de8n8qy4mmtnkq33p();


final class m4is_yrey4qpn7qxgfz8mzzhahj0pdfpn1h5a {
private m4is_6y9612z4hjd6fzpap4r5n853641m1jc $m4is_132xe588j;
private array $m4is_y7084n6v67jme9va8yz;

private array $m4is_7kwstyma;

static function m4is_de8n8qy4mmtnkq33p() : self {
static $m4is_x83y9shwv134vk9r8c85;
return $m4is_x83y9shwv134vk9r8c85 ??= new self;

}

private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_ranr89c2gngyncmfbwyag76f1rq();
}

private function m4is_cmdwra5kyw39gn1ptag2c7f2() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_y7084n6v67jme9va8yz = (array) $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'memberships' );
$this->m4is_7kwstyma = m4is_dv250ra9xbtaf::m4is_9mae5sykmd575z97mssmcpdtn5rz();

}

private function m4is_9adtaa67sa21q2c604j55azyzd() {
if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
return;
}
if ( ! empty( $_POST['main_action'] ) ) {
$this->m4is_7ms4pw6xhfrd0jt62vga4cr9ydagb();

}
if ( ! empty( $_POST['action'] ) ) {
if ( $_POST['action'] === 'edit' ) {
$this->m4is_9fqca6aqv735jnej6gxn3j4r();
}
elseif ( $_POST['action'] === 'add' ) {
$this->m4is_n8fx6ftz0c();

}
elseif ( $_POST['action'] === 'delete' ) {
$this->m4is_vqm3z0rk8tj3qxxa6jjefcqw();
}
}
if ( ! empty( $_POST['create-category'] ) ) {
$this->m4is_emreqyph8cp7cg22tn2k3kc0bz279g();

}
if ( ! empty( $_POST['create-tag'] ) ) {
$this->m4is_9bbkcv7vn6spvqcjs();
}
if ( ! empty( $_POST['create-tags'] ) ) {
$this->m4is_hnn7f7thj8z4wshqjte3c7yw8vj();

}
if ( ! empty( $_POST['create-membership'] ) ) {
$this->m4is_yw5y73cyjqq7539xbhar7g2npgsa09e4();
}
$this->m4is_132xe588j->m4is_r4c836v754();

$this->m4is_h66nx3r180cm();
m4is_dv250ra9xbtaf::m4is_dagbw7aea4y90yradk9x7b();
}

private function m4is_ranr89c2gngyncmfbwyag76f1rq() {
$this->m4is_9adtaa67sa21q2c604j55azyzd();

m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_0ev16xnbdp();
$m4is_knxbec8fr3be1s2tkx0ydee0z = isset( $_GET['action'] ) ? trim( $_GET['action'] ) : '';

$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = isset( $_GET['id'] ) ? (int) $_GET['id'] : 0;
if ( $m4is_knxbec8fr3be1s2tkx0ydee0z == 'edit' && $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh > 0 ) {
require_once $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby( '/memberships-edit.php' );

}
elseif ( $m4is_knxbec8fr3be1s2tkx0ydee0z == 'add' ) {
require_once $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby( '/memberships-add.php' );

}
else {
require_once $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby( '/memberships-list.php' );
require_once $this->m4is_132xe588j->m4is_8hkhd903a3hcdnqhfwpzqby( '/memberships-tagbuilder.php' );

}
$this->m4is_132xe588j->m4is_h9t0p5fc1( 'view_memberships' );
}

private function m4is_h66nx3r180cm() {
$this->m4is_y7084n6v67jme9va8yz = array_filter(
$this->m4is_y7084n6v67jme9va8yz,

fn( $m4is_rqxytszfq5v6syth1csqqxvy5, $m4is_j8j55t8dz79m7 ) => $m4is_j8j55t8dz79m7 !== '' && $m4is_j8j55t8dz79m7 !== null && $m4is_rqxytszfq5v6syth1csqqxvy5['main_id'] > 0,

ARRAY_FILTER_USE_BOTH
);
uasort( $this->m4is_y7084n6v67jme9va8yz, function ($m4is_v17y58tsqmj6c8ry, $m4is_73v4hndktk ) {
if ($m4is_v17y58tsqmj6c8ry['level'] == $m4is_73v4hndktk['level'] ) {
if ($m4is_v17y58tsqmj6c8ry['name'] == $m4is_73v4hndktk['name'] ) {
return 0;

}
return ($m4is_v17y58tsqmj6c8ry['name'] < $m4is_73v4hndktk['name'] ) ? -1 : 1;
}
return ($m4is_v17y58tsqmj6c8ry['level'] < $m4is_73v4hndktk['level'] ) ? -1 : 1;

} );
$this->m4is_132xe588j->m4is_ke3nwk5g93jygt8wwcej( $this->m4is_y7084n6v67jme9va8yz, 'memberships' );
}

private function m4is_7ms4pw6xhfrd0jt62vga4cr9ydagb() {
$_POST['main_action'] = $_POST['main_action'] ?? [];

$_POST['level'] = $_POST['level'] ?? [];
$_POST['login_redirect_priority'] = $_POST['login_redirect_priority'] ?? [];
if ( ! empty( $_POST['level'] ) && is_array( $_POST['level'] ) ) {
foreach( $_POST['level'] as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$this->m4is_y7084n6v67jme9va8yz[$m4is_j8j55t8dz79m7]['level'] = $m4is_rqxytszfq5v6syth1csqqxvy5;

}
}
if ( ! empty( $_POST['login_redirect_priority'] ) && is_array( $_POST['login_redirect_priority'] ) ) {
foreach( $_POST['login_redirect_priority'] as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
$this->m4is_y7084n6v67jme9va8yz[$m4is_j8j55t8dz79m7]['login_redirect_priority'] = $m4is_rqxytszfq5v6syth1csqqxvy5;

}
}
if ( ! empty( $_POST['main_action'] ) && is_array( $_POST['main_action'] ) ) {
$deleted_memberships = [];
foreach( $_POST['main_action'] as $m4is_j8j55t8dz79m7 =>
 $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ( $m4is_rqxytszfq5v6syth1csqqxvy5 == 'Delete' ) {
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c( 'Your membership level &ldquo;<strong>' . $this->m4is_y7084n6v67jme9va8yz[$m4is_j8j55t8dz79m7]['name'] . '</strong>&rdquo; has been deleted.' );


$m4is_w855v7fcvq5s1phhtj779a25x3zd1p = 'Memberium ' . $this->m4is_y7084n6v67jme9va8yz[$m4is_j8j55t8dz79m7]['name'];
$m4is_dq9dscqh5yhsz5aevbt6qx = sanitize_key( 'memberium_' . $this->m4is_y7084n6v67jme9va8yz[$m4is_j8j55t8dz79m7]['name'] );

remove_role( $m4is_dq9dscqh5yhsz5aevbt6qx );
unset( $this->m4is_y7084n6v67jme9va8yz[$m4is_j8j55t8dz79m7] );
$deleted_memberships[] = $m4is_j8j55t8dz79m7;

}
}
$this->m4is_r6hfpvwd7ddqnj60mpbk9t( $deleted_memberships );
}
}
private function m4is_n8fx6ftz0c() {
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = isset( $_POST['main_id'] ) ? (int) $_POST['main_id'] : 0;

if ( empty( $_POST['name'] ) || empty( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ) ) {
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c( 'Failed to add Membership Level.  Missing Fields' );

return;
}
$m4is_hhe08taea8 = [];
$m4is_hhe08taea8['name'] = ucwords( trim( stripslashes( $_POST['name'] ) ) );
$m4is_hhe08taea8['main_id'] = (int) $_POST['main_id'];

$m4is_hhe08taea8['addltag_ids'] = empty( $_POST['addltag_ids'] ) ? '' : $_POST['addltag_ids'];
$m4is_hhe08taea8['payf_id'] = (int) $_POST['payf_id'];

$m4is_hhe08taea8['cancel_id'] = (int) $_POST['cancel_id'];
$m4is_hhe08taea8['suspend_id'] = (int) $_POST['suspend_id'];
$m4is_hhe08taea8['level'] = (int) $_POST['level'];

$m4is_hhe08taea8['roles'] = array_filter( (array) $_POST['roles'] );
$m4is_hhe08taea8['login_page'] = (int) $_POST['login_page'];
$m4is_hhe08taea8['first_login_page'] = (int) $_POST['first_login_page'];

$m4is_hhe08taea8['logout_page'] = (int) $_POST['logout_page'];
$m4is_hhe08taea8['theme'] = $_POST['theme'];
$m4is_hhe08taea8['payf_homepage'] = (int) $_POST['payf_homepage'];

$m4is_hhe08taea8['susp_homepage'] = (int) $_POST['susp_homepage'];
$m4is_hhe08taea8['canc_homepage'] = (int) $_POST['canc_homepage'];

$m4is_hhe08taea8['dynamic_menus'] = isset( $_POST['dynamic_menus'] ) ? (int) $_POST['dynamic_menus'] : 0;

$m4is_w855v7fcvq5s1phhtj779a25x3zd1p = 'Memberium ' . $m4is_hhe08taea8['name'];

$m4is_dq9dscqh5yhsz5aevbt6qx = sanitize_key('memberium_' . $m4is_hhe08taea8['name'] );
$m4is_pe0qmemqt = get_role($m4is_dq9dscqh5yhsz5aevbt6qx );

if (! $m4is_pe0qmemqt ) {
$m4is_pe0qmemqt = add_role($m4is_dq9dscqh5yhsz5aevbt6qx, $m4is_w855v7fcvq5s1phhtj779a25x3zd1p );
}
$m4is_pe0qmemqt->add_cap('read');

$this->m4is_y7084n6v67jme9va8yz[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_hhe08taea8;
$this->m4is_y7084n6v67jme9va8yz = apply_filters( 'memberium/memberships/save',
 $this->m4is_y7084n6v67jme9va8yz, $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $_POST );
}
private function m4is_9fqca6aqv735jnej6gxn3j4r() {
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = (int) $_GET['id'] ?? (int) $_GET['id'];

if ( empty( $_GET['id'] ) || ! array_key_exists( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $this->m4is_y7084n6v67jme9va8yz ) ) {
return;

}
$m4is_1ax4afangfjjakv11z5p = $this->m4is_y7084n6v67jme9va8yz[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh];
$m4is_amtvqq9d00md7cj61pg7924gs = $this->m4is_y7084n6v67jme9va8yz[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh];

$m4is_amtvqq9d00md7cj61pg7924gs['addltag_ids'] = isset( $_POST['addltag_ids'] ) ? $_POST['addltag_ids'] : $m4is_1ax4afangfjjakv11z5p['addltag_ids'];

$m4is_amtvqq9d00md7cj61pg7924gs['canc_homepage'] = isset( $_POST['canc_homepage'] ) ? (int) $_POST['canc_homepage'] : $m4is_1ax4afangfjjakv11z5p['canc_homepage'];

$m4is_amtvqq9d00md7cj61pg7924gs['cancel_id'] = isset( $_POST['cancel_id'] ) ? (int) $_POST['cancel_id'] : $m4is_1ax4afangfjjakv11z5p['cancel_id'];

$m4is_amtvqq9d00md7cj61pg7924gs['dynamic_menus'] = isset( $_POST['dynamic_menus'] ) ? (int) $_POST['dynamic_menus'] : $m4is_1ax4afangfjjakv11z5p['dynamic_menus'];

$m4is_amtvqq9d00md7cj61pg7924gs['first_login_page'] = isset( $_POST['first_login_page'] ) ? (int) $_POST['first_login_page'] : $m4is_1ax4afangfjjakv11z5p['first_login_page'];

$m4is_amtvqq9d00md7cj61pg7924gs['level'] = isset( $_POST['level'] ) ? (int) $_POST['level'] : $m4is_1ax4afangfjjakv11z5p['level'];

$m4is_amtvqq9d00md7cj61pg7924gs['login_page'] = isset( $_POST['login_page'] ) ? (int) $_POST['login_page'] : $m4is_1ax4afangfjjakv11z5p['login_page'];

$m4is_amtvqq9d00md7cj61pg7924gs['login_redirect_priority'] = isset( $_POST['login_redirect_priority'] ) ? (int) $_POST['login_redirect_priority'] : $m4is_1ax4afangfjjakv11z5p['login_redirect_priority'];

$m4is_amtvqq9d00md7cj61pg7924gs['logout_page'] = isset( $_POST['logout_page'] ) ? (int) $_POST['logout_page'] : $m4is_1ax4afangfjjakv11z5p['logout_page'];

$m4is_amtvqq9d00md7cj61pg7924gs['main_id'] = $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh;
$m4is_amtvqq9d00md7cj61pg7924gs['name'] = isset( $_POST['name'] ) ? trim( stripslashes( $_POST['name'] ) ) : $m4is_1ax4afangfjjakv11z5p['name'];

$m4is_amtvqq9d00md7cj61pg7924gs['payf_homepage'] = isset( $_POST['payf_homepage'] ) ? (int) $_POST['payf_homepage'] : $m4is_1ax4afangfjjakv11z5p['payf_homepage'];

$m4is_amtvqq9d00md7cj61pg7924gs['payf_id'] = isset( $_POST['payf_id'] ) ? (int) $_POST['payf_id'] : $m4is_1ax4afangfjjakv11z5p['payf_id'];

$m4is_amtvqq9d00md7cj61pg7924gs['roles'] = array_filter( isset( $_POST['roles'] ) ? $_POST['roles'] : $m4is_1ax4afangfjjakv11z5p['roles'] );
$m4is_amtvqq9d00md7cj61pg7924gs;
$m4is_amtvqq9d00md7cj61pg7924gs['susp_homepage'] = isset( $_POST['susp_homepage'] ) ? (int) $_POST['susp_homepage'] : $m4is_1ax4afangfjjakv11z5p['payf_homepage'];

$m4is_amtvqq9d00md7cj61pg7924gs['suspend_id'] = isset( $_POST['suspend_id'] ) ? (int) $_POST['suspend_id'] : $m4is_1ax4afangfjjakv11z5p['suspend_id'];

$m4is_amtvqq9d00md7cj61pg7924gs['theme'] = isset( $_POST['theme'] ) ? $_POST['theme'] : $m4is_1ax4afangfjjakv11z5p['theme'];
$this->m4is_y7084n6v67jme9va8yz[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = $m4is_amtvqq9d00md7cj61pg7924gs;

$this->m4is_y7084n6v67jme9va8yz = apply_filters( 'memberium/memberships/save', $this->m4is_y7084n6v67jme9va8yz, $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
 $_POST );

m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('Your membership level &ldquo;<strong>' . trim( $_POST['name'] ) . '</strong>&rdquo; has been updated.' );

}
private function m4is_hnn7f7thj8z4wshqjte3c7yw8vj() {
$m4is_y8w0yx25nvpe81h43mw8eg = trim( $_POST['tag_name'] );
$m4is_7m5t5wdmky4xv3cz2tvha = (int) $_POST['start'];

$m4is_hbwgfxph5q4n0patvc = (int) $_POST['end'];
$m4is_g1q8vsgh8yz3c3y2 = (int) abs( trim( $_POST['category_id'] ) );
$m4is_1we1qc8rdsrfq = false;

if ( false === strpos( $m4is_y8w0yx25nvpe81h43mw8eg, '%d' ) ) {
$m4is_y8w0yx25nvpe81h43mw8eg .= ' %d';
}
for ( $m4is_5vcwef7pymrfb3zawe = $m4is_7m5t5wdmky4xv3cz2tvha;
 $m4is_5vcwef7pymrfb3zawe <= $m4is_hbwgfxph5q4n0patvc; $m4is_5vcwef7pymrfb3zawe++ ) {
$m4is_6pyx9m8dy9tm3j7aq36p = sprintf( $m4is_y8w0yx25nvpe81h43mw8eg,
 $m4is_5vcwef7pymrfb3zawe );
if ( ! m4is_0ddg4zyk7dn8eg0283::m4is_havkghb9w( $m4is_6pyx9m8dy9tm3j7aq36p ) ) {
m4is_0ddg4zyk7dn8eg0283::m4is_9bbkcv7vn6spvqcjs( $m4is_6pyx9m8dy9tm3j7aq36p,
 $m4is_g1q8vsgh8yz3c3y2 );
$m4is_1we1qc8rdsrfq = true;
}
}
if ( $m4is_1we1qc8rdsrfq ) {
m4is_0ddg4zyk7dn8eg0283::m4is_r929khbv823hsxjc0498q();

m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c( 'Your Drip Tags for &ldquo;<strong>' . $m4is_6pyx9m8dy9tm3j7aq36p . '</strong>&rdquo; have been created.' );

}
else {
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c( 'Your Drip Tags for &ldquo;<strong>' . $m4is_6pyx9m8dy9tm3j7aq36p . '</strong>&rdquo; already exist.' );

}
}

private function m4is_vqm3z0rk8tj3qxxa6jjefcqw() : void {
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = isset( $_POST['membership_id'] ) ? (int) $_POST['membership_id'] : 0;

if ( array_key_exists( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $this->m4is_y7084n6v67jme9va8yz ) ) {
$m4is_hce1y1a4qd65zhnwsj = $this->m4is_y7084n6v67jme9va8yz[$_POST[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]]['name'];

unset( $m4is_y7084n6v67jme9va8yz[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] );
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c(
sprintf(
'Your membership level &ldquo;<strong>%s</strong>&rdquo; has been deleted.',

$m4is_hce1y1a4qd65zhnwsj
)
);
}
}
private function m4is_emreqyph8cp7cg22tn2k3kc0bz279g() {
$m4is_hce1y1a4qd65zhnwsj = isset( $_POST['category_name'] ) ? $_POST['category_name'] : '';

$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = m4is_6xn1pjnrksg2r2y58e54cqsedvtka8::m4is_7xzfx9wekf0sbbeyvb8e( $m4is_hce1y1a4qd65zhnwsj );

if ( $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ) {
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c( 'Your Category &ldquo;<strong>' . $m4is_hce1y1a4qd65zhnwsj . '</strong>&rdquo; has been created.' );

}
else {
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c( 'Your Category &ldquo;<strong>' . $m4is_hce1y1a4qd65zhnwsj . '</strong>&rdquo; already exists.' );

}
return $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh;
}

private function m4is_r6hfpvwd7ddqnj60mpbk9t( array $m4is_ht973zb4hb59 ) : bool {
if ( empty( $m4is_ht973zb4hb59 ) ) {
return false;

}
global $wpdb;
$m4is_5rbenkpt1v7xby2cknbs7 = "SELECT `post_id`, `meta_value` FROM `{$wpdb->postmeta}` WHERE `meta_key` = '_is4wp_membership_levels' AND `meta_value` > '' ";

$m4is_pbe6ph2dd0rk = $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );
foreach ( $m4is_pbe6ph2dd0rk as $m4is_z4ts5pa39jf1yhjb4 ) {
$m4is_x9rzhcsw2474yxjk849zxqcy7hb = array_filter( explode( ',',
 $m4is_z4ts5pa39jf1yhjb4['meta_value'] ) );
$m4is_9xe423jwa8tt7dz6y0sd3cbv = implode( ',', array_diff( $m4is_x9rzhcsw2474yxjk849zxqcy7hb,
 $m4is_ht973zb4hb59 ) );
m4is_ckmxkxeq7gsbvb5n4kdy40dkxn4ybj4::m4is_9bm4bvq934p7ky1y5qz1saxnv80jkt( $m4is_z4ts5pa39jf1yhjb4['post_id'],
 'memberships', $m4is_9xe423jwa8tt7dz6y0sd3cbv );
}
$this->m4is_132xe588j->m4is_r4c836v754();
return true;
}
private function m4is_9bbkcv7vn6spvqcjs() {

$m4is_6pyx9m8dy9tm3j7aq36p = isset( $_POST['tag_name'] ) ? trim( $_POST['tag_name'] ) : '';

$m4is_g1q8vsgh8yz3c3y2 = isset( $_POST['category_id'] ) ? (int) abs( trim( $_POST['category_id'] ) ) : 0;
if ( empty( $m4is_6pyx9m8dy9tm3j7aq36p ) ) {
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c( 'Tag name missing.' );

return;
}
$m4is_f1956wwe7c38ffw = m4is_0ddg4zyk7dn8eg0283::m4is_havkghb9w( $m4is_6pyx9m8dy9tm3j7aq36p );
if ( ! $m4is_f1956wwe7c38ffw ) {
m4is_0ddg4zyk7dn8eg0283::m4is_9bbkcv7vn6spvqcjs( $m4is_6pyx9m8dy9tm3j7aq36p,
 $m4is_g1q8vsgh8yz3c3y2 );
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('Your Tag &ldquo;<strong>' . $m4is_6pyx9m8dy9tm3j7aq36p . '</strong>&rdquo; has been created.' );

}
else {
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('Your Tag &ldquo;<strong>' . $m4is_6pyx9m8dy9tm3j7aq36p . '</strong>&rdquo; already exists.' );

}
m4is_0ddg4zyk7dn8eg0283::m4is_r929khbv823hsxjc0498q();
}
private function m4is_yw5y73cyjqq7539xbhar7g2npgsa09e4() {

$m4is_6pyx9m8dy9tm3j7aq36p = trim( $_POST['tag_name'] );

$m4is_g1q8vsgh8yz3c3y2 = (int) abs( trim( $_POST['category_id'] ) );
$m4is_2s26eb4b6hsdnm7zz = ! empty( $_POST['create_set'] );
$m4is_z8me08cdk2sz3wma3cmskqyhs99ec = $m4is_2s26eb4b6hsdnm7zz ? ['',
 'PAYF', 'CANC', 'SUSP'] : ['', 'PAYF'];
$m4is_1we1qc8rdsrfq = false;
$m4is_6b1zv1sey = [];
foreach( $m4is_z8me08cdk2sz3wma3cmskqyhs99ec as $m4is_ktppkca7ze6620p ) {
$m4is_3knsybs4dd1667a75788wgmvhe4dj = $m4is_6pyx9m8dy9tm3j7aq36p . $m4is_ktppkca7ze6620p;

$m4is_7g9y793jjckyb = m4is_0ddg4zyk7dn8eg0283::m4is_havkghb9w( $m4is_3knsybs4dd1667a75788wgmvhe4dj );
if ( ! $m4is_7g9y793jjckyb ) {
$m4is_6b1zv1sey['Tag' . $m4is_ktppkca7ze6620p] = m4is_0ddg4zyk7dn8eg0283::m4is_9bbkcv7vn6spvqcjs( $m4is_6pyx9m8dy9tm3j7aq36p . $m4is_ktppkca7ze6620p,
 $m4is_g1q8vsgh8yz3c3y2 );
$m4is_1we1qc8rdsrfq = true;
}
}
if ( $m4is_1we1qc8rdsrfq ) {
$m4is_yqp5pdq3hcvzfvhybh42sv5c56tnp = [
'name' =>
 $m4is_6pyx9m8dy9tm3j7aq36p,
'main_id' => $m4is_6b1zv1sey['Tag'],
'payf_id' => isset($m4is_6b1zv1sey['TagPAYF'] ) ? $m4is_6b1zv1sey['TagPAYF'] : 0,

'cancel_id' => isset($m4is_6b1zv1sey['TagCANC'] ) ? $m4is_6b1zv1sey['TagCANC'] : 0,
'suspend_id' => isset($m4is_6b1zv1sey['TagSUSP'] ) ? $m4is_6b1zv1sey['TagSUSP'] : 0,

'level' => 0,
'roles' => [],
'login_page' => 0,
'first_login_page' => 0,
'logout_page' => 0,
'theme' => '',
'login_redirect_priority' =>
 0,
'addltag_ids' => '',
'payf_homepage' => 0,
'susp_homepage' => 0,
'canc_homepage' => 0,
'dynamic_menus' => 0,
];
$this->m4is_y7084n6v67jme9va8yz[$m4is_6b1zv1sey['Tag']] = $m4is_yqp5pdq3hcvzfvhybh42sv5c56tnp;


$m4is_w855v7fcvq5s1phhtj779a25x3zd1p = 'Memberium ' . $m4is_6pyx9m8dy9tm3j7aq36p;
$m4is_dq9dscqh5yhsz5aevbt6qx = sanitize_key( 'memberium_' . $m4is_6pyx9m8dy9tm3j7aq36p );

$m4is_pe0qmemqt = get_role( $m4is_dq9dscqh5yhsz5aevbt6qx );
if ( ! $m4is_pe0qmemqt ) {
$m4is_pe0qmemqt = add_role( $m4is_dq9dscqh5yhsz5aevbt6qx,
 $m4is_w855v7fcvq5s1phhtj779a25x3zd1p );
}
$m4is_pe0qmemqt->add_cap( 'read' );
m4is_0ddg4zyk7dn8eg0283::m4is_r929khbv823hsxjc0498q();

m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c( 'Your Membership Tags for &ldquo;<strong>' . $m4is_6pyx9m8dy9tm3j7aq36p . '</strong>&rdquo; and Level have been created.' );

}
else {
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('Your Membership Tags for &ldquo;<strong>' . $m4is_6pyx9m8dy9tm3j7aq36p . '</strong>&rdquo; already exist.' );

}
}
}
