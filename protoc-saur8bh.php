<?php
/**
 * Plugin Name: ProToc By Saur8bh
 * Plugin URI: https://wordpress.org/plugins/protoc-saur8bh
 * Description: Generates an Automatic table of contents for your posts or pages based on headings.
 * Version: 1.0.0
 * Author: Saur8bh
 * Author URI: https://www.mrskt.com/
 */
require_once( plugin_dir_path( __FILE__ ) . 'protoc-settings.php' );
require_once( plugin_dir_path( __FILE__ ) . 'protoc-functions.php' );

add_filter( 'the_content', 'saur8_display_toc' );
add_shortcode( 'saur8_toc', 'saur8_toc_shortcode' );
