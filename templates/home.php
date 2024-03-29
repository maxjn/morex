<?php
/*
Template Name: Home Page
Post Type: page
*/
// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}

get_header();

// Other sections
$sections = get_theme_mod('sections', array(
    'home',
    'services',
    'about',
    'logo-list',
    'resume',
    'skills',
    'portfolio',
    'testimonials',
    'blog',
    'contact',
));

$section_index = 0;

foreach ($sections as $section) {

    $section_index++;

    get_template_part(MOREX_TEMPLATE_SECTION_PATH . '/' . $section);
}


get_footer();
