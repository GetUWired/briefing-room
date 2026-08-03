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

/**
 * Handles HTTP POST operations for Keap CRM integration within Memberium.
 *
 * This class provides routing and processing for HTTP POST requests, including
 * contact updates and country/region lookups based on postal codes.
 *
 * @package Memberium
 * @copyright 2021-2024 David J Bullock
 * @author David J Bullock
 * @license Proprietary
 */


final class m4is_7xvypgwes {
private $m4is_132xe588j;


static function m4is_j8ybbvhh86fzfcxc8780drys43qdef() : self {
static $m4is_x83y9shwv134vk9r8c85;
return $m4is_x83y9shwv134vk9r8c85 ??= new self;

}

private function __construct() {
$this->m4is_cmdwra5kyw39gn1ptag2c7f2();
$this->m4is_ymx4e5ny3a5vf8bzx313ejwf3ns();
}

private function m4is_cmdwra5kyw39gn1ptag2c7f2() {
$this->m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

}

private function m4is_ymx4e5ny3a5vf8bzx313ejwf3ns() {
$i2sdk_options = $this->m4is_132xe588j->get_i2sdk_options();

if (isset($_GET['i4w_sync_user']) && $_GET['i4w_sync_user'] == substr($i2sdk_options['api_key'],
 0, 6) ) {
$_GET['operation'] = 'update-contact';
}
$m4is_3g8f38ctthsk2k146z7knx00tenf = trim(strtolower($_GET['operation']) );
$m4is_w7m20zywnv2vm2nypmeh21z2asjd = [




];

$m4is_w7m20zywnv2vm2nypmeh21z2asjd = apply_filters('memberium/httpppost_services/register', $m4is_w7m20zywnv2vm2nypmeh21z2asjd);
if (array_key_exists($m4is_3g8f38ctthsk2k146z7knx00tenf,
 $m4is_w7m20zywnv2vm2nypmeh21z2asjd) ) {
$this->m4is_132xe588j->m4is_z3a9w5p26hzy494qq03phpeagexts(true);
m4is_9d8n6yra072mpxd0pczne9::m4is_3p1kx10eg3f0663c9q3();

add_action('i2sdk_http_post', $m4is_w7m20zywnv2vm2nypmeh21z2asjd[$m4is_3g8f38ctthsk2k146z7knx00tenf], 10, 2 );
}
}


private function m4is_8za8gvd3489jten63wgn096kmzcjw7k1() {
$m4is_bdm5zcwjc129tj3m4z153tsne2sn1p = isset($_GET['debug']) ? TRUE : FALSE;

if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, " - Debug Mode Enabled\n";
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = isset($_POST['Id']) ? (int) $_POST['Id'] : 0;

if (! $m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp) {
return;
}
$m4is_46mk286a9b51zt4aweshvcbzah0m = [];
$m4is_weh0r9f3zx0n = [
'Country' =>
 'PostalCode',
'Country2' => 'PostalCode2',
'Country3' => 'PostalCode3',
];
$m4is_8fhqg09egt82d79ygtjkqgj76 = [
'United States' => '/^\d{5}(-\d{4})?$/',

'Canada' => '/^[ABCEGHJKLMNPRSTVXY]{1}\d{1}[A-Z]{1} *\d{1}[A-Z]{1}\d{1}$/',
'United Kingdom' => '/^([A-PR-UWYZ0-9][A-HK-Y0-9][AEHMNPRTVXY0-9]?[ABEHMNPRVWXY0-9]? {1,2}[0-9][ABD-HJLN-UW-Z]{2}|GIR 0AA)$/',

];
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) {
echo __LINE__, " - Set Contact ID: {$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp}\n";
echo __LINE__,
 " - Set Country: {$_POST['Country']}\n";
echo __LINE__, " - Set Country: {$_POST['Country2']}\n";
echo __LINE__, " - Set Country: {$_POST['Country3']}\n";

}

foreach ($m4is_weh0r9f3zx0n as $m4is_j1qdcb1ec0xer1g8qz3fp=>$m4is_ch14qdjxmjk47w) {
if ($_POST[$m4is_j1qdcb1ec0xer1g8qz3fp] == '' && $_POST[$m4is_ch14qdjxmjk47w] > '') {
foreach ($m4is_8fhqg09egt82d79ygtjkqgj76 as $m4is_7pk5j8k87e =>
 $country_regex) {
if (preg_match($country_regex, $_POST[$m4is_ch14qdjxmjk47w]) ) {
$_POST[$m4is_j1qdcb1ec0xer1g8qz3fp] = $m4is_7pk5j8k87e;

$m4is_46mk286a9b51zt4aweshvcbzah0m[$m4is_j1qdcb1ec0xer1g8qz3fp] = $m4is_7pk5j8k87e;
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__,
 " - Set {$_POST[$m4is_j1qdcb1ec0xer1g8qz3fp]} to {$m4is_7pk5j8k87e}\n";
}
}
}
}
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__,
 " - Updated Fields: ", print_r($m4is_46mk286a9b51zt4aweshvcbzah0m, TRUE), "\n";
if (count($m4is_46mk286a9b51zt4aweshvcbzah0m) ) {
m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_46mk286a9b51zt4aweshvcbzah0m, true); 
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, " - Updated Contact Id: ", print_r($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 TRUE), "\n";
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, " - Synced Contact Id: ", print_r($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 TRUE), "\n";
$this->m4is_132xe588j->m4is_mz8ypkzzr4fxz8e42njma37v6ge02($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) {
echo __LINE__,
 " - Cleared Cache Namespace\n";
echo __LINE__, " - Contact Updated\n";
}
}
$this->m4is_132xe588j->m4is_h9t0p5fc1('send_http_post');

