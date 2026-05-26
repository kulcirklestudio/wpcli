<?php

if ( ! defined( 'ABSPATH' ) ) { exit; }

const RESPONSIVE_IMAGE_ASSETS_VERSION_3B4E5958 = '1.0.0';

function register_responsive_image_widget_3b4e5958( $widgets_manager ) {
    require_once __DIR__ . '/widget-responsive-image.php';
    $widgets_manager->register( new \AngieSnippets\Responsive_Image_3b4e5958() );
}
add_action( 'elementor/widgets/register', 'register_responsive_image_widget_3b4e5958' );

function register_responsive_image_assets_3b4e5958() {
    wp_register_style( 'responsive-image-style-3b4e5958', angie_cs_get_snippet_asset_url( __FILE__, 'style.css' ), [], RESPONSIVE_IMAGE_ASSETS_VERSION_3B4E5958 );
}
add_action( 'wp_enqueue_scripts', 'register_responsive_image_assets_3b4e5958' );
