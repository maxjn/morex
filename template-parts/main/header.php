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
?>
<!-- Header area start -->
<header class="absolute w-full left-0 top-0 z-10">
    <div class="header__sticky py-5">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <div class="logo flex justify-between items-center">
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
                                if (get_theme_mod($section . '_menu_text')) {
                            ?>
                                    <li>
                                        <a href="<?= home_url() ?>#<?= $section ?>" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] <?= $section_index != 1 ? 'rtl:mr-[26px] rtl:xl:mr-[44px]' : ''; ?>  relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">
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
                                        <a class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] <?= $section_index != 1 ? 'rtl:mr-[26px] rtl:xl:mr-[44px]' : ''; ?>  relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full" href="<?= esc_url($menu_item->url); ?>"><?= esc_attr($menu_item->title); ?></a>
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
                            <button class="flex bg-accent1 lg:px-[15px] px-[12px] xl:py-[12px] py-[10px] rounded-[2rem] text-[16px] xl:text-[18px] font-medium text-white items-center ltr:ml-[32px] rtl:mr-[32px] transition duration-300 relative after:absolute :after:content-[''] after:bg-primary after:h-full after:w-full after:bottom-0 after:left-0 after:rounded-[2rem] after:trasition after:duration-300 after:opacity-0 hover:after:opacity-[1]">
                                <span class="icon bg-[#EFEBEB] text-accent1 w-[34px] h-[34px] rounded-full flex items-center justify-center ltr:xl:mr-[15px] ltr:mr-[10px] rtl:xl:ml-[15px] rtl:ml-[10px] relative z-[8] flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg>
                                </span>
                                <span class="ltr:xl:pr-[5px] ltr:lg:pr-[5px] rtl:xl:pl-[5px] rtl:lg:pl-[5px] relative z-[8] flex-shrink-0">
                                    <?= get_theme_mod('resume_btn_text') ?>
                                </span>
                            </button>
                        </a>
                    <?php }
                    if (get_theme_mod('show_search', true)) {
                    ?>
                        <!-- Search Form Start -->
                        <div class="box ltr:ml-[10px] rtl:mr-[10px]">
                            <form name="search" role="search" method="get" action="<?php echo home_url('/'); ?>">
                                <input type="hidden" name="post_type" value="post">
                                <input class="input" type="search" name="s" onmouseout="this.value = ''; this.blur();">
                            </form>
                            <i class="fas fa-search"></i>
                        </div>
                        <!-- Search Form End -->
                    <?php } ?>
                </div>
                <div class="lg:hidden">
                    <button class="offcanvas__header--menu__open--btn text-primary dark:text-white " data-offcanvas>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
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
                <nav class="offcanvas__menu flex flex-col">
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
                                    <a href="<?= esc_url(home_url())  ?>#<?= $section ?>" class="offcanvas__menu_item dark:text-white ">
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
                                    <a class="offcanvas__menu_item dark:text-white" href="<?= esc_url($menu_item->url); ?>"><?= esc_attr($menu_item->title); ?></a>
                                    <?php if ($has_children) {  ?>
                                        <ul class="offcanvas__sub_menu">
                                            <?php
                                            foreach ($child_menu_items as $child_menu_item) {
                                            ?>
                                                <li class="offcanvas__sub_menu_li">
                                                    <a href="<?= esc_url($child_menu_item->url); ?>" class="offcanvas__sub_menu_item dark:text-white"><?= esc_attr($child_menu_item->title); ?></a>
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
                    <?php
                    if (get_theme_mod('resume_btn_text')) {
                    ?>
                        <a href="<?= get_theme_mod('resume_btn_url', '#') ?>">
                            <button class="flex mx-auto bg-accent1 lg:px-[15px] px-[12px] xl:py-[12px] py-[10px] rounded-[2rem] text-[16px] xl:text-[18px] font-medium text-white items-center transition duration-300 relative after:absolute :after:content-[''] after:bg-primary after:h-full after:w-full after:bottom-0 after:left-0 after:rounded-[2rem] after:trasition after:duration-300 after:opacity-0 hover:after:opacity-[1] mt-[30px]">
                                <span class="icon bg-[#EFEBEB] text-accent1 w-[34px] h-[34px] rounded-full flex items-center justify-center ltr:xl:mr-[15px] ltr:mr-[10px] rtl:xl:ml-[15px] rtl:ml-[10px] relative z-[8] flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg>
                                </span>
                                <span class="ltr:xl:pr-[5px] ltr:lg:pr-[5px] rtl:xl:pl-[5px] rtl:lg:pl-[5px] relative z-[8] flex-shrink-0"><?= get_theme_mod('resume_btn_text') ?></span>
                            </button>
                        </a>
                    <?php }
                    if (get_theme_mod('show_search', true)) {
                    ?>
                        <!-- Search Form Start -->
                        <div class="box inline-block text-center mt-[10px]">
                            <form name="search" role="search" method="get" action="<?php echo home_url('/'); ?>">

                                <input type="hidden" name="post_type" value="post">
                                <input class="input" type="search" name="s" onmouseout="this.value = ''; this.blur();">
                            </form>
                            <i class="fas fa-search"></i>
                        </div>
                        <!-- Search Form End -->
                    <?php } ?>
                </nav>

            </div>
        </div>
        <!-- End Offcanvas header menu -->
    </div>


</header>
<!-- Header area end -->
