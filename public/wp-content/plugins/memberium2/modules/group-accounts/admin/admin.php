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


class_exists('m4is_6y9612z4hjd6fzpap4r5n853641m1jc') || die();

class m4is_cpb285vvk7nssq0pzqjx15h {
private $m4is_132xe588j;
private $m4is_4fbz2e9k7gaabgs0fe5eyw;

static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self();
}

private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();


add_action( 'init',
 [$this, 'm4is_sxwy05a6n9qrk9z379q2n4cmg44s3z71'], 9 );
}
private function m4is_cmdwra5kyw39gn1ptag2c7f2() : void {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_4fbz2e9k7gaabgs0fe5eyw = m4is_p2r78mkk9tdtwpmc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();
}






public function m4is_sxwy05a6n9qrk9z379q2n4cmg44s3z71() {
if ( ! $this->m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp() ) {
return;

}
add_action( 'memberium_admin_menu_addons', [$this, 'm4is_symh1fmfbxesp4xd1dgp8p5rc'] );
add_action( 'memberium/admin/user_editor',
 [$this, 'm4is_e2m0q3ytjxkmday6hhgxsvxv513'], 2010 );



m4is_bj0mt04ye7axtp644x64m::m4is_9n1zfbptywae0f1eb();
}

public function m4is_symh1fmfbxesp4xd1dgp8p5rc( string $m4is_w0y3c6pa7wp01b ) {
if ( $m4is_w0y3c6pa7wp01b ) {






add_submenu_page( $m4is_w0y3c6pa7wp01b,
 'Group Accounts', 'Group Accounts', 'manage_options', 'memberium-group-accounts', [$this, 'm4is_fgzyb4tw9r601c'] );
}
}

public function m4is_e2m0q3ytjxkmday6hhgxsvxv513( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65 ) : void {

if ( ! $this->m4is_132xe588j->m4is_mdj300zr1jk5av2y9cp()) {
return;

}
$m4is_6mctr922hbmncpwfrp0x2k = m4is_ng2r3s7ssv4q4m74fys4db49a7es16::m4is_qwpwj640q( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID );

$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact']['id'] ??= 0;
m4is_bj0mt04ye7axtp644x64m::m4is_4vw3pgzrq9ng4ndvq( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID );

if ( ! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp ) {
return;
}
$m4is_6c72zwprp4ja81dm662q6j7ag13j = m4is_p2r78mkk9tdtwpmc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$m4is_m8x3z0ehyggbsd = strtolower( $m4is_6c72zwprp4ja81dm662q6j7ag13j->m4is_jvjswjxb6h() );
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = [
[
'label' =>
 'Group Account Code:',
'value' => empty( $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact'][$m4is_m8x3z0ehyggbsd] ) ? '<strong style="color:red;">None</strong>' : $m4is_6mctr922hbmncpwfrp0x2k['keap']['contact'][$m4is_m8x3z0ehyggbsd]
]
];

if ( $m4is_6c72zwprp4ja81dm662q6j7ag13j->m4is_0nf7egh7gg4p1m5t0ea( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID ) ) {
$m4is_khxvebq01f = $m4is_6c72zwprp4ja81dm662q6j7ag13j->m4is_ca6wzg366mv5j( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID );

$m4is_shw16ak5sv23c61x5t8yn = [];
foreach( $m4is_khxvebq01f as $m4is_xcg4je0en ) {
$m4is_m74er68hec8p56j = get_user_by( 'ID', $m4is_xcg4je0en );

if ( ! is_a( $m4is_m74er68hec8p56j, 'WP_User' ) ) {
$m4is_6c72zwprp4ja81dm662q6j7ag13j->m4is_n627ntey0gxnss6e11sxtw9ks8st4( $m4is_xcg4je0en,
 $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID );
continue;
}
$m4is_shw16ak5sv23c61x5t8yn[] = sprintf( '<a href="%s" target="child_user">%s (%s)</a>',
 get_edit_user_link( $m4is_xcg4je0en ), $m4is_m74er68hec8p56j->display_name, $m4is_m74er68hec8p56j->user_email );
}
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = array_merge( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy,

[
[
'label' => 'Maximum Children:',
'value' => $m4is_6mctr922hbmncpwfrp0x2k['umbrella']['max_children']
],
[
'label' => 'Children Found:',

'value' => count( $m4is_shw16ak5sv23c61x5t8yn ), 
],
[
'label' => 'Child Accounts:',
'value' => implode( ', ', $m4is_shw16ak5sv23c61x5t8yn ),

],
]
);
}
else {
$m4is_k1eftjy4k5430qzqhjdtxyn7j = $m4is_6c72zwprp4ja81dm662q6j7ag13j->m4is_39a51e7dpqe6bbee2h6( $m4is_gs9wq563c9t1tzsmyrbt40n0d0fxv65->ID );

if ( $m4is_k1eftjy4k5430qzqhjdtxyn7j ) {
$m4is_5qr45zdkesq5nq = get_user_by( 'ID', $m4is_k1eftjy4k5430qzqhjdtxyn7j );
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = array_merge( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy,

[
[
'label' => 'Parent User:',
'value' => sprintf( '<a href="%s">%s (%s)</a>', get_edit_user_link( $m4is_k1eftjy4k5430qzqhjdtxyn7j ),
 $m4is_5qr45zdkesq5nq->display_name, $m4is_5qr45zdkesq5nq->user_email )
],
]
);
}
}

echo '<table class="form-table">';
echo '<tr>';

echo '<th valign="top"><label for="infusionsoft_umbrella">Group Accounts</label></th>';
foreach( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy as $m4is_c9nryf13e43y9jensddce ) {
echo '<tr>';

echo '<td>', $m4is_c9nryf13e43y9jensddce['label'], '</td><td>', $m4is_c9nryf13e43y9jensddce['value'], '</td>';
echo '</tr>';
}
echo '</table>';

}

public function m4is_fgzyb4tw9r601c() : void {
m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_0ev16xnbdp();

new m4is_pxpfacwwc3();
require_once __DIR__ . '/screen.php';
}

}