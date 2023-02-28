<?php

/**
 * Elementor Register Locations
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc;

use MOREX_THEME\Inc\Traits\Singleton;
// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}

class Elementor_Locations
{

    use Singleton;

    protected function __construct()
    {

        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {

        /**
         * Actions.
         */
        add_action('elementor/theme/register_locations', [$this, 'morex_register_elementor_locations']);
    }
    /**
     * Register Location
     * https://developers.elementor.com/docs/themes/registering-locations/
     */
    public function morex_register_elementor_locations()
    {
        $elementor_theme_manager->register_all_core_location();
    }
}
