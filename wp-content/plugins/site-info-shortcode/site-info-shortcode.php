<?php
/*
Plugin Name: Site Info Shortcode
Description: Displays site name and description using a shortcode [site_info].
Version: 1.0
Author: Doyelshree Bhui
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function sis_display_site_info() {
    $site_name = get_bloginfo( 'name' );
    $site_description = get_bloginfo( 'description' );
    return '<p class="sis-site-info" title="Site name and description"><strong>' . esc_html( $site_name ) . '</strong> – ' . esc_html( $site_description ) . '</p>';
}

add_shortcode( 'site_info', 'sis_display_site_info' );

