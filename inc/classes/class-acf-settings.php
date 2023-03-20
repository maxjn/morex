<?php

/**
 * ACF Settings
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc;

use MOREX_THEME\Inc\Traits\Singleton;

class ACF_Settings
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
        add_filter('acf/settings/save_json', [$this, 'morex_acf_save_point']);
        add_filter('acf/settings/load_json', [$this, 'morex_acf_load_point']);
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
     *  ACF Save Points
     *
     * Register the path to load the ACF json files so that they are version controlled.
     *
     * @param $paths The default relative path to the folder where ACF saves the files. Tip: use PATH not URI
     *
     * @return string The new relative path to the folder where we are saving the files.
     */
    public function morex_acf_load_point($paths)
    {

        // remove original path (optional)
        unset($paths[0]);


        // append path
        $paths[] = MOREX_DIR_PATH . '/acf-json';


        // return
        return $paths;
    }
}
