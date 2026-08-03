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
m4is_j1es5nxhtptadptyek03fpmrwydjdc7::m4is_ranr89c2gngyncmfbwyag76f1rq();

class m4is_j1es5nxhtptadptyek03fpmrwydjdc7 {
private $m4is_aq3n8kjvpsvryrrf9exmx = '';
private $m4is_ta6xqxkcdz0c5g3pk = [];
private $m4is_0x8ryzrsq5m76;

static function m4is_ranr89c2gngyncmfbwyag76f1rq() : self {
static $m4is_x83y9shwv134vk9r8c85;
return $m4is_x83y9shwv134vk9r8c85 ??= new self();

}
private function __construct() {
$this->m4is_0x8ryzrsq5m76 = m4is_ceb204yxgttkb1dvyrsjh2ww7qvw3::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$this->m4is_ta6xqxkcdz0c5g3pk = $this->m4is_ddft7ar87symkkfq9t589f93az0();
$this->m4is_aq3n8kjvpsvryrrf9exmx = $this->m4is_mzxreakhktx8nkmez7( $_GET );


$this->m4is_9adtaa67sa21q2c604j55azyzd( $_POST );
$this->m4is_dxvr34x0x8rxxwy15d8fx0j();
}
function m4is_ddft7ar87symkkfq9t589f93az0() {
$m4is_ta6xqxkcdz0c5g3pk = [
'leaderboards' =>
 '<i class="fa fa-list-ol"></i> Create Leaderboards',
'about' => '<i class="fa fa-users"></i> About',

];
return $m4is_ta6xqxkcdz0c5g3pk;

}
function m4is_mzxreakhktx8nkmez7( $m4is_h0n0e21dan1zcw2g33p27097pbmq6v ) {
return isset( $_GET['tab'] ) ? $_GET['tab'] : 'leaderboards';

}
function m4is_9adtaa67sa21q2c604j55azyzd( $m4is_z4ts5pa39jf1yhjb4 ) {
if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
return;
}
if ( isset( $m4is_z4ts5pa39jf1yhjb4['create-leaderboard'] ) ) {
$this->m4is_ac6wy8rjr2e8ettk4pz15p( $m4is_z4ts5pa39jf1yhjb4 );

}
elseif ( isset( $m4is_z4ts5pa39jf1yhjb4['update-leaderboard'] ) ) {
$this->m4is_pwvxhz1f24c0( $m4is_z4ts5pa39jf1yhjb4 );
}
elseif ( isset( $m4is_z4ts5pa39jf1yhjb4['refresh'] ) ) {
$this->m4is_2kb3d07wg6djrjqedyj30sb9ys8qw( $m4is_z4ts5pa39jf1yhjb4 );

}
}
private function m4is_2kb3d07wg6djrjqedyj30sb9ys8qw( $m4is_z4ts5pa39jf1yhjb4 ) {
$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh = (int) $_POST['refresh'];

$m4is_63jp3myxhpk1eyb606fb = $this->m4is_0x8ryzrsq5m76->m4is_eb4a3nfe63889q1ndrs();
$m4is_63jp3myxhpk1eyb606fb[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] = m4is_0jwc22e11j9k0y54c5::m4is_czd2m951nzcbhcdmw78g7z5qz( $m4is_63jp3myxhpk1eyb606fb[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] );

$m4is_b8c8berha6963wemnnc = require_once __DIR__ . '/cron.php';
$this->m4is_0x8ryzrsq5m76->m4is_9eb007p5xr35apr5dw1wex6t7tbdg1a( $m4is_63jp3myxhpk1eyb606fb );

m4is_0jwc22e11j9k0y54c5::m4is_czd2m951nzcbhcdmw78g7z5qz( $m4is_63jp3myxhpk1eyb606fb[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh] );
}
private function m4is_pwvxhz1f24c0( $m4is_z4ts5pa39jf1yhjb4 ) {
$m4is_63jp3myxhpk1eyb606fb = $this->m4is_0x8ryzrsq5m76->m4is_eb4a3nfe63889q1ndrs();

foreach( $m4is_z4ts5pa39jf1yhjb4['profile'] as $m4is_j8j55t8dz79m7 => $m4is_4v2f78h0ys2ppq750w77znhpbmr8h ) {
$m4is_63jp3myxhpk1eyb606fb[$m4is_j8j55t8dz79m7]['slots'] = $m4is_4v2f78h0ys2ppq750w77znhpbmr8h['slots'];

$m4is_63jp3myxhpk1eyb606fb[$m4is_j8j55t8dz79m7]['start_date'] = $m4is_4v2f78h0ys2ppq750w77znhpbmr8h['start_date'];
$m4is_63jp3myxhpk1eyb606fb[$m4is_j8j55t8dz79m7]['end_date'] = $m4is_4v2f78h0ys2ppq750w77znhpbmr8h['end_date'];

$m4is_63jp3myxhpk1eyb606fb[$m4is_j8j55t8dz79m7]['last_updated'] = 0;

if ( ! empty( $m4is_4v2f78h0ys2ppq750w77znhpbmr8h['delete'] ) ) {
unset( $m4is_63jp3myxhpk1eyb606fb[$m4is_j8j55t8dz79m7] );

}
}
$this->m4is_0x8ryzrsq5m76->m4is_9eb007p5xr35apr5dw1wex6t7tbdg1a( $m4is_63jp3myxhpk1eyb606fb );
}
private function m4is_ac6wy8rjr2e8ettk4pz15p( $m4is_z4ts5pa39jf1yhjb4 ) {
$m4is_63jp3myxhpk1eyb606fb = $this->m4is_0x8ryzrsq5m76->m4is_eb4a3nfe63889q1ndrs();

$m4is_z94vm9wh9006rp = [];
$m4is_z94vm9wh9006rp['name'] = empty( $m4is_z4ts5pa39jf1yhjb4['name'] ) ? '' : substr( trim( $m4is_z4ts5pa39jf1yhjb4['name'] ),
 0, 40 );
$m4is_z94vm9wh9006rp['type'] = empty( $m4is_z4ts5pa39jf1yhjb4['type'] ) ? 'leads' : $m4is_z4ts5pa39jf1yhjb4['type'];
$m4is_z94vm9wh9006rp['slots'] = empty( $m4is_z4ts5pa39jf1yhjb4['slots'] ) ? 0 : $m4is_z4ts5pa39jf1yhjb4['slots'];

$m4is_z94vm9wh9006rp['start_date'] = empty( $m4is_z4ts5pa39jf1yhjb4['start_date'] ) ? '' : $m4is_z4ts5pa39jf1yhjb4['start_date'];
$m4is_z94vm9wh9006rp['end_date'] = empty( $m4is_z4ts5pa39jf1yhjb4['end_date'] ) ? '' : $m4is_z4ts5pa39jf1yhjb4['end_date'];

$m4is_z94vm9wh9006rp['products'] = empty( $m4is_z4ts5pa39jf1yhjb4['products'] ) ? '' : trim( $m4is_z4ts5pa39jf1yhjb4['products'], ',' );

$m4is_z94vm9wh9006rp['last_updated'] = 0;
$m4is_z94vm9wh9006rp['cache'] = [];
if ( empty( $m4is_z94vm9wh9006rp['name'] ) ) {
return;

}
$m4is_63jp3myxhpk1eyb606fb[] = $m4is_z94vm9wh9006rp;
$this->m4is_0x8ryzrsq5m76->m4is_9eb007p5xr35apr5dw1wex6t7tbdg1a( $m4is_63jp3myxhpk1eyb606fb );

}
function m4is_dxvr34x0x8rxxwy15d8fx0j() {
m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_0ev16xnbdp();
m4is_dv250ra9xbtaf::m4is_dagbw7aea4y90yradk9x7b();

$this->m4is_r5xsxn67ce9ad();
if ($this->m4is_aq3n8kjvpsvryrrf9exmx == 'about' ) {
$this->m4is_xn27sgc4ejgmmmwvqtptm9rrgfm();
}
elseif ( $this->m4is_aq3n8kjvpsvryrrf9exmx == 'leaderboards' ) {
$this->m4is_6yr42t79q2();

}
$this->m4is_2ctdgg6p344h14jt();
}
private function m4is_r5xsxn67ce9ad() {
echo '</h2>';
echo '<div class="memberium_tabcontent" style="margin-top:10px;">';

echo '<div class="wrap">';

echo '<h2 class="nav-tab-wrapper">';
foreach ( $this->m4is_ta6xqxkcdz0c5g3pk as $m4is_ga7k41nm95cn0s4wkjqanw7 =>
 $m4is_hce1y1a4qd65zhnwsj ) {
$m4is_53mq3k4adf3m0 = ( $m4is_ga7k41nm95cn0s4wkjqanw7 == $this->m4is_aq3n8kjvpsvryrrf9exmx ) ? ' nav-tab-active' : '';

if ( $m4is_ga7k41nm95cn0s4wkjqanw7 == $this->m4is_aq3n8kjvpsvryrrf9exmx ) {
echo "<span class='nav-tab$m4is_53mq3k4adf3m0'>$m4is_hce1y1a4qd65zhnwsj</span>";

}
else {
echo "<a class='nav-tab{$m4is_53mq3k4adf3m0}' href='?page=", $_GET['page'], "&tab={$m4is_ga7k41nm95cn0s4wkjqanw7}'>{$m4is_hce1y1a4qd65zhnwsj}</a>";

}
}
echo '</h2>';
echo '<div class="memberium_tabcontent" style="margin-top:10px;">';
}
function m4is_xn27sgc4ejgmmmwvqtptm9rrgfm() {
$m4is_t9svq56t4ysv1rsgy1g61g = __( 'Version' ) . ' ' . $this->m4is_0x8ryzrsq5m76->m4is_5kywzj74m8ht8s0();

echo <<<HTMLBLOCK

			<h2>
				Memberium Affiliate Leaderboard Extension for Keap
			</h2>
			<p>{$m4is_t9svq56t4ysv1rsgy1g61g}</p>
			<p>Copyright &copy; 2017-2025 David Bullock, Web Power and Light</p>
		HTMLBLOCK;

}
function m4is_6yr42t79q2() {
$m4is_63jp3myxhpk1eyb606fb = $this->m4is_0x8ryzrsq5m76->m4is_eb4a3nfe63889q1ndrs();
$m4is_b8c8berha6963wemnnc = m4is_0jwc22e11j9k0y54c5::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$m4is_6xj2zq4143f49mqz9p79f7brf3mv = m4is_bbwjksaqsay3yt68xq9afn::m4is_gh12fb5596s29bycerd7thz1x9dspt();
if ( ! empty( $m4is_63jp3myxhpk1eyb606fb ) ) {
echo '<h3>Live Leaderboards</h3>';

echo '<form method="post">';
echo '<table class="widefat">';
echo '<tr>';
echo '<td style="width:50px;">Delete</td>';
echo '<td>Name</td>';

echo '<td style="width:50px;">Type</td>';
echo '<td style="width:50px;">Slots</td>';
echo '<td style="width:75px;">Start</td>';
echo '<td style="width:75px;">End</td>';

echo '<td>Products</td>';
echo '<td style="width:75px;">&nbsp;</td>';
echo '</tr>';
foreach( $m4is_63jp3myxhpk1eyb606fb as $m4is_j8j55t8dz79m7 =>
 $m4is_fh91430wnqcvjs3 ) {
echo '<tr>';
echo '<td><input type="checkbox" name="profile[',$m4is_j8j55t8dz79m7,'][delete]" value="1"></td>';

echo '<td>', $m4is_fh91430wnqcvjs3['name'] ,'</td>';
echo '<td>', ucwords( $m4is_fh91430wnqcvjs3['type'] ) ,'</td>';
echo '<td><input type="number" style="width:50px;" value="',
 $m4is_fh91430wnqcvjs3['slots'], '" step="1" min="1" name="profile[',$m4is_j8j55t8dz79m7,'][slots]"></td>';
echo '<td><input type="date" value="',
 $m4is_fh91430wnqcvjs3['start_date'], '" name="profile[',$m4is_j8j55t8dz79m7,'][start_date]"></td>';
echo '<td><input type="date" value="',
 $m4is_fh91430wnqcvjs3['end_date'], '" name="profile[',$m4is_j8j55t8dz79m7,'][end_date]"></td>';
echo '<td>';
$m4is_5xer6se1m23grqds20ger28y8j8jxn0q = empty( $m4is_fh91430wnqcvjs3['products'] ) ? [] : array_filter( explode( ',',
 $m4is_fh91430wnqcvjs3['products'] ) );
$m4is_gb01jqxh9ek2m = '';
if ( ! empty( $m4is_5xer6se1m23grqds20ger28y8j8jxn0q ) ) {
foreach( $m4is_5xer6se1m23grqds20ger28y8j8jxn0q as $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh ) {
$m4is_gb01jqxh9ek2m .= $m4is_6xj2zq4143f49mqz9p79f7brf3mv[$m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh]['ProductName'] . ', ';

}
unset( $m4is_5xer6se1m23grqds20ger28y8j8jxn0q, $m4is_2hvbd7ypdf50fvjxh3kjzgp0wj738sh );
}
echo trim( $m4is_gb01jqxh9ek2m, ', ' );

echo '</td>';
echo '<td><button name="refresh" class="button button-primary" value="', $m4is_j8j55t8dz79m7, '">Refresh</button></td>';


echo '</tr>';
}
echo '</table>';
echo '<p><input type="submit" name="update-leaderboard" value="Update Leaderboards" class="button-primary"></p>';

echo '</form>';
}
else {
echo '<p>You have no affiliate leaderboards created.  Create one now!</p>';
}
echo <<<HTMLBLOCK

			<form method="post" id="newprofile">
				<ul>
					<h3>Create New Leaderboard</h3>
		HTMLBLOCK;

$m4is_g61yzqs7ecta0xztr70d7v = [
'id' => 'newprofile_name',
'label' => 'Profile Name',
'placeholder' => 'Enter a name for your Leaderboard here',

'required' => true,
'size' => 40,
];
echo m4is_dv250ra9xbtaf::m4is_fnyrytswd4ra0cj8g9fka3e9('name', $m4is_g61yzqs7ecta0xztr70d7v);

$m4is_ra7dnjjzebn9h3t6k7a2p36 = [
'leads' => 'Most Leads',
'dollars' => 'Most Sales by Dollar Amount',
'invoices' => 'Most Sales by Invoice Count',

];
$m4is_g61yzqs7ecta0xztr70d7v = [
'id' => 'newprofile_type',
'class' => 'basic-single',
'style' => 'width:250px;',
];
$m4is_c9nryf13e43y9jensddce = null;

echo '<li><label>Leaderboard Type</label>';
echo m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_npdvp242vm6v81qannyq0n4ttf2zyxc2('type',
 $m4is_ra7dnjjzebn9h3t6k7a2p36, $m4is_c9nryf13e43y9jensddce, $m4is_g61yzqs7ecta0xztr70d7v);
echo m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5( 0000 ),
 '</li>';
$m4is_g61yzqs7ecta0xztr70d7v = [
'id' => 'newprofile_slots',
'label' => 'Slots',
'placeholder' => '',
'type' => 'number',

'min' => 1,
'step' => 1,
'value' => 10,
'style' => 'width:50px;',
'required' => true,
];
echo m4is_dv250ra9xbtaf::m4is_fnyrytswd4ra0cj8g9fka3e9( 'slots',
 $m4is_g61yzqs7ecta0xztr70d7v );
$m4is_g61yzqs7ecta0xztr70d7v = [
'id' => 'newprofile_start_date',
'label' => 'Start Date',
'placeholder' =>
 'mm/dd/yyyy',
'size' => 10,
'type' => 'date',
'required' => true,
];
echo m4is_dv250ra9xbtaf::m4is_fnyrytswd4ra0cj8g9fka3e9( 'start_date',
 $m4is_g61yzqs7ecta0xztr70d7v );
$m4is_g61yzqs7ecta0xztr70d7v = [
'id' => 'newprofile_end_date',
'label' => 'End Date',
'placeholder' =>
 'mm/dd/yyyy',
'size' => 10,
'type' => 'date',
'required' => true,
];
echo m4is_dv250ra9xbtaf::m4is_fnyrytswd4ra0cj8g9fka3e9( 'end_date',
 $m4is_g61yzqs7ecta0xztr70d7v );
$m4is_g61yzqs7ecta0xztr70d7v = [
'id' => 'newprofile_products',
'label' => 'Products',
'placeholder' =>
 'Select the products for your leaderboard, or leave blank for all',
'type' => 'text',
'class' => 'multiproductlistdropdown',
'style' =>
 'width:500px;',
'required' => false,
];
echo m4is_dv250ra9xbtaf::m4is_fnyrytswd4ra0cj8g9fka3e9( 'products', $m4is_g61yzqs7ecta0xztr70d7v );

echo '</ul>';
echo '<p><input type="submit" name="create-leaderboard" value="Create Leaderboard" class="button-primary"></p>';
echo '</form>';

echo '<hr>';
echo '</div>';
echo '</div>';
}
function m4is_2ctdgg6p344h14jt() {
$m4is_6xj2zq4143f49mqz9p79f7brf3mv = m4is_bbwjksaqsay3yt68xq9afn::m4is_gh12fb5596s29bycerd7thz1x9dspt();

$m4is_0xrppe2740s = [];
if ( empty( $m4is_6xj2zq4143f49mqz9p79f7brf3mv) || ! is_array( $m4is_6xj2zq4143f49mqz9p79f7brf3mv ) ) {
return;

}

foreach( $m4is_6xj2zq4143f49mqz9p79f7brf3mv as $m4is_m3h9r6vhs5rt8w41pn284phf ) {
$m4is_0xrppe2740s[] = [
'id' => $m4is_m3h9r6vhs5rt8w41pn284phf['Id'],

'text' => $m4is_m3h9r6vhs5rt8w41pn284phf['ProductName'] . ' (' . $m4is_m3h9r6vhs5rt8w41pn284phf['Id'] . ')'
];
}
$m4is_0xrppe2740s = json_encode( $m4is_0xrppe2740s );

echo '<script>';
echo 'var productlist = ', $m4is_0xrppe2740s, ';';
echo '</script>';
}
}
?>
<script>
	jQuery( '#newprofile').change( function() {
		var profile_type = jQuery( '#newprofile_type' ).val();
		if ( profile_type == 'leads' ) {
			jQuery(".filteroptions").prop( 'disabled', true );
			jQuery(".filteroptions").hide();
		}
		else {
			jQuery(".filteroptions").prop( 'disabled', false );
			jQuery(".filteroptions").show();
		}
	});

</script>
