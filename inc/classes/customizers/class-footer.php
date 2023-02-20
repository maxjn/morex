<?php

/**
 * Footer Settings
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc\Customizers;

use MOREX_THEME\Inc\Traits\Singleton;

// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}

class Footer
{
    use Singleton;

    protected function __construct()
    {

        // load class.
        $this->setup_panel();
    }

    protected function setup_panel()
    {

        /**
         * Controls.
         */

        new \Kirki\Section( //Title Section
            'footer_section',
            [ //logo section
                'title'       => esc_html__('Footer', 'morex'),
                'priority'    => 33,
            ]
        );


        new \Kirki\Field\Textarea(
            [
                'settings' => 'footer_copyright',
                'label'    => esc_html__('Copyright Text', 'morex'),
                'section'  => 'footer_section',
                'default'  => __(' published in rtl-theme  <span class="px-[3px] text-paragraph dark:text-white">
                <li class="fa fa-heart"></li>
            </span> by <span class=" px-[3px]"><a class="text-accent1 hover:font-bold" href="https://www.rtl-theme.com/author/maxjn/products/">Maxjn</a></span>© 2023', 'morex'),
                'priority' => 10,
            ]
        );
    }
}
