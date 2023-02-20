<?php
// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Functions
 *
 * @package Morex
 */


if (!defined('MOREX_DIR_PATH')) {
    define('MOREX_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('MOREX_DIR_URI')) {
    define('MOREX_DIR_URI', untrailingslashit(get_template_directory_uri()));
}
if (!defined('MOREX_JS_URI')) {
    define('MOREX_JS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/js');
}

if (!defined('MOREX_JS_DIR_PATH')) {
    define('MOREX_JS_DIR_PATH', untrailingslashit(get_template_directory()) . '/assets/js');
}

if (!defined('MOREX_IMG_URI')) {
    define('MOREX_IMG_URI', untrailingslashit(get_template_directory_uri()) . '/assets/images');
}

if (!defined('MOREX_CSS_URI')) {
    define('MOREX_CSS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/css');
}

if (!defined('MOREX_CSS_DIR_PATH')) {
    define('MOREX_CSS_DIR_PATH', untrailingslashit(get_template_directory()) . '/assets/css');
}

if (!defined('MOREX_TEMPLATE_PATH')) {
    define('MOREX_TEMPLATE_PATH', 'template-parts');
}

if (!defined('MOREX_ARCHIVE_POST_PER_PAGE')) {
    define('MOREX_ARCHIVE_POST_PER_PAGE', 9);
}

if (!defined('MOREX_SEARCH_RESULTS_POST_PER_PAGE')) {
    define('MOREX_SEARCH_RESULTS_POST_PER_PAGE', 9);
}

require_once MOREX_DIR_PATH . '/inc/helpers/autoloader.php';
require_once MOREX_DIR_PATH . '/inc/helpers/template-tags.php';

function morex_get_theme_instance()
{
    \MOREX_THEME\Inc\MOREX_THEME::get_instance();
}

morex_get_theme_instance();
