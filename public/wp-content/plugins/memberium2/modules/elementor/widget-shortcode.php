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


class m4is_j2wbeahxxw1h extends \Elementor\Widget_Shortcode {

protected function render() {
$m4is_bsamg3fezf = $this->get_settings_for_display( 'shortcode' );

$m4is_bsamg3fezf = apply_filters( 'memberium/elementor/widget/shortcode/render', $m4is_bsamg3fezf, $this->get_settings_for_display() );

if ( ! empty( $m4is_bsamg3fezf ) ){
global $wp_embed;
$m4is_bsamg3fezf = do_shortcode( shortcode_unautop( $wp_embed->run_shortcode( $m4is_bsamg3fezf ) ) );


echo '<div class="elementor-shortcode">', $m4is_bsamg3fezf, '</div>';
}
}
}