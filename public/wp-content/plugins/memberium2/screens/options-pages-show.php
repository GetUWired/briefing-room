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
$m4is_8ew58cpxmftgpw93gdffm4s9bbwy = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_91n567txhe2ccz7zh02sxd0f12r93z7b('settings');

$m4is_watb1h5vhg6brv6b0f4max0dm5b = get_option('memberium_pages', [] );
echo '<form method="POST" action="">';
wp_nonce_field( m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_54b9bwwsx7sym(),
 'memberium_options_nonce' );
echo '<ul>';
echo '<h3>System Pages</h3>';
$m4is_k8g9y37tenmrpzc = '';
if (! empty($m4is_8ew58cpxmftgpw93gdffm4s9bbwy['login_url'] ) ) {
$m4is_k8g9y37tenmrpzc =
' <button formtarget="_blank" formaction="' . admin_url() . 'post.php?post=' . $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['login_url'] .
'&action=edit">Edit</button> <button formtarget="_blank" formaction="' . get_permalink($m4is_8ew58cpxmftgpw93gdffm4s9bbwy['login_url'] ) .
'">View</button> ';

}
m4is_dv250ra9xbtaf::m4is_p488tphrcjnwcmgtefr0jceb9ep('Login Page <strong style="color:red;">(Caution)</strong>', 'login_url', (int) $m4is_8ew58cpxmftgpw93gdffm4s9bbwy['login_url'],
 'pagelistdropdown', ['help_id' => 1206, 'units' => $m4is_k8g9y37tenmrpzc]);
$m4is_3g7faa0zhw70 = [];
$m4is_3g7faa0zhw70[] = ['n' =>
 'Membership Registration Page', 'k' => 'registration_page', 'h' => 0000];
$m4is_3g7faa0zhw70[] = ['n' => 'My Account Page', 'k' =>
 'my_account', 'h' => 0000];
$m4is_3g7faa0zhw70[] = ['n' => 'New Account Page', 'k' => 'new_account', 'h' => 0000];
$m4is_3g7faa0zhw70[] = ['n' =>
 'Member Profile Page', 'k' => 'profile_page', 'h' => 0000];
foreach($m4is_3g7faa0zhw70 as $m4is_ek8adjz9yz7wvga34bby56 ) {
$m4is_bqhtspcavhb01spmfd3x = $m4is_ek8adjz9yz7wvga34bby56['k'];

$m4is_tz1rt7sbq40fade6e6rx = isset($m4is_watb1h5vhg6brv6b0f4max0dm5b[$m4is_bqhtspcavhb01spmfd3x] ) ? (int) $m4is_watb1h5vhg6brv6b0f4max0dm5b[$m4is_bqhtspcavhb01spmfd3x] : 0;

echo '<li><label for="', $m4is_bqhtspcavhb01spmfd3x, '">', $m4is_ek8adjz9yz7wvga34bby56['n'], '</label>';
echo '<input value="', $m4is_tz1rt7sbq40fade6e6rx,
 '" type="hidden" id="', $m4is_bqhtspcavhb01spmfd3x, '" name="pages[', $m4is_bqhtspcavhb01spmfd3x, ']" class="dropdown pagelistdropdown">';

m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5($m4is_ek8adjz9yz7wvga34bby56['h'] );
if ($m4is_tz1rt7sbq40fade6e6rx ) {
echo ' <button formtarget="_blank" formaction="',
 admin_url() . 'post.php?post=', $m4is_tz1rt7sbq40fade6e6rx, '&action=edit">Edit</button> ';
echo ' <button formtarget="_blank" formaction="',
 get_permalink($m4is_tz1rt7sbq40fade6e6rx ), '">View</button> ';
}
m4is_dv250ra9xbtaf::m4is_s93t5xqe7a5(1208 );
echo '</li>';
}
echo '</ul>';

echo '<p><input type="submit" value="Update" class="button-primary"></p>';
echo '&nbsp;<br>';
echo '<h2>Templates</h2>';
echo 'Load Page Templates from <select name="template_id" id="">';

$m4is_q59bzxy2we53tbcbjrx4 = m4is_knfcbrvkjrz3n8k8y6gf::m4is_j8ybbvhh86fzfcxc8780drys43qdef()->m4is_h4xcw8dg053f1bbf29n320q20hv8tbf();

foreach($m4is_q59bzxy2we53tbcbjrx4 as $m4is_j8j55t8dz79m7 => $m4is_rqxytszfq5v6syth1csqqxvy5 ) {
echo '<option value="', ($m4is_j8j55t8dz79m7 + 1 ),
 '">', $m4is_rqxytszfq5v6syth1csqqxvy5['name'], '</option>';
}
echo '</select> to page ';
echo '<input value="0" type="hidden" id="" name="target_post_id" class="dropdown pagelistdropdown">';

echo '&nbsp;<br>';
echo '<p>';
echo '<input type="submit" name="page_load" value="Load Single Template" class="button-primary">';
echo '&nbsp;&nbsp;';

echo '<input type="submit" name="page_load" value="Load All Templates" class="button-primary">';
echo '</p>';
echo '<p>';
echo '<input type="submit" name="page_load" value="Install Email Templates" class="button-primary">';

echo '</p>';
if (isset($m4is_hemy1cj38vj ) ) {
echo '<p>Added ', $m4is_hemy1cj38vj, ' Email templates</p>';
}
echo '</form>';
