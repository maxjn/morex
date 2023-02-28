<?php
// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}
/**
 * Logo List Section Template
 *
 * @package Morex
 */
?>
<!-- Logo list section start -->
<section class="py-[70px] lg:py-[100px] border-b-[1px] border-[#DDDDDD] dark:border-dark_accent1" id="logo-list">
    <div class="container mx-auto">
        <div class="relative">
            <?php if (get_theme_mod('logo_border_bottom', true)) { ?>
                <div class="w-full absolute h-[1px] bg-[#DDDDDD] top-[50%] translate-y-[-50%] ltr:left-0 rtl:right-0 2xs:hidden">
                </div>
            <?php } ?>
            <div class="flex flex-wrap">
                <?php
                $logos = get_theme_mod('logos');
                $counter = 0;
                foreach ($logos as $logo) {
                    $counter++;
                ?>
                    <div class="max-w-[25%] 2xs:max-w-[50%] w-full <?= ($logo['border_check']) ? 'ltr:border-r-[1px] rtl:border-l-[1px]' : ''; ?> border-[#DDDDDD] dark:border-dark_accent1 client__logo--padding">
                        <?php
                        $light_logo_top = false;
                        $dark_logo_top = false;

                        if ($logo['logo_light_top']) {
                            $light_logo_top = true;
                            $light_url_top = wp_get_attachment_url($logo['logo_light_top']);
                        }
                        if ($logo['logo_dark_top']) {
                            $dark_logo_top = true;
                            $dark_url_top = wp_get_attachment_url($logo['logo_dark_top']);
                        }
                        if ($light_logo_top || $dark_logo_top) {
                            echo '<div
                            class="w-full client__logo--padding--inner 2xs:border-b-[1px] 2xs:border-[#DDDDDD] dark:2xs:border-dark_accent1">';

                            if ($light_logo_top && $dark_logo_top) {
                                echo '<img class="mx-auto opacity-[0.7] hover:opacity-[1] transition duration-300 dark:hidden"
                                src="' . $light_url_top . '" alt="' . esc_attr__('Logo', 'morex') . '">';
                                echo '<img class="mx-auto grayscale hover:grayscale-0 transition duration-300 dark:block hidden"
                                src="' . $dark_url_top . '" alt="' . esc_attr__('Logo', 'morex') . '">';
                            } else {
                                echo '<img src="' . ($light_logo_top ? $light_url_top : $dark_url_top) . '" alt="' . esc_attr__('Logo', 'morex') . '">';
                            }

                            echo '</div>';
                        }

                        $light_logo_bottom = false;
                        $dark_logo_bottom = false;

                        if ($logo['logo_light_bottom']) {
                            $light_logo_bottom = true;
                            $light_url_bottom = wp_get_attachment_url($logo['logo_light_bottom']);
                        }
                        if ($logo['logo_dark_bottom']) {
                            $dark_logo_bottom = true;
                            $dark_url_bottom = wp_get_attachment_url($logo['logo_dark_bottom']);
                        }
                        if ($light_logo_bottom || $dark_logo_bottom) {
                            echo '<div
                            class="w-full client__logo--padding--inner 2xs:border-b-[1px] 2xs:border-[#DDDDDD] dark:2xs:border-dark_accent1">';

                            if ($light_logo_bottom && $dark_logo_bottom) {
                                echo '<img class="mx-auto opacity-[0.7] hover:opacity-[1] transition duration-300 dark:hidden"
                                src="' . $light_url_bottom . '" alt="' . esc_attr__('Logo', 'morex') . '">';
                                echo '<img class="mx-auto grayscale hover:grayscale-0 transition duration-300 dark:block hidden"
                                src="' . $dark_url_bottom . '" alt="' . esc_attr__('Logo', 'morex') . '">';
                            } else {
                                echo '<img src="' . ($light_logo_bottom ? $light_url_bottom : $dark_url_bottom) . '" alt="' . esc_attr__('Logo', 'morex') . '">';
                            }

                            echo '</div>';
                        }
                        ?>



                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- Logo list section end -->
