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

final class m4is_20mc3hyfbex8gyy0q99av5p {
static function m4is_x09f28r08() {
$m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 = get_option( 'm4is/seeder/tag',
 0 );
$m4is_ek8adjz9yz7wvga34bby56 = get_option( 'm4is/seeder/page', 0 );
$m4is_by61g0fcs4882hagy80j = get_option( 'm4is/seeder/last_run',
 0 );
if ( ! $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
return;
}
if ( time() - $m4is_by61g0fcs4882hagy80j < 5 ) {
return;
}
}

private static function m4is_k0gb0hp5fsmpdaytxmbw( $m4is_ek8adjz9yz7wvga34bby56,
 $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) {
if ( empty( $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ) ) {
return;
}
$m4is_132xe588j = m4is_6y9612z4hjd6fzpap4r5n853641m1jc::m4is_j8ybbvhh86fzfcxc8780drys43qdef();

$m4is_rkmcn1zd3r3k149h20vfr8z = 1000;
$m4is_k7p8pmxsbkqrje3y20 = 'Contact';
$m4is_ek8adjz9yz7wvga34bby56 = (int) $m4is_ek8adjz9yz7wvga34bby56;

$m4is_0x2gypzsbnenpkq5bam3dkbg5 = m4is_xm67qjyegqdeb9wqcm::m4is_1qrbwzryp94sfyvdfdgjg0j8n( $m4is_k7p8pmxsbkqrje3y20, false );
$m4is_kyw6mwey3 = 0;

$m4is_v4beyw7zqhr3 = $m4is_132xe588j->m4is_pdgd084n380vnszr3r( 'appname' );
$m4is_j34bmw9dcjexfj1qpz = [ 'Groups' => $m4is_119nhqx9wbzd6xtak5xp7nv1hcb0 ];

$m4is_tbdh9qb6r6z = m4is_xm67qjyegqdeb9wqcm::m4is_e4sd0g1cytaaxf9f0aq2( $m4is_k7p8pmxsbkqrje3y20, $m4is_rkmcn1zd3r3k149h20vfr8z, $m4is_ek8adjz9yz7wvga34bby56,
 $m4is_j34bmw9dcjexfj1qpz, $m4is_0x2gypzsbnenpkq5bam3dkbg5 );
foreach($m4is_tbdh9qb6r6z as $row) {
$m4is_132xe588j->m4is_bpzt4p8q92db7( $row,
 false );
}
if (count($m4is_tbdh9qb6r6z) < $m4is_rkmcn1zd3r3k149h20vfr8z) {
update_option('m4is/seeder/page', 0, false);
}
else {
update_option('m4is/seeder/page',
 ($m4is_ek8adjz9yz7wvga34bby56 + 1), false);
}
}
}