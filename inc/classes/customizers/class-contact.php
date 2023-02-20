<?php

/**
 * Contact Settings
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc\Customizers;

use MOREX_THEME\Inc\Traits\Singleton;

// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}

class Contact
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
            'contact_panel',
            [ //header panel
                'priority'    => 31,
                'title'       => esc_html__('Contact', 'morex'),
            ]
        );

        new \Kirki\Section( //Title Section
            'contact_title_section',
            [ //logo section
                'title'       => esc_html__('Contact Title', 'morex'),
                'panel'       => 'contact_panel',
                'priority'    => 20,
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'contact_title_text',
                'label'    => esc_html__('Title', 'morex'),
                'section'  => 'contact_title_section',
                'default'  => esc_html__('My Contact Info', 'morex'),
                'priority' => 10,
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'contact_sub_title_text',
                'label'    => esc_html__('Sub Title', 'morex'),
                'section'  => 'contact_title_section',
                'default'  => esc_html__('Contact Me', 'morex'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Textarea(
            [
                'settings'    => 'contact_description',
                'label'       => esc_html__('Description', 'morex'),
                'section'     => 'contact_title_section',
            ]
        );

        new \Kirki\Section( //Title Section
            'contact_info',
            [ //logo section
                'title'       => esc_html__('Contact Info', 'morex'),
                'panel'       => 'contact_panel',
                'priority'    => 20,
            ]
        );
        // Items
        new \Kirki\Field\Repeater(array(
            'label'       => esc_html__('Contact Info', 'morex'),
            'section'     => 'contact_info',
            'row_label'   => array(
                'type' => 'text',
                'value' => esc_html__('Info', 'morex'),
            ),
            'button_label' => esc_html__('Add New Info', 'morex'),
            'settings'     => 'contact_items',
            'default'     => array(),
            'fields' => array(
                'icon' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Icon', 'morex'),
                    'default' => 'fa fa-phone',
                ),
                'title' => array(
                    'type'        => 'text',
                    'label'       => esc_html__('Title', 'morex'),
                ),
                'info' => array(
                    'type'        => 'textarea',
                    'label'       => esc_html__('Info', 'morex'),
                    'default' => 'contact information1 </br>
                    contact information2',
                )
            )
        ));

        new \Kirki\Section( //Title Section
            'contact_form_section',
            [ //logo section
                'title'       => esc_html__('Contact Form', 'morex'),
                'panel'       => 'contact_panel',
                'priority'    => 20,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'contact_form_id',
                'label'    => esc_html__('Form Id', 'morex'),
                'section'  => 'contact_form_section',
                'priority' => 10,
            ]
        );

        new \Kirki\Section( //Title Section
            'contact_map',
            [ //logo section
                'title'       => esc_html__('Contact Map', 'morex'),
                'panel'       => 'contact_panel',
                'priority'    => 20,
            ]
        );

        // Iframe Code
        new \Kirki\Field\Code(array(
            'settings' => 'contact_map_iframe',
            'label'    => esc_html__('iframe Code', 'arco'),
            'section'  => 'contact_map',
            'default'  => '<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
    src="https://maps.google.com/maps?width=100%25&amp;height=440&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>',
            'choices'     => array(
                'language' => 'html',
            ),
        ));
    }
}
