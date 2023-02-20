<?php
// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}
get_header();

get_template_part(MOREX_TEMPLATE_PATH . '/blog');

get_footer();
