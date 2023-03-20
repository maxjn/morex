<?php

/**
 * ACF Settings
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc;

use MOREX_THEME\Inc\Traits\Singleton;

class Option_Page
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
        add_action('acf/init', [$this, 'theme_setting_op_init']);
    }

    /**
     * ACF Save Points
     *
     *  Register the path to Save the ACF json files so that they are version controlled.
     *
     * @package Taypo
     *
     * @param $paths The default relative path to the folder where ACF saves the files. Tip: use PATH not URI
     *
     * @return  string | path
     */
    public function morex_acf_save_point($path)
    {

        // update path
        $path = MOREX_DIR_PATH . '/acf-json';


        // return
        return $path;
    }

    /**
     * Add Theme Setting Page Options
     *
     *
     */
    function theme_setting_op_init()
    {
        // Check function exists.
        if (function_exists('acf_add_options_page')) {

            // Add parent.
            $parent = acf_add_options_page(array(
                'page_title'  => __('Theme General Settings', 'morex'),
                'menu_title'  => __('Theme Settings', 'morex'),
                'menu_slug' => 'theme-settings',
                'redirect'    => false,
            ));
        }
    }
}
