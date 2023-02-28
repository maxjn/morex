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
        $plugins = [

            [
                'name'      => 'Kirki Customizer Framework',
                'slug'      => 'kirki',
                'required'  => true,
            ],
            [
                'name'      => 'Elementor',
                'slug'      => 'elementor',
                'required'  => false,
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
                'name'      => 'Morex Post Type',
                'slug'      => 'morex-post-type',
                'source'       => 'https://github.com/maxjn/morex-post-type/archive/refs/heads/main.zip', // The plugin source.
                'required'  => false,
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
