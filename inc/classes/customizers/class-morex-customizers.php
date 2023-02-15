<?php

/**
 * Bootstrap the theme's customizers
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc\Customizers;

use MOREX_THEME\Inc\Traits\Singleton;

class Morex_Customizers
{
    use Singleton;

    protected function __construct()
    {
        Generals::get_instance();
        Header::get_instance();
        Display_Sort::get_instance();
        // load class.

    }
}
