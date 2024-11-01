<?php
	
/*
Plugin Name: Woo Calculate Total
Description: Automatically calculates the order’s total when saving a WooCommerce order.
Author: hellodev.us
Version: 1.0
Author URI: http://hellodev.us
*/


add_action('admin_init', 'wct_adminScript', 9999999999); 

function wct_adminScript() { 
	wp_enqueue_script( 'my_custom_script', plugin_dir_url( __FILE__ ) . 'woo_totals.js',array(),'1.0.0', true );
}

?>