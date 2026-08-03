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

current_user_can( 'manage_options' ) || wp_die(__('You do not have sufficient permissions to access this page.') );
final class m4is_kry7vxf16mwtagqxerq2rd9sxrf8s0 {
public static function m4is_de8n8qy4mmtnkq33p() : self {
static $m4is_x83y9shwv134vk9r8c85;

return $m4is_x83y9shwv134vk9r8c85 ??= new self;
}

private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_9adtaa67sa21q2c604j55azyzd();

$this->m4is_ranr89c2gngyncmfbwyag76f1rq();
$this->m4is_v5ca5mv5bwszy11g12kyvgd2m1dhxr5d();
}

private function m4is_cmdwra5kyw39gn1ptag2c7f2() : void {
}

private function m4is_9adtaa67sa21q2c604j55azyzd() : void {
if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
return;

}
$m4is_0bcpcwwqar9n = get_option( 'memberium_wpcw', [] );
$m4is_yhdk2h7srcr7n5mzjnw7m6b = isset( $_POST['type'] ) ? $_POST['type'] : '';

if ( $m4is_yhdk2h7srcr7n5mzjnw7m6b == 'courses' ) {
$m4is_0bcpcwwqar9n['courses']['access_tags'] = $_POST['access_tags'];
$m4is_0bcpcwwqar9n['courses']['completion_tag'] = $_POST['completion_tag'];

}
elseif ( $m4is_yhdk2h7srcr7n5mzjnw7m6b == 'modules') {
$m4is_0bcpcwwqar9n['modules']['completion_tag'] = $_POST['completion_tag'];

}
update_option( 'memberium_wpcw', $m4is_0bcpcwwqar9n );
}
private function m4is_ranr89c2gngyncmfbwyag76f1rq() : void {
$m4is_0bcpcwwqar9n = get_option( 'memberium_wpcw',
 [] );
$m4is_mzjfbdah8s6 = $this->m4is_m82jnpf1q6x63cp();
$m4is_jq2e3019hp45103bhm95sxmccqd8 = $this->m4is_p7v72pr4wvx454he36kprcm2mdgm365();

if ( ! empty( $m4is_mzjfbdah8s6 ) ) {
echo <<<HTMLBLOCK

				<h2>WP Courseware Courses</h2>
			HTMLBLOCK;
$this->m4is_escsw9z9evdvypvza4z( $m4is_mzjfbdah8s6,
 $m4is_0bcpcwwqar9n );
if ( ! empty( $m4is_jq2e3019hp45103bhm95sxmccqd8 ) ) {
echo <<<HTMLBLOCK

					<h2>WP Courseware Modules</h2>
				HTMLBLOCK;

$this->m4is_f8q2dxt20hfv98r2gz14xanra3ave( $m4is_jq2e3019hp45103bhm95sxmccqd8, $m4is_0bcpcwwqar9n );
}
else {
echo '<p>No modules found.</p>';

}
}
else {
echo '<p>No courses found.</p>';
}
}
private function m4is_v5ca5mv5bwszy11g12kyvgd2m1dhxr5d() : void {
$m4is_n3mh1pgjh5vsdwgjvzgp8fw6nmy = [];

$m4is_06c8s5xs94f91335gnaey25 = m4is_0ddg4zyk7dn8eg0283::m4is_x73n0p7w( true );
$m4is_06c8s5xs94f91335gnaey25 = $m4is_06c8s5xs94f91335gnaey25['mc'];

$m4is_ntwdtvd857wpp5qmp1edbfp92c3 = [];
$m4is_ntwdtvd857wpp5qmp1edbfp92c3[] = [
'id' => 0,
'text' => '(None)'
];
if ( is_array( $m4is_06c8s5xs94f91335gnaey25 ) ) {
foreach ( (array) $m4is_06c8s5xs94f91335gnaey25 as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh =>
 $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0) {
if (! in_array($m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh, $m4is_n3mh1pgjh5vsdwgjvzgp8fw6nmy) ) {
$m4is_ntwdtvd857wpp5qmp1edbfp92c3[] = [
'id' =>
 $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh,
'text' => $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 . ' (' . $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh . ')'
];

}
}
}
$m4is_ntwdtvd857wpp5qmp1edbfp92c3 = json_encode($m4is_ntwdtvd857wpp5qmp1edbfp92c3);
echo '<script>';
echo 'var taglist = ', $m4is_ntwdtvd857wpp5qmp1edbfp92c3,
 ';';
echo '</script>';
}
private function m4is_m82jnpf1q6x63cp() : array {
global $wpdb;
global $wpcwdb;
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT `course_id`, `course_title`, `course_desc`, `course_opt_user_access` FROM %i WHERE 1 ORDER BY `course_opt_user_access` ASC, `course_id` DESC",
 $wpcwdb->courses );
