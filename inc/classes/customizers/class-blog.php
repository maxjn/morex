<?php

/**
 * Blog Settings
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc\Customizers;

use MOREX_THEME\Inc\Traits\Singleton;

class Blog
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
            'blog_title_section',
            [ //logo section
                'title'       => esc_html__('Blog', 'morex'),
                'priority'    => 30,
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'blog_title_text',
                'label'    => esc_html__('Title', 'morex'),
                'section'  => 'blog_title_section',
                'default'  => esc_html__('Blog Latest of News tricks & Updates', 'morex'),
                'priority' => 10,
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'blog_sub_title_text',
                'label'    => esc_html__('Sub Title', 'morex'),
                'section'  => 'blog_title_section',
                'default'  => esc_html__('My blog', 'morex'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Textarea(
            [
                'settings'    => 'blog_description',
                'label'       => esc_html__('Description', 'morex'),
                'section'     => 'blog_title_section',
            ]
        );
    }
}
