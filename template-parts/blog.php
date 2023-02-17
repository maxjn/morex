<?php
// WP_Query argument For all the portfolio posts
$args = array(
    'post_type'              => array('post'), // use any for any kind of post type, custom post type slug for custom post type
    'post_status'            => array('publish'), // Also support: pending, draft, auto-draft, future, private, inherit, trash, any
    'posts_per_page'         => 3, // use -1 for all post
    'order'                  => 'DESC', // Also support: ASC
    'orderby'                => 'date', // Also support: none, rand, id, title, slug, modified, parent, menu_order, comment_count
    'paged' => $paged,
);

$query = new WP_Query($args);

?>

<!-- Blog section start -->
<section class="pb-[70px] lg:pb-[100px]" id="blog">
    <div class="container mx-auto">
        <!-- Section title start -->
        <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
            <div class="max-w-full lg:max-w-[575px]  w-full">
                <span
                    class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]"><?= get_theme_mod('blog_sub_title_text') ?></span>
                <h2
                    class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">
                    <?= get_theme_mod('blog_title_text') ?>
                </h2>
            </div>
            <div class="md:grow">
                <p class="text-[#636363] dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full">
                    <?= get_theme_mod('blog_description') ?>
                </p>
            </div>
        </div>
        <!-- Section title end -->
        <?php
        // The Query
        if ($query->have_posts()) {
        ?>
        <div class="grid grid-cols-1 only-md:grid-cols-2 lg:grid-cols-3 gap-[30px]">

            <?php while ($query->have_posts()) : $query->the_post(); ?>
            <!-- single blog  start -->
            <div
                class="blog__card shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_100px_0_rgba(196,206,213,0.7)] dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] transition duration-500">
                <a class="block popup-modal--open" href="#">
                    <!-- blog image -->
                    <div class="overflow-hidden">
                        <span class="block">
                            <img class="blog__thumb w-full transition duration-300"
                                src="<?= the_post_thumbnail_url() ?>" alt="">
                        </span>
                    </div>
                    <!-- blog image end -->

                    <!-- blog content -->
                    <div class="p-[30px]">
                        <div class="mb-[15px]">
                            <?php
                                    foreach ((get_the_category()) as $category) {
                                        $category_name = $category->cat_name;
                                    ?>
                            <span
                                class="bg-accent1_rgb text-[14px] uppercase py-1 px-[6px] text-accent1 dark:text-white dark:bg-accent1 hover:bg-accent1 hover:text-white transition-all duration-300">
                                <?= $category_name ?></span>
                            <?php
                                    }
                                    ?>

                        </div>
                        <div>
                            <h3 class="text-[25px] leading-7 font-heebo font-bold">
                                <span
                                    class="text-primary hover:text-accent1 dark:text-white dark:hover:text-accent1 transition-all duration-300">
                                    <?= the_title() ?> </span>
                            </h3>
                            <p class="mt-[15px] text-paragraph dark:text-slate-200 text-[17px]">
                                <?= morex_the_excerpt(140) ?></p>
                        </div>
                    </div>
                    <!-- blog content end -->
                </a>

                <!-- Blog popup start -->
                <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                    <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]">
                    </div>
                    <!-- Modal content -->
                    <div
                        class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">

                        <div
                            class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                            <!-- Modal close button -->
                            <button
                                class="modal__popup--close ltr:right-[5px] rtl:left-[5px] top-[5px] absolute w-[50px] h-[50px] bg-accent1 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:bg-primary dark:hover:bg-dark_accent1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>
                            <!-- Modal close button -->
                            <!-- Modal main content -->
                            <div>
                                <div class="pt-3">
                                    <img class="max-w-full h-auto rounded-xl mt-6 mx-auto w-full"
                                        src="<?= the_post_thumbnail_url() ?>" alt="Blog details">
                                </div>
                                <h4 class="text-[25px] lg:text-[32px] leading-7 font-heebo font-bold mt-8">
                                    <span class="text-primary dark:text-white"><?php the_title() ?></span>
                                </h4>
                                <div class="blog__content mt-5 text-[17px] leading-7 dark:text-slate-300">
                                    <?php the_content(); ?>
                                </div>

                                <!-- Blog comment box start -->
                                <?php get_template_part('comments') ?>
                            </div>
                            <!-- Modal main content end -->
                        </div>
                    </div>
                </div>
                <!-- Blog popup end -->

            </div>
            <!-- single blog end -->
            <?php endwhile; ?>

        </div>

        <?php } ?>
    </div>
</section>
<!-- Blog section end -->
