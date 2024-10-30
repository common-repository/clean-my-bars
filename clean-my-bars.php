<?php /*
Plugin Name: Clean My Bars
Version: 0.1
Plugin URI: http://wordpress.org/extend/plugins/clean-my-bars
Author: Lee Rickler
Author URI: http://rickler.com
Description: Removes unnecessary external links from both admin and front end admin bars when using Yoast WordPress SEO plugin.
*/

// DESTROY YOAST EXTERNALS
function leave_my_admin_head() {
    echo '<style>li#wp-admin-bar-wpseo-menu.menupop { display:none; visibility:hidden }</style>';
}
add_action('admin_head', 'leave_my_admin_head');

function leave_my_frontal_head() {
    echo '<style>li#wp-admin-bar-wpseo-menu.menupop { display:none; visibility:hidden }</style>';
}
add_action('wp_head', 'leave_my_frontal_head');

?>