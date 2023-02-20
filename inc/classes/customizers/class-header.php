<?php

/**
 * Header Settings
 * Adding dark light logo
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc\Customizers;

use MOREX_THEME\Inc\Traits\Singleton;

// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}

class Header
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
            'header_panel',
            [ //header panel
                'priority'    => 22,
                'title'       => esc_html__('Header', 'morex'),
            ]
        );

        new \Kirki\Section(
            'logo_section',
            [ //logo section
                'title'       => esc_html__('Logo', 'morex'),
                'panel'       => 'header_panel',
                'priority'    => 20,
            ]
        );


        new \Kirki\Field\Image(
            [ // Logo light
                'settings'    => 'logo_light',
                'label'       => esc_html__('Light Logo', 'morex'),
                'section'     => 'logo_section',
                'choices'     => array(
                    'save_as' => 'id',
                ),
            ]
        );
        new \Kirki\Field\Image(
            [ // Logo dark
                'settings'    => 'logo_dark',
                'label'       => esc_html__('Dark Logo', 'morex'),
                'section'     => 'logo_section',
                'choices'     => array(
                    'save_as' => 'id',
                ),
            ]
        );

        new \Kirki\Section(
            'resume_btn_section',
            [ //resume section
                'title'       => esc_html__('Resume Button', 'morex'),
                'panel'       => 'header_panel',
                'priority'    => 20,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'resume_btn_text',
                'label'    => esc_html__('Button Text', 'morex'),
                'section'  => 'resume_btn_section',
                'default'  => esc_html__('Download Resume', 'morex'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\URL(
            [
                'settings' => 'resume_btn_url',
                'label'    => esc_html__('Button Link', 'morex'),
                'section'  => 'resume_btn_section',
                'default'  => '#',
                'priority' => 10,
            ]
        );


        new \Kirki\Section(
            'menu_items_section',
            [ //resume section
                'title'       => esc_html__('Menu Items', 'morex'),
                'panel'       => 'header_panel',
                'priority'    => 20,
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'home_menu_text',
                'label'    => esc_html__('Home', 'morex'),
                'section'  => 'menu_items_section',
                'default'  => esc_html__('Home', 'morex'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'services_menu_text',
                'label'    => esc_html__('Services', 'morex'),
                'section'  => 'menu_items_section',
                'default'  => esc_html__('Services', 'morex'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'about_menu_text',
                'label'    => esc_html__('About Me', 'morex'),
                'section'  => 'menu_items_section',
                'default'  => esc_html__('About Me', 'morex'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'logo-list_menu_text',
                'label'    => esc_html__('Logo', 'morex'),
                'section'  => 'menu_items_section',
                'default'  => esc_html__('Logo', 'morex'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'resume_menu_text',
                'label'    => esc_html__('Resume', 'morex'),
                'section'  => 'menu_items_section',
                'default'  => esc_html__('Resume', 'morex'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'skills_menu_text',
                'label'    => esc_html__('Skills', 'morex'),
                'section'  => 'menu_items_section',
                'default'  => esc_html__('Skills', 'morex'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'portfolio_menu_text',
                'label'    => esc_html__('Portfolio', 'morex'),
                'section'  => 'menu_items_section',
                'default'  => esc_html__('Portfolio', 'morex'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'testimonials_menu_text',
                'label'    => esc_html__('Testimonials', 'morex'),
                'section'  => 'menu_items_section',
                'default'  => esc_html__('Testimonials', 'morex'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'blog_menu_text',
                'label'    => esc_html__('Blog', 'morex'),
                'section'  => 'menu_items_section',
                'default'  => esc_html__('Blog', 'morex'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'contact_menu_text',
                'label'    => esc_html__('Contact', 'morex'),
                'section'  => 'menu_items_section',
                'default'  => esc_html__('Contact', 'morex'),
                'priority' => 10,
            ]
        );
    }
}
