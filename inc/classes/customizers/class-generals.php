<?php

/**
 * General Settings
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc\Customizers;

use MOREX_THEME\Inc\Traits\Singleton;

class Generals
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

        new \Kirki\Section('general_section', array(
            'title'          => esc_html__('Theme General Settings', 'morex'),
            'priority'       => 20,
        ));

        // RTL Fonts
        $fonts = array(
            'iran-yekan'     => 'ایران یکان',
            'aviny'          => 'آوینی',
            'dastnevis'      => 'دست‌نویس',
            'droid-naskh'    => 'دروید نسخ',
            'dubai'          => 'دوبی',
            'entezar'        => 'انتظار',
            'helvetica-neue' => 'هلوتیکا نیو',
            'iran-sans'      => 'ایران سنس',
            'lalezar'        => 'لاله‌زار',
            'myriad'         => 'میریاد',
            'neirizi'        => 'نی‌ریزی',
            'palatino-sans'  => 'پالاتینو سنس',
            'sahel'          => 'ساحل',
            'shabnam'        => 'شبنم',
            'vazir'          => 'وزیر',
            'yekan'          => 'یکان',
            'damavand'       => 'دماوند',
            'pinar'          => 'پینار',
            'estedad'        => 'استعداد',
            'noora'          => 'نورا',
        );

        // Primary Font
        new \Kirki\Field\Select(array(
            'settings'    => 'primary_font',
            'label'       => esc_html__('Main Font', 'morex'),
            'section'     => 'general_section',
            'default'     => 'vazir',
            'choices'     => $fonts,
        ));
    }
}