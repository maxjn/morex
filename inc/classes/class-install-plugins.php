<?php
// Prevent Direct Access
/**
 * Tgm plugins
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc;

use MOREX_THEME\Inc\Traits\Singleton;

if (!defined('ABSPATH')) {
    exit;
}

class Install_Plugins
{
    use Singleton;

    protected function __construct()
    {

        require_once dirname(__FILE__) . '/tgm/class-tgm-plugin-activation.php';

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {

        /**
         * Actions.
         */
        add_action('tgmpa_register', [$this, 'morex_register_required_plugins']);
    }

    public function morex_register_required_plugins()
    {
        $plugins_external_uri = 'https://maxjn.ir/plugins/';
        $plugins = [

            [
                'name'      => 'Kirki Customizer Framework',
                'slug'      => 'kirki',
                'required'  => true,
            ],
            [
                'name'      => 'Elementor',
                'slug'      => 'elementor',
                'required'  => true,
            ],
            [
                'name'      => 'Elementor Pro',
                'slug'      => 'elementor-pro',
                'required'  => true,
                'source' => $plugins_external_uri . 'elementor-pro.zip'
            ],
            [
                'name'      => 'Contact Form 7',
                'slug'      => 'contact-form-7',
                'required'  => false,
            ],
            [
                'name'      => 'One Click Demo Import',
                'slug'      => 'one-click-demo-import',
                'required'  => false,
            ],
            [
                'name' => 'Advanced Custom Fields Pro',
                'slug' => 'advanced-custom-fields-pro',
                'required' => true,
                'source' => $plugins_external_uri . 'advanced-custom-fields-pro.zip'
            ],
            [
                'name'      => 'Morex Post Type',
                'slug'      => 'morex-post-type',
                'required'  => true,
                'source' => $plugins_external_uri . '/morex/morex-post-type.zip'
            ],
            [
                'name' => 'Morex Elementor Widgets',
                'slug' => 'morex-elementor-widgets',
                'required' => true,
                'source' => $plugins_external_uri . '/morex/morex-elementor-widgets.zip'
            ],
            [
                'name' => 'WP Administration Style',
                'slug' => 'wp-administration-style',
                'required' => false
            ],
            [
                'name' => 'WP Shamsi',
                'slug' => 'wp-shamsi',
                'required' => false
            ]
        ];

        $config = [
            'id'           => 'morex',                     // Unique ID for hashing notices for multiple instances of TGMPA.
            'default_path' => '',                         // Default absolute path to bundled plugins.
            'menu'         => 'morex-install-plugins',     // Menu slug.
            'parent_slug'  => 'plugins.php',              // Parent menu slug.
            'capability'   => 'manage_options',           // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
            'has_notices'  => true,                       // Show admin notices or not.
            'dismissable'  => true,                       // If false, a user cannot dismiss the nag message.
            'dismiss_msg'  => '',                         // If 'dismissable' is false, this message will be output at top of nag.
            'is_automatic' => true,                       // Automatically activate plugins after installation or not.
            'message'      => '',                         // Message to output right before the plugins table.
        ];

        tgmpa($plugins, $config);
    }
}