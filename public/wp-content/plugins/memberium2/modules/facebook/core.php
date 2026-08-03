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

final class m4is_bczvjfmtvxae6 {
private string $m4is_yvwazbsbk2x03ax8f;
static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}
private function __construct() {
$this->m4is_5eragr7sh2yyj356m();
}
private function m4is_5eragr7sh2yyj356m() {
if (is_admin() ) {
m4is_z5hswpfz70s0jrga3whe6zy40d::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}
else {
$this->m4is_jp0rgxf2ytap1chmfg();
add_action('wp_head', [$this, 'm4is_8fv93rnb8fkt3862gbwwxnz2x']);
}
}
private function m4is_jp0rgxf2ytap1chmfg() {
$m4is_53mq3k4adf3m0 = 'm4is_jj39y699yc0xtqc41mxfsqt82c9439';

add_shortcode('memb_fb_comments', [$m4is_53mq3k4adf3m0, 'm4is_z4tsx9ex'] );
add_shortcode('memb_fb_embed_comment', [$m4is_53mq3k4adf3m0,
 'm4is_5exmhamp0p8gy6wkj1e1x2vatywpqc'] );
add_shortcode('memb_fb_follow', [$m4is_53mq3k4adf3m0, 'm4is_j72krzcg8fez28jvsxfk4pzbgn'] );

add_shortcode('memb_fb_like', [$m4is_53mq3k4adf3m0, 'm4is_xe34qrtqv1djtn5k'] );
add_shortcode('memb_fb_page', [$m4is_53mq3k4adf3m0,
 'm4is_cvd858b3bx9vxts'] );
add_shortcode('memb_fb_save_button', [$m4is_53mq3k4adf3m0, 'm4is_mrk08z4y7w45nsh3e9dw3gyatm'] );
add_shortcode('memb_fb_send',
 [$m4is_53mq3k4adf3m0, 'm4is_mtbd8vcpr7tpnb3nwgekxetcw0b9'] );
add_shortcode('memb_fb_share', [$m4is_53mq3k4adf3m0, 'm4is_0zcy6z16rxs22z8sbmypvrqxfxjz'] );

add_shortcode('memb_fb_video', [$m4is_53mq3k4adf3m0, 'm4is_p0329dx2xd3a7pb8eh3k2h6fev1f2yde'] );
}
private function get_app_id() {
if ($this->m4is_yvwazbsbk2x03ax8f === false) {
$this->m4is_yvwazbsbk2x03ax8f = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'facebook_app_id');
}
return $this->m4is_yvwazbsbk2x03ax8f;
}
function m4is_8fv93rnb8fkt3862gbwwxnz2x() {
$this->m4is_yvwazbsbk2x03ax8f = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings',
 'facebook_app_id');
if (! empty($this->m4is_yvwazbsbk2x03ax8f) ) {
echo '
			<script>
				window.fbAsyncInit = function() {
				FB.init({
					appId            : \'' . $this->m4is_yvwazbsbk2x03ax8f . '\',
					autoLogAppEvents : true,
					xfbml            : true,
					version          : \'v4.0\'
				});
				};
			</script>
			<script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
			';

}
}
}
