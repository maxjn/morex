<?php

/**
 * About Settings
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc\Customizers;

use MOREX_THEME\Inc\Traits\Singleton;

class About
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
            'about_panel',
            [ //header panel
                'priority'    => 25,
                'title'       => esc_html__('About', 'morex'),
            ]
        );

        new \Kirki\Section( //Title Section
            'about_title_section',
            [ //logo section
                'title'       => esc_html__('About Title', 'morex'),
                'panel'       => 'about_panel',
                'priority'    => 20,
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'about_title_text',
                'label'    => esc_html__('Title', 'morex'),
                'section'  => 'about_title_section',
                'default'  => esc_html__('What I can do to help you', 'morex'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'about_sub_title_text',
                'label'    => esc_html__('Sub Title', 'morex'),
                'section'  => 'about_title_section',
                'default'  => esc_html__('About Me', 'morex'),
                'priority' => 10,
            ]
        );

        new \Kirki\Section( //Information Section
            'about_information_section',
            [ //logo section
                'title'       => esc_html__('About Informations', 'morex'),
                'panel'       => 'about_panel',
                'priority'    => 20,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'about_info_title_text',
                'label'    => esc_html__('Title', 'morex'),
                'section'  => 'about_information_section',
                'default'  => esc_html__('My Info:', 'morex'),
                'priority' => 10,
            ]
        );

        // Informations
        new \Kirki\Field\Repeater(array(
            'label'       => esc_html__('Informations', 'morex'),
            'section'     => 'about_information_section',
            'row_label'   => array(
                'type' => 'text',
                'value' => esc_html__('Information', 'morex'),
            ),
            'button_label' => esc_html__('Add New Info', 'morex'),
            'settings'     => 'about_informations',
            'default'     => array(),
            'fields' => array(
                'info' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Info', 'morex'),
                    'default'  => 'Name: John',
                ),
            )
        ));

        new \Kirki\Field\Text(
            [
                'settings' => 'about_info_btn_text',
                'label'    => esc_html__('Button Text', 'morex'),
                'section'  => 'about_information_section',
                'default'  => esc_html__('Hire Me', 'morex'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\URL(
            [
                'settings' => 'about_info_btn_url',
                'label'    => esc_html__('Button Link', 'morex'),
                'section'  => 'about_information_section',
                'default'  => '#',
                'priority' => 10,
            ]
        );

        new \Kirki\Section( //Image Section
            'about_image_section',
            [ //logo section
                'title'       => esc_html__('About Image', 'morex'),
                'panel'       => 'about_panel',
                'priority'    => 20,
            ]
        );

        new \Kirki\Field\Image(
            [
                'settings'    => 'about_image',
                'label'       => esc_html__('Image', 'morex'),
                'section'     => 'about_image_section',
                'choices'     => array(
                    'save_as' => 'id',
                ),
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'about_image_top_text',
                'label'    => esc_html__('Top Text', 'morex'),
                'section'  => 'about_image_section',
                'default'  => esc_html__('+27', 'morex'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'about_image_bottom_text',
                'label'    => esc_html__('Bottom Text', 'morex'),
                'section'  => 'about_image_section',
                'default'  => esc_html__('Years Of Experience', 'morex'),
                'priority' => 10,
            ]
        );
    }
}
