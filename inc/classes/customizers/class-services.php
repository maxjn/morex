<?php

/**
 * Services Settings
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc\Customizers;

use MOREX_THEME\Inc\Traits\Singleton;

// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}

class Services
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
        new \Kirki\Panel(
            'services_panel',
            [ //header panel
                'priority'    => 24,
                'title'       => esc_html__('Services', 'morex'),
            ]
        );

        new \Kirki\Section( //Title Section
            'services_title_section',
            [ //logo section
                'title'       => esc_html__('Services Title', 'morex'),
                'panel'       => 'services_panel',
                'priority'    => 20,
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'services_title_text',
                'label'    => esc_html__('Title', 'morex'),
                'section'  => 'services_title_section',
                'default'  => esc_html__('What I can do to help you', 'morex'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'services_sub_title_text',
                'label'    => esc_html__('Sub Title', 'morex'),
                'section'  => 'services_title_section',
                'default'  => esc_html__('My Services', 'morex'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Textarea(
            [
                'settings'    => 'services_description_text',
                'label'       => esc_html__('Description', 'morex'),
                'section'     => 'services_title_section',
            ]
        );


        new \Kirki\Section( //Content Section
            'services_content_section',
            [ //logo section
                'title'       => esc_html__('Services Contents', 'morex'),
                'panel'       => 'services_panel',
                'priority'    => 20,
            ]
        );

        // Contents
        new \Kirki\Field\Repeater(array(
            'label'       => esc_html__('Service', 'morex'),
            'section'     => 'services_content_section',
            'description' => esc_html__('Use \'Fontawesome\' classes as the icon text', 'morex'),
            'row_label'   => array(
                'type' => 'text',
                'value' => esc_html__('Service', 'morex'),
            ),
            'button_label' => esc_html__('Add New Service', 'morex'),
            'settings'     => 'services_contents',
            'default'     => array(),
            'fields' => array(

                'service_color' => [
                    'type'        => 'select',
                    'label'       => esc_html__('Primary Color', 'morex'),
                    'default'     => '48CDA0',
                    'choices'     => [
                        '48CDA0' => esc_html__('Green', 'morex'),
                        'ED5F38'  => esc_html__('Orang', 'morex'),
                        '007EFF' => esc_html__('Blue', 'morex'),
                        'E6BC13'  => esc_html__('Yellow', 'morex'),
                        'ED38D1' => esc_html__('Pink', 'morex'),
                        'A348CD'  => esc_html__('Purple', 'morex'),
                    ]
                ],
                'service_icon' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Icon', 'morex'),
                    'default'  => 'fa fa-lightbulb',
                ),
                'service_title' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Title', 'morex'),
                    'default'  => esc_html__('Title', 'morex'),

                ),
                'service_description' => array(
                    'type'        => 'textarea',
                    'label'       => esc_html__('Description', 'morex'),

                ),
                'service_btn_text' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Button Text', 'morex'),
                    'default'  => esc_html__('more', 'morex'),

                ),
                'service_btn_url' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Button Link', 'morex'),
                    'default'  => '#',

                ),
            )
        ));
    }
}
