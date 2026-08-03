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


class_exists( 'm4is_knfcbrvkjrz3n8k8y6gf' ) || die();

final class m4is_htshtzd47fz1djssy3d38y1e3qg {
private $tabs = [];
private $headers = [];
private $default = '';
private $current_tab = '';

function __construct() {
$this->tabs = [];
$this->headers = [];
$this->default = '';
$this->current_tab = '';
}

function m4is_d10pve278t32ejnqzadw2k3v3qd89v(string $m4is_skj04gekxycwc5n8v7rx37wfhxz9p6 = '',
 string $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0 = '', string $m4is_6k84v5caq4k = '', $m4is_sjjed77r6tc8e = '', string $m4is_wa7g1j8x81jpwprd3syhcfqgq2 = '') {
$this->tabs[$m4is_6k84v5caq4k] = [
'icon' =>
 $m4is_skj04gekxycwc5n8v7rx37wfhxz9p6,
'label' => $m4is_fbx9sh4byq4nje339bxx94fqsxk45v0,
'slug' => strtolower(trim($m4is_6k84v5caq4k) ),

'method' => $m4is_sjjed77r6tc8e,
'post' => $m4is_wa7g1j8x81jpwprd3syhcfqgq2,
];
if (count($this->tabs) == 1) {
$this->m4is_nn3w6bf1eqs697n055n6xr9va870zax($m4is_6k84v5caq4k);

}
}

function m4is_45qq0wekrm7b8czn8cafeqy0k2x2(array $m4is_ta6xqxkcdz0c5g3pk) {
$this->tabs = $m4is_ta6xqxkcdz0c5g3pk;
}
function m4is_3hq1fs66yjhkwbhkb7g70snjx8kqje() : array {
return $this->tabs;

}
function m4is_e6mwmd099v8y0dwkf5awn863(string $m4is_ph9qtta41faz56je878 = '') {
$this->headers[] = $m4is_ph9qtta41faz56je878;
}
function m4is_nn3w6bf1eqs697n055n6xr9va870zax(string $m4is_6k84v5caq4k = '') : bool {
$slug = strtolower(trim($m4is_6k84v5caq4k) );

if (array_key_exists($m4is_6k84v5caq4k, $this->tabs) ) {
$this->default = $m4is_6k84v5caq4k;
return true;
}
return false;
}
function m4is_25trdcpbs() {
if ( empty( $this->tabs ) ) {
return;

}
$m4is_aq3n8kjvpsvryrrf9exmx = $this->m4is_mzxreakhktx8nkmez7();
if ( $this->tabs[$m4is_aq3n8kjvpsvryrrf9exmx]['post'] ) {
$this->m4is_dtsw06qyp2fte( $this->tabs[$m4is_aq3n8kjvpsvryrrf9exmx]['post'] );

}
m4is_dv250ra9xbtaf::m4is_dagbw7aea4y90yradk9x7b();
echo '<div class="wrap about-wrap memberium">';
foreach($this->headers as $m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp) {
echo $this->m4is_dtsw06qyp2fte($m4is_tv6dfvmqg274x9fq2sstmm86jc0fcp);

}
echo '</div>';
echo '<div class="wrap">'; 
echo '<h4 class="nav-tab-wrapper">';
foreach ($this->tabs as $m4is_6k84v5caq4k => $m4is_ga7k41nm95cn0s4wkjqanw7) {
$m4is_53mq3k4adf3m0 = 'nav-tab';

$m4is_53mq3k4adf3m0 .= ($m4is_ga7k41nm95cn0s4wkjqanw7['slug'] == $m4is_aq3n8kjvpsvryrrf9exmx) ? ' nav-tab-active' : '';
if ($m4is_ga7k41nm95cn0s4wkjqanw7['slug'] == $m4is_aq3n8kjvpsvryrrf9exmx) {
echo "<span class='{$m4is_53mq3k4adf3m0}'><i class='{$m4is_ga7k41nm95cn0s4wkjqanw7['icon']}'></i> {$m4is_ga7k41nm95cn0s4wkjqanw7['label']}</span>";

}
else {
echo "<a class='{$m4is_53mq3k4adf3m0}' href='?page={$_GET['page']}&tab={$m4is_ga7k41nm95cn0s4wkjqanw7['slug']}'><i class='{$m4is_ga7k41nm95cn0s4wkjqanw7['icon']}'></i> {$m4is_ga7k41nm95cn0s4wkjqanw7['label']}</a>";

}
}
echo '</h4>';
echo '<div class="memberium_tabcontent" style="margin-top:10px;">';
echo $this->m4is_dtsw06qyp2fte($this->tabs[$m4is_aq3n8kjvpsvryrrf9exmx]['method']);

echo '</div>';
}
function m4is_mzxreakhktx8nkmez7() : string {
$this->current_tab = isset($_GET['tab']) ? strtolower($_GET['tab']) : $this->default;

if (! array_key_exists($this->current_tab, $this->tabs) ) {
$this->current_tab = $this->default;
}
return $this->current_tab;
}

private function m4is_dtsw06qyp2fte($m4is_ph9qtta41faz56je878 = false) {
if ( ! empty( $m4is_ph9qtta41faz56je878 ) ) {
if ( is_array( $m4is_ph9qtta41faz56je878 ) ) {
if (method_exists($m4is_ph9qtta41faz56je878[0],
 $m4is_ph9qtta41faz56je878[1]) ) {
return call_user_func_array($m4is_ph9qtta41faz56je878, [] );
}
else {
echo '<p><span style="font-weight:bold;color:red;">Error:  </span>  ',
 $m4is_ph9qtta41faz56je878[0], '->', $m4is_ph9qtta41faz56je878[1], ' not found</p>';
}
}
elseif (is_string($m4is_ph9qtta41faz56je878) ) {
if (function_exists($m4is_ph9qtta41faz56je878) ) {
return call_user_func($m4is_ph9qtta41faz56je878);

}
elseif (file_exists($m4is_ph9qtta41faz56je878) ) {
include_once $m4is_ph9qtta41faz56je878;
}
else {
echo $m4is_ph9qtta41faz56je878;

}
}
}
}

}
