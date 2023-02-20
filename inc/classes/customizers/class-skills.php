<?php

/**
 * Skills Settings
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc\Customizers;

use MOREX_THEME\Inc\Traits\Singleton;
// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}

class Skills
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
            'skills_panel',
            [ //header panel
                'priority'    => 28,
                'title'       => esc_html__('Skills', 'morex'),
            ]
        );

        new \Kirki\Section( //Title Section
            'skills_title_section',
            [ //logo section
                'title'       => esc_html__('Skills Title', 'morex'),
                'panel'       => 'skills_panel',
                'priority'    => 20,
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'skills_title_text',
                'label'    => esc_html__('Title', 'morex'),
                'section'  => 'skills_title_section',
                'default'  => esc_html__('My Skills And My Abilities', 'morex'),
                'priority' => 10,
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'skills_sub_title_text',
                'label'    => esc_html__('Sub Title', 'morex'),
                'section'  => 'skills_title_section',
                'default'  => esc_html__('My Skills', 'morex'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Textarea(
            [
                'settings'    => 'skills_description',
                'label'       => esc_html__('Description Text', 'morex'),
                'section'     => 'skills_title_section',
            ]
        );

        new \Kirki\Section( //Skills First Culomn Section
            'skills_Items_section',
            [ //logo section
                'title'       => esc_html__('Skills Items', 'morex'),
                'panel'       => 'skills_panel',
                'priority'    => 20,
            ]
        );

        // Items
        new \Kirki\Field\Repeater(array(
            'label'       => esc_html__('Skills First Culomn Items', 'morex'),
            'section'     => 'skills_Items_section',
            'description' => esc_html__('Use \'Fontawesome\' classes as the icon text', 'morex'),
            'row_label'   => array(
                'type' => 'text',
                'value' => esc_html__('Skills Item', 'morex'),
            ),
            'button_label' => esc_html__('Add New Skill Item', 'morex'),
            'settings'     => 'skill_items',
            'default'     => array(),
            'fields' => array(
                'title' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Title', 'morex'),

                ), 'percent' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Percent', 'morex'),
                    'default'  => '100',
                )
            )
        ));

        // Items
        new \Kirki\Field\Repeater(array(
            'label'       => esc_html__('Skills First Culomn Items', 'morex'),
            'section'     => 'skills_Items_section',
            'description' => esc_html__('Use \'Fontawesome\' classes as the icon text', 'morex'),
            'row_label'   => array(
                'type' => 'text',
                'value' => esc_html__('Skills Item', 'morex'),
            ),
            'button_label' => esc_html__('Add New Skill Item', 'morex'),
            'settings'     => 'skill_items2',
            'default'     => array(),
            'fields' => array(
                'title' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Title', 'morex'),

                ), 'percent' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Percent', 'morex'),
                    'default'  => '100',
                )
            )
        ));
    }
}
