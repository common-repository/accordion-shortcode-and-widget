<?php
/**
 * Plugin Name: Accordion Shortcode And Widget
 * Version: 1.7.7
 * Description:  Accordion is the most easiest drag & drop accordion builder for WordPress. You can generate multiple Accordion and Faq.
 * Author: wpshopmart
 * Author URI: https://www.wpshopmart.com
 * Plugin URI: https://www.wpshopmart.com/plugins
 */

/**
 * DEFINE PATHS
 */
define("wpshopmart_accordion_shortcode_directory_url", plugin_dir_url(__FILE__));
define("wpshopmart_accordion_shortcode_text_domain", "wpsm_accordion");

/**
 * PLUGIN Install File
 */
require_once("lib/installation/installation.php");

/**
 * Support and Our Products Page
 */
add_action('admin_menu' , 'wpsm_ac_sh_help_page_manu');
function wpsm_ac_sh_help_page_manu() {
	$submenu = add_submenu_page('edit.php?post_type=accordion_shortcode', __('More_Free_Plugins', wpshopmart_accordion_shortcode_text_domain), __('More Free Plugins', wpshopmart_accordion_shortcode_text_domain), 'administrator', 'wpsm_ac_sh_help_page', 'wpsm_ac_sh_help_page_funct');
	
	//add hook to add styles and scripts for Accordion admin page
    add_action( 'admin_print_styles-' . $submenu, 'wpsm_ac_sh_help_js_css' );
}
function wpsm_ac_sh_help_js_css(){
	wp_enqueue_style('wpsm_ac_sh_bootstrap_css', wpshopmart_accordion_shortcode_directory_url.'css/bootstrap.css');
	wp_enqueue_style('wpsm_ac_sh_help_css', wpshopmart_accordion_shortcode_directory_url.'css/help.css');
}
function wpsm_ac_sh_help_page_funct(){
	require_once('lib/help.php');
}
 
/**
 * CPT Register CLASS
 */
require_once("lib/admin/menu.php");

/**
 * SHORTCODE
 */
require_once("front/shortcode.php"); 

/**
 * WIDGET
 */
 require_once("lib/widget/widget.php");
 
?>