<?php

/**
 * Logo list Settings
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc\Customizers;

use MOREX_THEME\Inc\Traits\Singleton;

// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}

class Resume
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
            'resume_panel',
            [ //header panel
                'priority'    => 27,
                'title'       => esc_html__('Resume', 'morex'),
            ]
        );

        new \Kirki\Section( //Title Section
            'resume_title_section',
            [ //logo section
                'title'       => esc_html__('Resume Title', 'morex'),
                'panel'       => 'resume_panel',
                'priority'    => 20,
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'resume_title_text',
                'label'    => esc_html__('Title', 'morex'),
                'section'  => 'resume_title_section',
                'default'  => esc_html__('My Experience & Education', 'morex'),
                'priority' => 10,
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'resume_sub_title_text',
                'label'    => esc_html__('Sub Title', 'morex'),
                'section'  => 'resume_title_section',
                'default'  => esc_html__('My Resume', 'morex'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Textarea(
            [
                'settings'    => 'resume_description',
                'label'       => esc_html__('Description Text', 'morex'),
                'section'     => 'resume_title_section',
            ]
        );

        new \Kirki\Section( //Resume First Culomn Section
            'resume_Items_section',
            [ //logo section
                'title'       => esc_html__('Resume Items', 'morex'),
                'panel'       => 'resume_panel',
                'priority'    => 20,
            ]
        );

        // Items
        new \Kirki\Field\Repeater(array(
            'label'       => esc_html__('Resume First Culomn Items', 'morex'),
            'section'     => 'resume_Items_section',
            'description' => esc_html__('Use \'Fontawesome\' classes as the icon text', 'morex'),
            'row_label'   => array(
                'type' => 'text',
                'value' => esc_html__('Resume Item', 'morex'),
            ),
            'button_label' => esc_html__('Add New Resume Item', 'morex'),
            'settings'     => 'resume_items',
            'default'     => array(),
            'fields' => array(
                'icon' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Icon', 'morex'),
                    'default'  => 'fa fa-tasks',
                ),
                'title' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Title', 'morex'),
                ),
                'subtitle' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Sub Title', 'morex'),

                ),
                'description' => array(
                    'type'        => 'textarea',
                    'label'       => esc_html__('Description', 'morex'),

                ),
                'year' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Years', 'morex'),
                ),
            )
        ));

        // Items
        new \Kirki\Field\Repeater(array(
            'label'       => esc_html__('Resume Second Culomn Items', 'morex'),
            'section'     => 'resume_Items_section',
            'description' => esc_html__('Use \'Fontawesome\' classes as the icon text', 'morex'),
            'row_label'   => array(
                'type' => 'text',
                'value' => esc_html__('Resume Item', 'morex'),
            ),
            'button_label' => esc_html__('Add New Resume Item', 'morex'),
            'settings'     => 'resume_items2',
            'default'     => array(),
            'fields' => array(
                'icon' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Icon', 'morex'),
                    'default'  => 'fa fa-graduation-cap',
                ),
                'title' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Title', 'morex'),
                ),
                'subtitle' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Sub Title', 'morex'),

                ),
                'description' => array(
                    'type'        => 'textarea',
                    'label'       => esc_html__('Description', 'morex'),

                ),
                'year' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Years', 'morex'),
                ),
            )
        ));
    }
}
