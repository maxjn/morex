<?php
// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}

get_header();

// Elementor `single` location
if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('single') || !elementor_theme_do_location('page') || !elementor_theme_do_location('portfolio')) {
    get_template_part(MOREX_TEMPLATE_MAIN_PATH . '/singular');
}

get_footer();
