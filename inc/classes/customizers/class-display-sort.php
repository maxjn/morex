<?php

/**
 * Sorting Display
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc\Customizers;

use MOREX_THEME\Inc\Traits\Singleton;

// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}

class Display_Sort
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

        new \Kirki\Section('sections_section', array(
            'title'          => esc_html__('Sections Sorting and Display', 'morex'),
            'priority'       => 22,
        ));

        // Sections
        new \Kirki\Field\Sortable(array(
            'settings'    => 'sections',
            'section'     => 'sections_section',
            'default'     => array(
                'home',
                'services',
                'about',
                'logo-list',
                'resume',
                'skills',
                'portfolio',
                'testimonials',
                'blog',
                'contact',
            ),
            'choices'     => array(
                'home' => esc_html__('Home', 'morex'),
                'services' => esc_html__('Services', 'morex'),
                'about' => esc_html__('About Me', 'morex'),
                'resume' => esc_html__('Resume', 'morex'),
                'logo-list' => esc_html__('Logo List', 'morex'),
                'portfolio' => esc_html__('Portfolio', 'morex'),
                'skills' => esc_html__('Skills', 'morex'),
                'testimonials' => esc_html__('Testimonials', 'morex'),
                'blog' => esc_html__('Blog', 'morex'),
                'contact' => esc_html__('Contact Me', 'morex'),
            ),
        ));
    }
}
