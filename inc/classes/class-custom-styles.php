<?php

/**
 * General Settings
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc;

use MOREX_THEME\Inc\Traits\Singleton;

// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}

class Custom_styles
{
    use Singleton;

    protected function __construct()
    {

        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_action('wp_head', [$this, 'morex_custom_styles']);
    }

    public function morex_custom_styles()
    {
        $hex = get_theme_mod('theme_color', '#EE5F38');;
        list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
        $theme_color = "$r $g $b";

?>

        <style>
            :root {
                --accent1-rgb: <?= $theme_color ?>;
            }
        </style>
<?php
    }
}
