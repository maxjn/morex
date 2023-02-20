<?php

/**
 * Home Settings
 * Adding text and images
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc\Customizers;

use MOREX_THEME\Inc\Traits\Singleton;

// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}

class Home
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
            'home_panel',
            [ //header panel
                'priority'    => 23,
                'title'       => esc_html__('Home', 'morex'),
            ]
        );

        new \Kirki\Section( //Image Section
            'home_image_section',
            [ //logo section
                'title'       => esc_html__('Home Images', 'morex'),
                'panel'       => 'home_panel',
                'priority'    => 20,
            ]
        );


        new \Kirki\Field\Image(
            [ // Logo light
                'settings'    => 'home_main_image_light',
                'label'       => esc_html__('Main Image Light', 'morex'),
                'section'     => 'home_image_section',
                'choices'     => array(
                    'save_as' => 'id',
                ),
            ]
        );
        new \Kirki\Field\Image(
            [ // Logo light
                'settings'    => 'home_main_image_dark',
                'label'       => esc_html__('Main Image Dark', 'morex'),
                'section'     => 'home_image_section',
                'choices'     => array(
                    'save_as' => 'id',
                ),
            ]
        );
        new \Kirki\Field\Image(
            [ // Logo light
                'settings'    => 'home_icon1_image',
                'label'       => esc_html__('Icon1 Image', 'morex'),
                'section'     => 'home_image_section',
                'choices'     => array(
                    'save_as' => 'id',
                ),
            ]
        );
        new \Kirki\Field\Image(
            [ // Logo light
                'settings'    => 'home_icon2_image',
                'label'       => esc_html__('Icon2 Image', 'morex'),
                'section'     => 'home_image_section',
                'choices'     => array(
                    'save_as' => 'id',
                ),
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'home_counter_number_text',
                'label'    => esc_html__('Counter Number', 'morex'),
                'section'  => 'home_image_section',
                'default'  => esc_html__('1100+ K', 'morex'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'home_counter_label_text',
                'label'    => esc_html__('Counter Label', 'morex'),
                'section'  => 'home_image_section',
                'default'  => esc_html__('completed projects', 'morex'),
                'priority' => 10,
            ]
        );


        new \Kirki\Section( //Description Section
            'home_description_section',
            [ //logo section
                'title'       => esc_html__('Home Description', 'morex'),
                'panel'       => 'home_panel',
                'priority'    => 20,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'home_top_text',
                'label'    => esc_html__('Top Text', 'morex'),
                'section'  => 'home_description_section',
                'default'  => esc_html__('Hi, I\'m', 'morex'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'home_middle_text',
                'label'    => esc_html__('Middle Text', 'morex'),
                'section'  => 'home_description_section',
                'default'  => esc_html__('Jhon Doe', 'morex'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'home_bottom_text',
                'label'    => esc_html__('Bottom Text', 'morex'),
                'section'  => 'home_description_section',
                'default'  => esc_html__('A Web Designer', 'morex'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Textarea(
            [
                'settings'    => 'home_description_text',
                'label'       => esc_html__('Description Text', 'morex'),
                'section'     => 'home_description_section',
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'home_btn_text',
                'label'    => esc_html__('Botton Text', 'morex'),
                'section'  => 'home_description_section',
                'default'  => esc_html__('About Me', 'morex'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\URL(
            [
                'settings' => 'home_btn_url',
                'label'    => esc_html__('Button Link', 'morex'),
                'section'  => 'home_description_section',
                'default'  => '#',
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'home_social_text',
                'label'    => esc_html__('Social Text', 'morex'),
                'section'  => 'home_description_section',
                'default'  => esc_html__('Follow Me:', 'morex'),
                'priority' => 10,
            ]
        );


        // Buttons
        new \Kirki\Field\Repeater(array(
            'label'       => esc_html__('Social Buttons', 'morex'),
            'section'     => 'home_description_section',
            'description' => esc_html__('Use \'Fontawesome\' classes as the icon text', 'morex'),
            'row_label'   => array(
                'type' => 'text',
                'value' => esc_html__('Social Button', 'morex'),
            ),
            'button_label' => esc_html__('Add New Button', 'morex'),
            'settings'     => 'home_social_btns',
            'default'     => array(),
            'fields' => array(
                'home_social_btn_icon' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Icon', 'morex'),
                    'default'  => 'fa fa-facebook',
                ),
                'home_social_btn_url' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Link', 'morex'),
                    'default'  => '#',

                ),
            )
        ));
    }
}