echo 'Operation Completed';
}

private function m4is_0ze562vr2d891ky() {
$m4is_bdm5zcwjc129tj3m4z153tsne2sn1p = isset($_GET['debug']) ? true : false;

if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, " - Debug Mode Enabled\n";
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = (int) $_POST['Id'];

$m4is_46mk286a9b51zt4aweshvcbzah0m = [];
$m4is_b93c29gg01cqnkz68jxk = NULL;
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__,
 " - Set Contact ID: {$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp}\n";
if ($_POST['PostalCode'] > '') {
switch ($_POST['Country']) {
case 'Canada':
switch (strtolower($_POST['PostalCode'],
 0, 1) ) {
case 'a':
$m4is_b93c29gg01cqnkz68jxk = 'NL';
break;
case 'b':
$m4is_b93c29gg01cqnkz68jxk = 'NS';
break;
case 'c':
$m4is_b93c29gg01cqnkz68jxk = 'PE';

break;
case 'g':
case 'h':
case 'j':
$m4is_b93c29gg01cqnkz68jxk = 'QC';
break;
case 'k':
case 'l':
case 'm':
case 'n':
case 'p':
$m4is_b93c29gg01cqnkz68jxk = 'ON';

break;
case 's':
$m4is_b93c29gg01cqnkz68jxk = 'SK';
break;
case 't':
$m4is_b93c29gg01cqnkz68jxk = 'AB';
break;
case 'v':
$m4is_b93c29gg01cqnkz68jxk = 'BC';

break;
case 'x':
$m4is_b93c29gg01cqnkz68jxk = 'NT';
break;
case 'y':
$m4is_b93c29gg01cqnkz68jxk = 'YT';
break;
}
switch (strtolower($_POST['PostalCode'],
 0, 3) ) {
case 'x0a':
case 'x0b':
case 'x0c':
$m4is_b93c29gg01cqnkz68jxk = 'NU';
break;
}
break;
case 'United States':
$m4is_4r87t64azc39n67 = [
['region'=>
'MA', 'min'=>'01001', 'max'=>'05544'],
['region'=>'RI', 'min'=>'02801', 'max'=>'02940'],
['region'=>'NH', 'min'=>'00210', 'max'=>'00215'],

['region'=>'NH', 'min'=>'03031', 'max'=>'03897'],
['region'=>'ME', 'min'=>'03901', 'max'=>'04992'],
['region'=>'VT', 'min'=>'05001',
 'max'=>'05907'],
['region'=>'CT', 'min'=>'06001', 'max'=>'06928'],
['region'=>'NJ', 'min'=>'07001', 'max'=>'08989'],
['region'=>'NY',
 'min'=>'00501', 'max'=>'00544'],
['region'=>'NY', 'min'=>'06390', 'max'=>'06390'],
['region'=>'NY', 'min'=>'10001', 'max'=>'14925'],

['region'=>'PA', 'min'=>'15001', 'max'=>'19640'],
['region'=>'DE', 'min'=>'19701', 'max'=>'19980'],
['region'=>'DC', 'min'=>'20001',
 'max'=>'20599'],
['region'=>'VA', 'min'=>'20101', 'max'=>'24658'],
['region'=>'MD', 'min'=>'20601', 'max'=>'21930'],
['region'=>'WV',
 'min'=>'24701', 'max'=>'26886'],
['region'=>'NC', 'min'=>'27006', 'max'=>'28909'],
['region'=>'SC', 'min'=>'29001', 'max'=>'29945'],

['region'=>'GA', 'min'=>'30002', 'max'=>'39901'],
['region'=>'FL', 'min'=>'32004', 'max'=>'34997'],
['region'=>'AL', 'min'=>'35004',
 'max'=>'36925'],
['region'=>'TN', 'min'=>'37010', 'max'=>'38589'],
['region'=>'MS', 'min'=>'38601', 'max'=>'39776'],
['region'=>'KY',
 'min'=>'40003', 'max'=>'42788'],
['region'=>'OH', 'min'=>'43001', 'max'=>'45999'],
['region'=>'IN', 'min'=>'46001', 'max'=>'47997'],

['region'=>'MI', 'min'=>'48001', 'max'=>'49971'],
['region'=>'IA', 'min'=>'50001', 'max'=>'52809'],
['region'=>'WI', 'min'=>'53001',
 'max'=>'54990'],
['region'=>'MN', 'min'=>'55001', 'max'=>'56763'],
['region'=>'SD', 'min'=>'57001', 'max'=>'57799'],
['region'=>'ND',
 'min'=>'58001', 'max'=>'58856'],
['region'=>'MT', 'min'=>'59001', 'max'=>'59937'],
['region'=>'IL', 'min'=>'60001', 'max'=>'62999'],

['region'=>'MS', 'min'=>'63001', 'max'=>'65899'],
['region'=>'KS', 'min'=>'66002', 'max'=>'67954'],
['region'=>'NE', 'min'=>'68001',
 'max'=>'69367'],
['region'=>'NE', 'min'=>'68001', 'max'=>'69367'],
['region'=>'LA', 'min'=>'70001', 'max'=>'71497'],
['region'=>'AR',
 'min'=>'71601', 'max'=>'72959'],
['region'=>'OK', 'min'=>'73001', 'max'=>'74966'],
['region'=>'TX', 'min'=>'73301', 'max'=>'88595'],

['region'=>'CO', 'min'=>'80001', 'max'=>'81658'],
['region'=>'WY', 'min'=>'82001', 'max'=>'83128'],
['region'=>'ID', 'min'=>'83201',
 'max'=>'83888'],
['region'=>'UT', 'min'=>'84001', 'max'=>'84791'],
['region'=>'AZ', 'min'=>'85001', 'max'=>'86556'],
['region'=>'NM',
 'min'=>'87001', 'max'=>'88441'],
['region'=>'NV', 'min'=>'88901', 'max'=>'89883'],
['region'=>'HI', 'min'=>'96701', 'max'=>'96898'],

['region'=>'OR', 'min'=>'97001', 'max'=>'97920'],
['region'=>'AK', 'min'=>'99501', 'max'=>'99950'],
['region'=>'WA', 'min'=>'98001',
 'max'=>'99403'],
];

break;
}
}
if ($m4is_bdm5zcwjc129tj3m4z153tsne2sn1p) echo __LINE__, " - Set Contact ID: {$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp}\n";

if (count($m4is_46mk286a9b51zt4aweshvcbzah0m) ) {
$m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp = m4is_rw8p2dfy073ez::m4is_jzr210pwxwvnhzp3q6g8a9yx6($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp,
 $m4is_46mk286a9b51zt4aweshvcbzah0m); 
$this->m4is_132xe588j->m4is_km2vptq0bwg($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);
$this->m4is_132xe588j->m4is_mz8ypkzzr4fxz8e42njma37v6ge02($m4is_wyp96z0zd3hz0z11gdmzx1ahpha1bp);


}
$this->m4is_132xe588j->m4is_h9t0p5fc1('send_http_post');
echo 'Operation Completed';
}
}
