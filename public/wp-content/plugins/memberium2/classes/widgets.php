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





final class m4is_t5rzgr58texjs86rahjjthzv extends WP_Widget {
function __construct() {
parent::__construct(
'foo_widget', 
__('Memberium Login',
 'memberium'), 
['description' => __('Memberium Login Widget', 'memberium')] 
);
}


function widget($m4is_g61yzqs7ecta0xztr70d7v, $m4is_x83y9shwv134vk9r8c85) {
echo $m4is_g61yzqs7ecta0xztr70d7v['before_widget'];

if (! empty($m4is_x83y9shwv134vk9r8c85['title']) ) {

}
echo '<h3 class="widget-title">', __('Login', 'memberium'), '</h3>';
echo do_shortcode('[memb_loginform]');

echo $m4is_g61yzqs7ecta0xztr70d7v['after_widget'];
}

function form($m4is_x83y9shwv134vk9r8c85) {
$title = ! empty($m4is_x83y9shwv134vk9r8c85['title']) ? $m4is_x83y9shwv134vk9r8c85['title'] : __('New title',
 'text_domain');
?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Hide When Logged In:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title');
 ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('title');
 ?>"><?php _e('Title:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title');
 ?>" type="text" value="<?php echo esc_attr($title); ?>">
		</p>
		<?php
 }

function update($m4is_pyzw7kc1ge577zy6a38, $m4is_cq3yag3t) {
$m4is_x83y9shwv134vk9r8c85 = [];

$m4is_x83y9shwv134vk9r8c85['title'] = (! empty($m4is_pyzw7kc1ge577zy6a38['title']) ) ? strip_tags($m4is_pyzw7kc1ge577zy6a38['title']) : '';

return $m4is_x83y9shwv134vk9r8c85;
}
}
