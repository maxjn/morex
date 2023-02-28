<?php
// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}
/**
 * Footer Template
 *
 * @package Morex
 */

$menu_class     = \Morex_Theme\Inc\Menus::get_instance();
$footer_menu_id = $menu_class->get_menu_id('morex-footer-menu');
$footer_menus   = wp_get_nav_menu_items($footer_menu_id);
?>


<!-- Footer start -->
<footer class="py-[50px] bg-cover bg-no-repeat bg-center bg-[url('../images/footer-bg.html')] bg-[#EFF3F7] dark:bg-[url('../images/footer-bg-dark.html')] dark:bg-dark_primary_bg dark:border-t dark:border-dark_accent1">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 only-md:grid-cols-2 lg:grid-cols-2">
            <div class="flex">
                <p class="flex items-center flex-wrap sm:justify-center dark:text-slate-200">
                    <?= get_theme_mod('footer_copyright')  ?>

                </p>
            </div>
            <div class="flex items-center justify-end gap-8 sm:justify-center sm:mt-[15px]">
                <?php
                if (!empty($footer_menus) && is_array($footer_menus)) {
                    foreach ($footer_menus as $menu_item) {
                ?>

                        <a href="<?= esc_url($menu_item->url); ?>" class="text-paragraph dark:text-slate-200 hover:text-accent1 font-medium text-[20px] sm:text-[16px]"><?= esc_attr($menu_item->title); ?></a>

                <?php }
                } ?>
            </div>
        </div>
    </div>

</footer>
<!-- Footer end -->