$m4is_mzjfbdah8s6 = (array) $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );
return $m4is_mzjfbdah8s6;

}
private function m4is_p7v72pr4wvx454he36kprcm2mdgm365() : array {
global $wpdb;
global $wpcwdb;
$m4is_5rbenkpt1v7xby2cknbs7 = $wpdb->prepare( "SELECT * FROM %i WHERE 1 ORDER BY parent_course_id ASC, module_order ASC",
 $wpcwdb->modules );
$m4is_jq2e3019hp45103bhm95sxmccqd8 = (array) $wpdb->get_results( $m4is_5rbenkpt1v7xby2cknbs7, ARRAY_A );
return $m4is_jq2e3019hp45103bhm95sxmccqd8;

}
private function m4is_escsw9z9evdvypvza4z( array $m4is_mzjfbdah8s6, array $m4is_0bcpcwwqar9n ) : void {
echo <<<HTMLBLOCK

			<form method="post" action="">
				<input type="hidden" name="type" value="courses">
				<table class="widefat" style="white-space:nowrap;">
					<tr>
						<td>Title</td>
						<td>Mode</td>
						<td>Access Tag</td>
						<td>Completion Tag</td>
					</tr>
		HTMLBLOCK;

foreach( $m4is_mzjfbdah8s6 as $m4is_dbkkvm60vrfe6dvcc56g3s ) {
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = $m4is_dbkkvm60vrfe6dvcc56g3s['course_id'];

$m4is_agrb04wvghmny2c4p8bwwf4 = $m4is_dbkkvm60vrfe6dvcc56g3s['course_title'];
$m4is_a6btn376p23vccn8a = $m4is_dbkkvm60vrfe6dvcc56g3s['course_desc'];

$m4is_sj35ny09bc2dzcza0xt8m93rhys = $m4is_dbkkvm60vrfe6dvcc56g3s['course_opt_user_access'] == 'default_hide';
$m4is_gx2r3gmw1j15fqckjg3y1f0vf8sh4d = empty( $m4is_0bcpcwwqar9n['courses']['access_tags'][$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] ) ? '' : $m4is_0bcpcwwqar9n['courses']['access_tags'][$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh];

$m4is_fesdffkpq916gr = empty( $m4is_0bcpcwwqar9n['courses']['completion_tag'][$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] ) ? '' : $m4is_0bcpcwwqar9n['courses']['completion_tag'][$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh];

$m4is_e1kkmsmneetzs6ntsjb3mx = $m4is_sj35ny09bc2dzcza0xt8m93rhys ? '<strong style="color:red;">Protected</strong>' : '<strong style="color:green;">Public</strong>';

if ( $m4is_sj35ny09bc2dzcza0xt8m93rhys ) {
$m4is_bcawc848nys5v5ke1fdzkd70q = <<<HTMLBLOCK

					<input style="width:300px;" type="text" class="multitaglist" value="{$m4is_gx2r3gmw1j15fqckjg3y1f0vf8sh4d}" name="access_tags[{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}]" />
				HTMLBLOCK;

}
else {
$m4is_bcawc848nys5v5ke1fdzkd70q = <<<HTMLBLOCK

					<em>Automatic</em>
					<input type="hidden" value="0" name="access_tags[{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}">
				HTMLBLOCK;

}
echo <<<HTMLBLOCK

						<tr>
							<td>
								<strong>{$m4is_agrb04wvghmny2c4p8bwwf4}</strong><br>
								{$m4is_a6btn376p23vccn8a}
							</td>
							<td>
								{$m4is_e1kkmsmneetzs6ntsjb3mx}
							</td>
							<td>
								{$m4is_bcawc848nys5v5ke1fdzkd70q}
							</td>
							<td>
								<input type="text" style="width:300px;" class="multitaglist" value="{$m4is_fesdffkpq916gr}" name="completion_tag[{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}]">
							</td>
						</tr>
			HTMLBLOCK;

}
echo <<<HTMLBLOCK

				</table>
				<p>
					<input type="submit" class="button-primary"value="Update" />
				</p>
			</form>
		HTMLBLOCK;

}
private function m4is_f8q2dxt20hfv98r2gz14xanra3ave( array $m4is_jq2e3019hp45103bhm95sxmccqd8, array $m4is_0bcpcwwqar9n ) : void {
echo <<<HTMLBLOCK

			<form method="post" action="">
				<input type="hidden" name="type" value="modules" />
				<table class="widefat" style="white-space:nowrap;">
					<tr>
						<td>Title</td>
						<td>Completion Tag</td>
					</tr>
		HTMLBLOCK;

foreach( $m4is_jq2e3019hp45103bhm95sxmccqd8 as $m4is_re955zqwq0c9x4hc18zgse846 ) {
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = $m4is_re955zqwq0c9x4hc18zgse846['module_id'];

$m4is_agrb04wvghmny2c4p8bwwf4 = $m4is_re955zqwq0c9x4hc18zgse846['module_title'];
$m4is_a6btn376p23vccn8a = $m4is_re955zqwq0c9x4hc18zgse846['module_desc'];

$m4is_fesdffkpq916gr = isset( $m4is_0bcpcwwqar9n['modules']['completion_tag'][$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] ) ? $m4is_0bcpcwwqar9n['modules']['completion_tag'][$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] : '';

echo <<<HTMLBLOCK

					<tr>
						<td>
							<strong>{$m4is_agrb04wvghmny2c4p8bwwf4}</strong><br>
							{$m4is_a6btn376p23vccn8a}
						</td>
						<td>
							<input type="text" style="width:300px;" class="multitaglist" value="{$m4is_fesdffkpq916gr}" name="completion_tag[{$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh}]">
						</td>
					</tr>
			HTMLBLOCK;

}
echo <<<HTMLBLOCK

				</table>
				<p>
					<input type="submit" class="button-primary" value="Update" />
				</p>
			</form>
		HTMLBLOCK;

}

}

