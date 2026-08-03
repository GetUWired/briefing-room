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
global $wpdb;


$m4is_4090zxzk5 = 5;
$m4is_dmhydt6d2gv1na7516p1dv37qpmd = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->get_i2sdk_options();

$m4is_w0vxrs5es51ydcze = (array) m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('ga_customvars');


$m4is_f0q1306jv14scd960 = [
'' => '[Select the Variable]',
'!system.membership_level' => 'Membership Level',
'!system.membership_name' =>
 'Membership Name',
];
$m4is_7b2yfzk0054 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n('Contact', TRUE );
$m4is_gqsc4mq3nmh1sr5dknx6119v7 = [''];

foreach ($m4is_7b2yfzk0054 as $m4is_2y5t59g3f0yqenxx => $m4is_bbsta3mvjhhvh1x97vfpm9e ) {
$m4is_f0q1306jv14scd960['!contact.' . strtolower($m4is_bbsta3mvjhhvh1x97vfpm9e ) ] = 'Contact ' . $m4is_bbsta3mvjhhvh1x97vfpm9e;

}
$m4is_7b2yfzk0054 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n('Affiliate', TRUE);
foreach ($m4is_7b2yfzk0054 as $m4is_2y5t59g3f0yqenxx =>
 $m4is_bbsta3mvjhhvh1x97vfpm9e ) {
$m4is_f0q1306jv14scd960['!affiliate.' . strtolower($m4is_bbsta3mvjhhvh1x97vfpm9e ) ] = 'Affiliate ' . $m4is_bbsta3mvjhhvh1x97vfpm9e;

}
if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

if (isset($_POST['add-variable'] ) ) {
$m4is_w0vxrs5es51ydcze[$_POST['slot_id']] = [
'name' =>
 $_POST['slot_name'],
'variable' => $_POST['slot_variable'],
'label' => $m4is_f0q1306jv14scd960[$_POST['slot_variable']],
];
m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('Custom Variable Added' );

}

if (!empty($_POST['delete'] ) ) {
foreach ($_POST['delete'] as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
if ($m4is_rqxytszfq5v6syth1csqqxvy5 == 'on' ) {
unset($m4is_w0vxrs5es51ydcze[$m4is_j8j55t8dz79m7] );

m4is_dv250ra9xbtaf::m4is_atwps00cdt9a5bc0srjtfz75wh4c('Custom Variable Deleted' );
}
}
}

m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_ke3nwk5g93jygt8wwcej($m4is_w0vxrs5es51ydcze,
 'ga_customvars');
}
$m4is_qjkz63kpbdj511mb = [];
for ($i = 1; $i <= $m4is_4090zxzk5; $i++ ) {
if (!isset($m4is_w0vxrs5es51ydcze[$i] ) ) {
$m4is_qjkz63kpbdj511mb[] = $i;

}
}
m4is_dv250ra9xbtaf::m4is_dagbw7aea4y90yradk9x7b();
?>
<div class="wrap">
	<h1>Memberium Google Analytics Settings</h1>
	<?php
 if (count($m4is_w0vxrs5es51ydcze ) > $m4is_4090zxzk5 ) {
echo '<tr><td colspan="6">',
 _e('All custom variable slots are assigned.' ), '</td></tr>';
} else {
$m4is_bfwqtyydqrhv = '';
foreach ($m4is_f0q1306jv14scd960 as $m4is_rqxytszfq5v6syth1csqqxvy5 =>
 $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 ) {
$m4is_bfwqtyydqrhv.= '<option value="' . $m4is_rqxytszfq5v6syth1csqqxvy5 . '">' . $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 . '</option>';

}
$m4is_jzbbdw0njhryzwb8 = '';
foreach ($m4is_qjkz63kpbdj511mb as $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 ) {
$m4is_jzbbdw0njhryzwb8.= '<option value="' . $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 . '">' . $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 . '</option>';

}
?>
		<h3>Add New Custom Variable</h3>
		<div style="width:800px;">
			<form method="POST" action="">
				<table class="widefat">
					<tr>
						<th>Custom Variable Label</th>
						<th>Order</th>
						<th>Value</th>
					</tr>
					<tr>
						<td><input name="slot_name" type="text" size="25" required="required" placeholder="Your name for this variable"/></td>
						<td><select name="slot_id" required="required"><?php echo $m4is_jzbbdw0njhryzwb8;
 ?></select></td>
						<td><select name="slot_variable" required="required"><?php echo $m4is_bfwqtyydqrhv; ?></select></td>
					</tr>
				</table>
				&nbsp;<br />
				<input type="submit" name="add-variable" value="Add Custom Variable" class="button-primary" />
				<hr />
			</form>
		</div>
		<?php
 } ?>
	<h3>Current Custom Variables</h3>
	<div style="width:800px;">
		<form method="POST" action="">
			<hr />
			<table class="widefat" style="white-space:nowrap;">
				<tr>
					<th>Custom Variable Label</th>
					<th>Order</th>
					<th>Value</th>
					<th>Delete?</th>
				</tr>
				<?php
 if (count($m4is_w0vxrs5es51ydcze ) == 0 ) {
echo '<td colspan="99">You have no custom variables defined.</td>';

} else {
foreach ( (array)$m4is_w0vxrs5es51ydcze as $m4is_2hry81sc2ds25f6m7ymncdgxhvkxm6b => $m4is_7a2gdk96eyg085rz5vn8zc9g6 ) {
echo '<tr>';

echo '<td>';
echo $m4is_7a2gdk96eyg085rz5vn8zc9g6['name'];
echo '</td>';
echo '<td>';
echo $m4is_2hry81sc2ds25f6m7ymncdgxhvkxm6b;
echo '</td>';

echo '<td>';
echo $m4is_7a2gdk96eyg085rz5vn8zc9g6['label'];
echo '</td>';
echo '<td>';
echo '<input type="checkbox" name="delete[' . $m4is_2hry81sc2ds25f6m7ymncdgxhvkxm6b . ']">';

echo '</td>';
echo '</tr>';
}
} ?>
			</table>
			&nbsp;<br />
			<input type="submit" name="delete-variables" value="Delete Custom Variables" class="button-secondary" />
		</form>
	</div>
</div>
<hr />

