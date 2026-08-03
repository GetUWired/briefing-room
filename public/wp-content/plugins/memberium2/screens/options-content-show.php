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
m4is_kx3v6thhr7an::m4is_4rpxwah5d2xnmkdncat6();

final class m4is_kx3v6thhr7an {
private $m4is_132xe588j;
public static function m4is_4rpxwah5d2xnmkdncat6() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_ranr89c2gngyncmfbwyag76f1rq();

}
private function m4is_cmdwra5kyw39gn1ptag2c7f2() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
private function m4is_ranr89c2gngyncmfbwyag76f1rq() {
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings' );

$m4is_c2fgawhnzkr8b4ydnz48h70s = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'site_lock_enabled' );
$m4is_f88p0235v048rzn7 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings',
 'page_inheritance' );
$m4is_xezyesn9xgy5ekey2p = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'force_learndash_inheritance' );

$m4is_vh8mdx8exn7 = $this->m4is_132xe588j->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b( 'settings', 'default_prohibited_action' );
$m4is_tqp17d1k8s71f1x3m9rxh3519r8 = $this->m4is_qaayfj57m();

$m4is_bphcqny0na5847ajp6rm3xs0kn9h7 = $this->m4is_ybe4fj2x6jr2mss0v();
$m4is_vmhtx2ecrnzjpy = wp_nonce_field( $this->m4is_132xe588j->m4is_54b9bwwsx7sym(),
 'memberium_options_nonce', true, false );
echo <<<HTMLBLOCK

			<p>You can set your content protection options below but even though you can do some fun stuff, none of them are required to launch your site.</p>
			<form method="POST" action="">
				{$m4is_vmhtx2ecrnzjpy}
				<h3>General Protection Options</h3>
				<ul>
		HTMLBLOCK;

m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Site Lock', 'site_lock_enabled', 8354, $m4is_c2fgawhnzkr8b4ydnz48h70s );
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Page Security Inheritance',
 'page_inheritance', 6374, $m4is_f88p0235v048rzn7 );
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Force LearnDash Security Inheritance',
 'force_learndash_inheritance', 21594, $m4is_xezyesn9xgy5ekey2p );
m4is_dv250ra9xbtaf::m4is_jt0y34knx7ws34fc4xjmj90gq( 'Default Prohibited Action',
 'default_prohibited_action', $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['default_prohibited_action'], $m4is_tqp17d1k8s71f1x3m9rxh3519r8, ['help_id' =>
 1217] );
m4is_dv250ra9xbtaf::m4is_f8vws9aeenhp('Default Page Redirect', 'default_page_redirect', $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['default_page_redirect'],
 ['help_id' => 1220, 'style' => 'text-align:left;width:250px;', 'placeholder' => 'Absolute or Relative URL.  Leave blank for login page.']);


echo <<<HTMLBLOCK

			</ul>
			<hr>
			<h3>Excerpts/Teasers</h3>
			<ul>
		HTMLBLOCK;
m4is_dv250ra9xbtaf::m4is_0ba0x0q69hk5ww2sn2ww( 'Always Generate Excerpts',
 'autogenerate_excerpts', 6808, $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['autogenerate_excerpts'] );
m4is_dv250ra9xbtaf::m4is_jt0y34knx7ws34fc4xjmj90gq( 'Auto Include Default Excerpt',
 'include_default_excerpt', $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['include_default_excerpt'], $m4is_bphcqny0na5847ajp6rm3xs0kn9h7, ['help_id' =>
 6808] );
m4is_dv250ra9xbtaf::m4is_1nj1ys2vvgakb6bgcgt6g( 'Auto Excerpt Length', 'excerpt_length', $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['excerpt_length'],
 ['help_id' => 6811, 'min' => 0, 'max' => 999, 'size' => 5] );
$this->m4is_ycc3rwc549vmy4zx9ec3cfmd858b( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy );

echo m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(1224);
echo <<<HTMLBLOCK

			</ul>
			<p><input type="submit" value="Update" class="button-primary"></p>
			</form>
		HTMLBLOCK;

}
private function m4is_qaayfj57m() {

return [
'redirect' => 'Redirect',
'hide' => 'Hide Completely',
'excerpt' => 'Show Excerpt Only',

'' => 'None',
];
}
private function m4is_ybe4fj2x6jr2mss0v() {
return [
'' => 'None',
'prepend' => 'Prepend Default Excerpt',
'append' =>
 'Append Default Excerpt',
'embed' => 'Embed Excerpt',
];
}
private function m4is_ycc3rwc549vmy4zx9ec3cfmd858b( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy ) {
$m4is_bp4te9x8q8g0rbj29y34d9hw8 = defined( 'MEMBERIUM_NOWYSIWYG' ) && constant( 'MEMBERIUM_NOWYSIWYG' );

echo '<table style="width:100%;">';
echo '<tr><td width="300" valign="top">';
echo '<p>Default Excerpt', m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(1224),
 '</p>';
echo '</td><td style="padding-right:25px;">';
if ( $m4is_bp4te9x8q8g0rbj29y34d9hw8 ) {
echo '<textarea name="global_excerpt" cols="40" rows="5" placeholder="Enter your teaser content HTML here">',
 $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['global_excerpt'], '</textarea>';
}
else {
wp_editor( $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['global_excerpt'],
 'global_excerpt' );
}
echo '</td></tr></table>';
}
}
