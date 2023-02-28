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

<!-- Blog comment box start -->
<?php get_template_part('comments') ?>

<!-- Modal main content end -->
