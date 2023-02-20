<?php
// Prevent Direct Access
/**
 * Portfolio Settings
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc\Customizers;

use MOREX_THEME\Inc\Traits\Singleton;

if (!defined('ABSPATH')) {
    exit;
}

class Portfolio
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
            'portfolio_title_section',
            [ //logo section
                'title'       => esc_html__('Portfolio', 'morex'),
                'priority'    => 28,
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'portfolio_title_text',
                'label'    => esc_html__('Title', 'morex'),
                'section'  => 'portfolio_title_section',
                'default'  => esc_html__('My Portfolio & My Education', 'morex'),
                'priority' => 10,
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'portfolio_sub_title_text',
                'label'    => esc_html__('Sub Title', 'morex'),
                'section'  => 'portfolio_title_section',
                'default'  => esc_html__('My Portfolio', 'morex'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Textarea(
            [
                'settings'    => 'portfolio_description',
                'label'       => esc_html__('Description', 'morex'),
                'section'     => 'portfolio_title_section',
            ]
        );

        new \Kirki\Field\Number(
            [
                'settings' => 'portfolio_per_page',
                'label'    => esc_html__('Show Number', 'morex'),
                'section'  => 'portfolio_title_section',
                'default'  => -1,
                'priority' => 10,
                'choices'  => [
                    'min'  => -1,
                    'step' => 1,
                ],
            ]
        );
    }
}
