<?php
// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}
get_header();
// Elementor `archive` location
if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('archive')) {
    // blog start
    get_template_part(MOREX_TEMPLATE_CONTENT_PATH . '/blog-content');
}
get_footer();
