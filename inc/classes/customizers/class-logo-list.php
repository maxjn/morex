<?php

/**
 * Logo list Settings
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc\Customizers;

use MOREX_THEME\Inc\Traits\Singleton;

class Logo_List
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
            'logo_list_section',
            [ //logo section
                'title'       => esc_html__('Logo List', 'morex'),
                'priority'    => 26,
            ]
        );

        // Show Loading
        new \Kirki\Field\Checkbox(array(
            'settings'    => 'border_bottom_check',
            'label'       => esc_html__('Show Border Bottom', 'morex'),
            'section'     => 'logo_list_section',
            'default'     => true,
        ));


        // Logos
        new \Kirki\Field\Repeater(array(
            'label'       => esc_html__('Logos', 'morex'),
            'section'     => 'logo_list_section',
            'row_label'   => array(
                'type' => 'text',
                'value' => esc_html__('Logo', 'morex'),
            ),
            'button_label' => esc_html__('Add New Logo', 'morex'),
            'settings'     => 'logos',
            'default'     => array(),
            'fields' => array(
                'border_check'    => [
                    'type'    => 'checkbox',
                    'label'   => esc_html__('Show Border', 'morex'),
                    'default' => true,
                ],
                'logo_light_top' =>  array(
                    'type'        => 'image',
                    'label'       => esc_html__('Logo Light Top', 'morex'),
                    'choices'     => array(
                        'save_as' => 'id',
                    ),
                ),  'logo_dark_top' =>  array(
                    'type'        => 'image',
                    'label'       => esc_html__('Logo Dark Top', 'morex'),
                    'choices'     => array(
                        'save_as' => 'id',
                    ),
                ),
                'logo_light_bottom' =>  array(
                    'type'        => 'image',
                    'label'       => esc_html__('Logo Light Bottom', 'morex'),
                    'choices'     => array(
                        'save_as' => 'id',
                    ),
                ),
                'logo_dark_bottom' =>  array(
                    'type'        => 'image',
                    'label'       => esc_html__('Logo Dark Bottom', 'morex'),
                    'choices'     => array(
                        'save_as' => 'id',
                    ),
                ),
            )
        ));
    }
}
