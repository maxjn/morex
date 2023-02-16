<?php

/**
 * Testimonial Settings
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc\Customizers;

use MOREX_THEME\Inc\Traits\Singleton;

class Testimonial
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
            'testimonial_panel',
            [ //header panel
                'priority'    => 29,
                'title'       => esc_html__('Testimonial', 'morex'),
            ]
        );

        new \Kirki\Section( //Title Section
            'testimonial_title_section',
            [ //logo section
                'title'       => esc_html__('Testimonial Title', 'morex'),
                'panel'       => 'testimonial_panel',
                'priority'    => 20,
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'testimonial_title_text',
                'label'    => esc_html__('Title', 'morex'),
                'section'  => 'testimonial_title_section',
                'default'  => esc_html__('What My Friends & Colleagues Say About Me', 'morex'),
                'priority' => 10,
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'testimonial_sub_title_text',
                'label'    => esc_html__('Sub Title', 'morex'),
                'section'  => 'testimonial_title_section',
                'default'  => esc_html__('Testimonial', 'morex'),
                'priority' => 10,
            ]
        );

        new \Kirki\Section( //Testimonials
            'testimonial_Items_section',
            [ //logo section
                'title'       => esc_html__('Testimonials', 'morex'),
                'panel'       => 'testimonial_panel',
                'priority'    => 20,
            ]
        );

        // Items
        new \Kirki\Field\Repeater(array(
            'label'       => esc_html__('Testimonials', 'morex'),
            'section'     => 'testimonial_Items_section',
            'row_label'   => array(
                'type' => 'text',
                'value' => esc_html__('Testimonial Item', 'morex'),
            ),
            'button_label' => esc_html__('Add New Testimonial', 'morex'),
            'settings'     => 'testimonial_items',
            'default'     => array(),
            'fields' => array(
                'name' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Name', 'morex'),
                ),
                'position' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Job Position', 'morex'),

                ),
                'testimonial_text' => array(
                    'type'        => 'textarea',
                    'label'       => esc_html__('Testimonial Text', 'morex'),

                ), 'image' => array(
                    'type'        => 'image',
                    'label'       => esc_html__('Image', 'morex'),
                    'choices'     => array(
                        'save_as' => 'id',
                    ),
                ),
            )
        ));
    }
}
