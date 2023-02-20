<?php
// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Header Template
 *
 * @package Morex
 */
$menu_class     = \Morex_Theme\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('morex-header-menu');
$header_menus   = wp_get_nav_menu_items($header_menu_id);

?>
<!DOCTYPE html>
<html <?php language_attributes() ?> class="scroll-smooth" dir="rtl">

<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="translator" content="https://www.rtl-theme.com/author/maxjn/products/">

    <?php wp_head(); ?>
    <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) &&
            window.matchMedia("(prefers-color-scheme: dark)").matches)) {
        document.documentElement.classList.add("dark");
        document.getElementById("light__to--dark")?.classList.add("dark--version");
    }
    if (localStorage.getItem("theme-color") === "light") {
        document.documentElement.classList.remove("dark");
        document.getElementById("light__to--dark")?.classList.remove("dark--version");
    }
    </script>
</head>

<body class="font-rubik dark:bg-dark_primary_bg">

    <!-- Preloader start -->
    <?php if (is_front_page() && get_theme_mod('show_loading', true)) { ?>
    <div id="preloader">
        <div class="loader--border"></div>
    </div>
    <?php } ?>
    <!-- Preloader end -->

    <!-- Dark and light button start -->
    <div class="fixed lEtr:right-0 rtl:left-0 top-[50%] translate-y-[-50%] z-50">
        <button
            class="bg-accent1 w-[50px] h-[50px] text-white flex justify-center items-center rounded-lg ltr:rounded-tr-none ltr:rounded-br-none rtl:rounded-tl-none rtl:rounded-bl-none"
            id="light__to--dark">
            <svg xmlns="http://www.w3.org/2000/svg" class="dark--mode__icon ionicon max-w-[25px] fill-white"
                viewBox="0 0 512 512">
                <title>مهتابی</title>
                <path
                    d="M264 480A232 232 0 0132 248c0-94 54-178.28 137.61-214.67a16 16 0 0121.06 21.06C181.07 76.43 176 104.66 176 136c0 110.28 89.72 200 200 200 31.34 0 59.57-5.07 81.61-14.67a16 16 0 0121.06 21.06C442.28 426 358 480 264 480z" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" class="light--mode__icon ionicon max-w-[25px] fill-white"
                viewBox="0 0 512 512">
                <title>آفتابی</title>
                <path
                    d="M256 118a22 22 0 01-22-22V48a22 22 0 0144 0v48a22 22 0 01-22 22zM256 486a22 22 0 01-22-22v-48a22 22 0 0144 0v48a22 22 0 01-22 22zM369.14 164.86a22 22 0 01-15.56-37.55l33.94-33.94a22 22 0 0131.11 31.11l-33.94 33.94a21.93 21.93 0 01-15.55 6.44zM108.92 425.08a22 22 0 01-15.55-37.56l33.94-33.94a22 22 0 1131.11 31.11l-33.94 33.94a21.94 21.94 0 01-15.56 6.45zM464 278h-48a22 22 0 010-44h48a22 22 0 010 44zM96 278H48a22 22 0 010-44h48a22 22 0 010 44zM403.08 425.08a21.94 21.94 0 01-15.56-6.45l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.55 37.56zM142.86 164.86a21.89 21.89 0 01-15.55-6.44l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.56 37.55zM256 358a102 102 0 11102-102 102.12 102.12 0 01-102 102z" />
            </svg>
        </button>

    </div>
    <!-- Dark and light button end -->

    <!-- Header area start -->
    <header class="absolute w-full left-0 top-0">
        <div class="header__sticky py-5">
            <div class="container mx-auto">
                <div class="flex justify-between items-center">
                    <div class="logo">
                        <?php
                        $light_logo = false;
                        $dark_logo = false;

                        if (get_theme_mod('logo_light')) {
                            $light_logo = true;
                            $light_url = wp_get_attachment_url(get_theme_mod('logo_light'));
                        }
                        if (get_theme_mod('logo_dark')) {
                            $dark_logo = true;
                            $dark_url = wp_get_attachment_url(get_theme_mod('logo_dark'));
                        }

                        if ($light_logo || $dark_logo) {
                            echo '<a class="logo" href="' . esc_url(home_url()) . '">';

                            if ($light_logo && $dark_logo) {
                                echo '<img class="hidden dark:block" src="' . $dark_url . '" alt="' . esc_attr__('Logo', 'morex') . '">';
                                echo '<img class="dark:hidden" src="' . $light_url . '" alt="' . esc_attr__('Logo', 'morex') . '">';
                            } else {
                                echo '<img src="' . ($light_logo ? $light_url : $dark_url) . '" alt="' . esc_attr__('Logo', 'morex') . '">';
                            }

                            echo '</a>';
                        }
                        ?>
                    </div>
                    <div class="flex items-center md:hidden">
                        <nav>
                            <ul class="flex items-center">
                                <?php
                                // Other sections
                                $sections = get_theme_mod('sections', array(
                                    'home',
                                    'services',
                                    'about',
                                    'logo-list',
                                    'resume',
                                    'skills',
                                    'portfolio',
                                    'testimonials',
                                    'blog',
                                    'contact',
                                ));

                                $section_index = 0;
                                foreach ($sections as $section) {

                                    $section_index++;
                                    if (get_theme_mod($section . '_menu_text') && is_page_template('templates/home.php')) {
                                ?>
                                <li>
                                    <a href="#<?= $section ?>"
                                        class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] <?= $section_index != 1 ? 'rtl:mr-[26px] rtl:xl:mr-[44px]' : ''; ?>  relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">
                                        <?= get_theme_mod($section . '_menu_text') ?? ''; ?>
                                    </a>
                                </li>
                                <?php }
                                } ?>

                                <?php
                                if (!empty($header_menus) && is_array($header_menus)) {
                                    foreach ($header_menus as $menu_item) {
                                        $child_menu_items   = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);
                                        $has_children       = !empty($child_menu_items) && is_array($child_menu_items);

                                ?>
                                <li>
                                    <a class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] <?= $section_index != 1 ? 'rtl:mr-[26px] rtl:xl:mr-[44px]' : ''; ?>  relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full"
                                        href="<?= esc_url($menu_item->url); ?>"><?= esc_attr($menu_item->title); ?></a>
                                </li>
                                <?php

                                    }
                                }
                                ?>

                            </ul>
                        </nav>
                        <?php
                        if (get_theme_mod('resume_btn_text')) {
                        ?>
                        <a href="<?= get_theme_mod('resume_btn_url', '#') ?>">
                            <button
                                class="flex bg-accent1 lg:px-[15px] px-[12px] xl:py-[12px] py-[10px] rounded-[2rem] text-[16px] xl:text-[18px] font-medium text-white items-center ltr:ml-[32px] rtl:mr-[32px] transition duration-300 relative after:absolute :after:content-[''] after:bg-primary after:h-full after:w-full after:bottom-0 after:left-0 after:rounded-[2rem] after:trasition after:duration-300 after:opacity-0 hover:after:opacity-[1]">
                                <span
                                    class="icon bg-[#EFEBEB] text-accent1 w-[34px] h-[34px] rounded-full flex items-center justify-center ltr:xl:mr-[15px] ltr:mr-[10px] rtl:xl:ml-[15px] rtl:ml-[10px] relative z-[8] flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-download">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg>
                                </span>
                                <span
                                    class="ltr:xl:pr-[5px] ltr:lg:pr-[5px] rtl:xl:pl-[5px] rtl:lg:pl-[5px] relative z-[8] flex-shrink-0">
                                    <?= get_theme_mod('resume_btn_text') ?>
                                </span>
                            </button>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="lg:hidden">
                        <button class="offcanvas__header--menu__open--btn text-primary dark:text-white " data-offcanvas>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-menu">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Start Offcanvas header menu -->
            <div class="offcanvas__header lg:hidden dark:bg-gray-800">
                <div class="offcanvas__inner">
                    <div class="offcanvas__logo">
                        <?php
                        if ($light_logo || $dark_logo) {
                            echo '<a class="logo" href="' . esc_url(home_url()) . '">';

                            if ($light_logo && $dark_logo) {
                                echo '<img class="hidden dark:block" src="' . $dark_url . '" alt="' . esc_attr__('Logo', 'morex') . '">';
                                echo '<img class="dark:hidden" src="' . $light_url . '" alt="' . esc_attr__('Logo', 'morex') . '">';
                            } else {
                                echo '<img src="' . ($light_logo ? $light_url : $dark_url) . '" alt="' . esc_attr__('Logo', 'morex') . '">';
                            }

                            echo '</a>';
                        } ?>
                        <button class="offcanvas__close--btn dark:text-white" data-offcanvas>بستن</button>
                    </div>
                    <nav class="offcanvas__menu">
                        <ul class="offcanvas__menu_ul">
                            <?php
                            // Other sections
                            $sections = get_theme_mod('sections', array(
                                'home',
                                'services',
                                'about',
                                'logo-list',
                                'resume',
                                'skills',
                                'portfolio',
                                'testimonials',
                                'blog',
                                'contact',
                            ));

                            $section_index = 0;

                            foreach ($sections as $section) {

                                $section_index++;
                                if (get_theme_mod($section . '_menu_text')) {
                            ?>
                            <li class="offcanvas__menu_li">
                                <a href="#<?= $section ?>" class="offcanvas__menu_item dark:text-white ">
                                    <?= get_theme_mod($section . '_menu_text') ?? ''; ?>
                                </a>
                            </li>
                            <?php }
                            } ?>

                            <?php
                            if (!empty($header_menus) && is_array($header_menus)) {
                                foreach ($header_menus as $menu_item) {
                                    $child_menu_items   = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);
                                    $has_children       = !empty($child_menu_items) && is_array($child_menu_items);

                            ?>
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item dark:text-white"
                                    href="<?= esc_url($menu_item->url); ?>"><?= esc_attr($menu_item->title); ?></a>
                                <?php if ($has_children) {  ?>
                                <ul class="offcanvas__sub_menu">
                                    <?php
                                                foreach ($child_menu_items as $child_menu_item) {
                                                ?>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="<?= esc_url($child_menu_item->url); ?>"
                                            class="offcanvas__sub_menu_item dark:text-white"><?= esc_attr($child_menu_item->title); ?></a>
                                    </li>
                                    <?php } ?>

                                </ul>
                                <?php } ?>
                            </li>
                            <?php

                                }
                            }
                            ?>
                        </ul>
                        <button
                            class="flex mx-auto bg-accent1 lg:px-[15px] px-[12px] xl:py-[12px] py-[10px] rounded-[2rem] text-[16px] xl:text-[18px] font-medium text-white items-center transition duration-300 relative after:absolute :after:content-[''] after:bg-primary after:h-full after:w-full after:bottom-0 after:left-0 after:rounded-[2rem] after:trasition after:duration-300 after:opacity-0 hover:after:opacity-[1] mt-[30px]">
                            <span
                                class="icon bg-[#EFEBEB] text-accent1 w-[34px] h-[34px] rounded-full flex items-center justify-center ltr:xl:mr-[15px] ltr:mr-[10px] rtl:xl:ml-[15px] rtl:ml-[10px] relative z-[8] flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-download">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="7 10 12 15 17 10"></polyline>
                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                </svg>
                            </span>
                            <span
                                class="ltr:xl:pr-[5px] ltr:lg:pr-[5px] rtl:xl:pl-[5px] rtl:lg:pl-[5px] relative z-[8] flex-shrink-0">دانلود
                                رزومه</span>
                        </button>
                    </nav>

                </div>
            </div>
            <!-- End Offcanvas header menu -->
        </div>


    </header>
    <!-- Header area end -->

    <!-- Main wrapper start -->
    <main>
