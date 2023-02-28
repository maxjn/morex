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
        <button class="bg-accent1 w-[50px] h-[50px] text-white flex justify-center items-center rounded-lg ltr:rounded-tr-none ltr:rounded-br-none rtl:rounded-tl-none rtl:rounded-bl-none" id="light__to--dark">
            <svg xmlns="http://www.w3.org/2000/svg" class="dark--mode__icon ionicon max-w-[25px] fill-white" viewBox="0 0 512 512">
                <title>مهتابی</title>
                <path d="M264 480A232 232 0 0132 248c0-94 54-178.28 137.61-214.67a16 16 0 0121.06 21.06C181.07 76.43 176 104.66 176 136c0 110.28 89.72 200 200 200 31.34 0 59.57-5.07 81.61-14.67a16 16 0 0121.06 21.06C442.28 426 358 480 264 480z" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" class="light--mode__icon ionicon max-w-[25px] fill-white" viewBox="0 0 512 512">
                <title>آفتابی</title>
                <path d="M256 118a22 22 0 01-22-22V48a22 22 0 0144 0v48a22 22 0 01-22 22zM256 486a22 22 0 01-22-22v-48a22 22 0 0144 0v48a22 22 0 01-22 22zM369.14 164.86a22 22 0 01-15.56-37.55l33.94-33.94a22 22 0 0131.11 31.11l-33.94 33.94a21.93 21.93 0 01-15.55 6.44zM108.92 425.08a22 22 0 01-15.55-37.56l33.94-33.94a22 22 0 1131.11 31.11l-33.94 33.94a21.94 21.94 0 01-15.56 6.45zM464 278h-48a22 22 0 010-44h48a22 22 0 010 44zM96 278H48a22 22 0 010-44h48a22 22 0 010 44zM403.08 425.08a21.94 21.94 0 01-15.56-6.45l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.55 37.56zM142.86 164.86a21.89 21.89 0 01-15.55-6.44l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.56 37.55zM256 358a102 102 0 11102-102 102.12 102.12 0 01-102 102z" />
            </svg>
        </button>

    </div>
    <!-- Dark and light button end -->

    <?php
    // Elementor `header` location
    if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('header')) {

        get_template_part(MOREX_TEMPLATE_MAIN_PATH . '/header');
    }
    ?>

    <!-- Main wrapper start -->
    <main>
