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

final class m4is_mh9t97q4p4p87vkr5zxs6k99b {
private function __construct() {

}

public static function m4is_smqht7cx0cpbf1ps13w89x8c69z9n( string $m4is_ms7r118f = 'ISO-8859-1',
 string $m4is_k34xg8nmpwx2zsqcj8dn = 'UTF-8', string $m4is_d60kn1d3yvprp62rs332 = '' ): string {
if ( function_exists( 'iconv' ) ) {
return iconv( $m4is_ms7r118f,
 $m4is_k34xg8nmpwx2zsqcj8dn, $m4is_d60kn1d3yvprp62rs332 );
}
elseif ( function_exists( 'mb_convert_encoding' ) ) {
return (string) mb_convert_encoding( $m4is_d60kn1d3yvprp62rs332,
 $m4is_k34xg8nmpwx2zsqcj8dn, $m4is_ms7r118f );
}
error_log( 'Memberium:  [Error] Neither iconv nor mbstring are available for encoding conversion.' );

return $m4is_d60kn1d3yvprp62rs332;
}
}