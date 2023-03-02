<?php
// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}
/**
 * Singular Content Template
 *
 * @package Morex
 */
?>
<!-- Modal main content -->
<div class="pt-3">
    <img class="max-w-full h-auto rounded-xl mt-6 mx-auto w-full" src="<?= the_post_thumbnail_url() ?>">
</div>
<h4 class="text-[25px] lg:text-[32px] leading-7 font-heebo font-bold mt-8">
    <a href="<?= get_the_permalink() ?>"> <span class="text-primary dark:text-white"><?php the_title() ?></span> </a>
</h4>
<div class="blog__content mt-5 text-[17px] leading-7 dark:text-slate-300">
    <?php the_content(); ?>
</div>
<div class="blog__content mt-5 text-[17px] leading-7 dark:text-slate-300 flex justify-between">
    <div class="mb-[15px] w-auto">
        <?php
        if (is_single() || is_archive() || is_front_page()) {
            echo __('published in', 'morex') . human_time_diff(get_the_time('U'), current_time('U')) . ' ' . __('ago', 'morex');
        }
        ?>
    </div>
    <div class="mb-[15px] w-auto">
        <?php
        if (get_the_category()) {
            echo __('Tags: ', 'morex');
        }
        ?>
        <?php
        foreach ((get_the_category()) as $category) {
            $category_name = $category->cat_name;
            $cat_id = get_cat_ID($category_name);
            $category_link = get_category_link($cat_id);
        ?>
            <a href="<?= $category_link ?>">
                <span class="bg-accent1_rgb text-[14px] uppercase py-1 px-[6px] text-accent1 dark:text-white dark:bg-accent1 hover:bg-accent1 hover:text-white transition-all duration-300 inline-block">
                    <?= $category_name ?>
                </span>
            </a>
        <?php
        }
        ?>

    </div>
</div>
<!-- Blog comment box start -->
<?php get_template_part('comments') ?>

<!-- Modal main content end -->
