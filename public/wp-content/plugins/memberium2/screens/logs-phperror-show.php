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
new m4is_43fgkmmrcetd6rrhem88q0();

final class m4is_43fgkmmrcetd6rrhem88q0 {
private $m4is_3ghfj784at15ety4bxw9ymn2ghge = [];
private $m4is_x04gppwqgd7g629cmy51sszgn2mfnvc = [];

private $m4is_zn16cenmjhaz1w67 = [];
function __construct() {
$this->m4is_ranr89c2gngyncmfbwyag76f1rq();
}
private function m4is_ranr89c2gngyncmfbwyag76f1rq() : void {
$this->m4is_sksynmwe9bz();

echo '<h3>PHP Error Logs</h3>';
if ( empty( $this->m4is_3ghfj784at15ety4bxw9ymn2ghge ) ) {
echo '<p>No PHP Error logs found.</p>';

return;
}
$m4is_mt7yszd4sv9x993x7z5wznrbc = 32 * KB_IN_BYTES;
foreach( $this->m4is_3ghfj784at15ety4bxw9ymn2ghge as $m4is_66vfp3wv6 ) {
if ( file_exists( $m4is_66vfp3wv6 ) ) {
$m4is_74n0m2zcpq = filesize( $m4is_66vfp3wv6 );

$m4is_ws6sn2ffw = ceil( $m4is_74n0m2zcpq / MB_IN_BYTES );
$m4is_t2kx57ws2fs1z4pk093xmhnh3yjb2bq = $m4is_mt7yszd4sv9x993x7z5wznrbc > $m4is_74n0m2zcpq ? 0 : -$m4is_mt7yszd4sv9x993x7z5wznrbc;

$m4is_6cq9fnnf1xgyavz75mpaqcm29h58khn = human_time_diff( time(), filemtime( $m4is_66vfp3wv6 ) );
$m4is_xv6p9vskh7r5rw4kkk628t42q26t = size_format( $m4is_74n0m2zcpq );

$m4is_h25q5ncavpgv028bwvdvc3hk64r1h = size_format( $m4is_mt7yszd4sv9x993x7z5wznrbc );
$m4is_m30zwyfbkckhny3sff2tc = esc_html( file_get_contents( $m4is_66vfp3wv6,
 false, null, $m4is_t2kx57ws2fs1z4pk093xmhnh3yjb2bq, $m4is_mt7yszd4sv9x993x7z5wznrbc ) );
echo <<<HTMLBLOCK

					<div style="margin-bottom:20px">
						Location: {$m4is_66vfp3wv6}<br>
						Last Updated: {$m4is_6cq9fnnf1xgyavz75mpaqcm29h58khn} ago<br>
						Total Error Log Length:  {$m4is_xv6p9vskh7r5rw4kkk628t42q26t}<br />
						Displaying last {$m4is_h25q5ncavpgv028bwvdvc3hk64r1h}<br>';
						<textarea style="width:80%" rows="20">{$m4is_m30zwyfbkckhny3sff2tc}</textarea><br />
					</div>
				HTMLBLOCK;

}
}
}
public function m4is_sksynmwe9bz( string $m4is_rvcykxc8f6 = ABSPATH ) : array {
$m4is_r2d01p7w70wh2g5 = 'memberium/logs/php/errors';

$m4is_y8932443qmxht76g140xsenedgc = 3 * MINUTE_IN_SECONDS;
$m4is_jvgzs2eeq8b4ej0 = get_transient( $m4is_r2d01p7w70wh2g5 );
if ( is_array( $m4is_jvgzs2eeq8b4ej0 ) && ! empty( $m4is_jvgzs2eeq8b4ej0 ) ) {
$this->m4is_3ghfj784at15ety4bxw9ymn2ghge = $m4is_jvgzs2eeq8b4ej0;

return $m4is_jvgzs2eeq8b4ej0;
}
$this->m4is_3ghfj784at15ety4bxw9ymn2ghge = [];
$this->m4is_x04gppwqgd7g629cmy51sszgn2mfnvc[] = trailingslashit( trailingslashit( WP_CONTENT_DIR ) . 'uploads' );

$this->m4is_x04gppwqgd7g629cmy51sszgn2mfnvc[] = trailingslashit( wp_get_upload_dir()['basedir'] );
$this->m4is_x04gppwqgd7g629cmy51sszgn2mfnvc[] = trailingslashit( WP_PLUGIN_DIR );

$m4is_q4kwg4mss6a = ini_get( 'error_log' );
if ( defined( 'UPLOADS' ) ) {
$this->m4is_x04gppwqgd7g629cmy51sszgn2mfnvc[] = str_replace( trailingslashit( WP_CONTENT_DIR ),
 '', untrailingslashit( UPLOADS ) );
}
if ( ! empty( $m4is_q4kwg4mss6a ) ) {
$this->m4is_3ghfj784at15ety4bxw9ymn2ghge[] = $m4is_q4kwg4mss6a;

}
$this->m4is_50061mf21p1d7dntvbxqp7fnw3g6p( $m4is_rvcykxc8f6 );
set_transient( $m4is_r2d01p7w70wh2g5, $this->m4is_3ghfj784at15ety4bxw9ymn2ghge,
 $m4is_y8932443qmxht76g140xsenedgc );
return $this->m4is_3ghfj784at15ety4bxw9ymn2ghge;
}
private function m4is_0nc0c6axdzhj6470n2se879p5b01gnwh( string $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7 ) : bool {
if ( is_dir( $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7 ) ) {
return false;

}
$m4is_vmvdqnqytj5z4rq1kwrmqfc3y5zb67 = false;
$m4is_59ma41vp6br73cma4zx8md8a1ek = null;
$m4is_t2kx57ws2fs1z4pk093xmhnh3yjb2bq = 0;

$m4is_kw23kqxbesd8dvhkn = 4 * KB_IN_BYTES;
$m4is_6x1z0bb8bamn98w3bss8ffs = file_get_contents( $m4is_e937j0d0zzqsgevn9qzbsc6qzd8xzh7,
 $m4is_vmvdqnqytj5z4rq1kwrmqfc3y5zb67, $m4is_59ma41vp6br73cma4zx8md8a1ek, $m4is_t2kx57ws2fs1z4pk093xmhnh3yjb2bq, $m4is_kw23kqxbesd8dvhkn );

if ( strpos( $m4is_6x1z0bb8bamn98w3bss8ffs, 'PHP Fatal error' ) !== false ) {
return true;
}
if ( strpos( $m4is_6x1z0bb8bamn98w3bss8ffs,
 'PHP Parse error' ) !== false ) {
return true;
}
if ( strpos( $m4is_6x1z0bb8bamn98w3bss8ffs, 'PHP Warning' ) !== false ) {
return true;

}
if ( strpos( $m4is_6x1z0bb8bamn98w3bss8ffs, 'PHP Notice' ) !== false ) {
return true;
}
return false;
}
private function m4is_50061mf21p1d7dntvbxqp7fnw3g6p( string $m4is_rvcykxc8f6 ) {
if ( ! is_dir( $m4is_rvcykxc8f6 ) ) {
return;

}
$m4is_2eg5afjxq8 = (array) scandir( $m4is_rvcykxc8f6 );
foreach( $m4is_2eg5afjxq8 as $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p ) {
if ( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p == '.' || $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p == '..' ) {
continue;

}
if ( stripos( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p, 'php_errorlog') !== false || stripos( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p, 'debug.log') !== false ) {
$this->m4is_3ghfj784at15ety4bxw9ymn2ghge[] = $m4is_rvcykxc8f6 . $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p;

}
elseif ( stripos( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p, '.php') === false ) {
if ( stripos( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p,
 'log') !== false ) {
if ( strpos( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p, 'error') !== false || strpos( $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p,
 'debug') !== false ) {
$m4is_y57d9y3xt = $m4is_rvcykxc8f6 . DIRECTORY_SEPARATOR . $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p;
if ( $this->m4is_0nc0c6axdzhj6470n2se879p5b01gnwh( $m4is_rvcykxc8f6 . $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p ) ) {
$this->m4is_3ghfj784at15ety4bxw9ymn2ghge[] = $m4is_rvcykxc8f6 . $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p;

}
}
}
}

$m4is_vafbnsnpq8s1fjn86hzk51f3yhnpmewz = $m4is_rvcykxc8f6 . $m4is_8nxfnj4wyzh8c1cf4r2cep3rnm3a1p . DIRECTORY_SEPARATOR;
if ( is_dir( $m4is_vafbnsnpq8s1fjn86hzk51f3yhnpmewz ) ) {

$this->m4is_50061mf21p1d7dntvbxqp7fnw3g6p( $m4is_vafbnsnpq8s1fjn86hzk51f3yhnpmewz );


}
}
return;
}
}
