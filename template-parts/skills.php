<?php
// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}

?>
<!--  Skill section start -->
<section class="lg:py-[100px] md:pb-[70px]" id="skills">
    <div class="container mx-auto">
        <!-- Section title start -->
        <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
            <div class="max-w-full lg:max-w-[575px]  w-full">
                <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]"><?= get_theme_mod('skills_sub_title_text') ?></span>
                <h2 class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">
                    <?= get_theme_mod('skills_title_text') ?>
                </h2>
            </div>
            <div class="md:grow">
                <p class="text-[#636363] dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full">
                    <?= get_theme_mod('skills_description') ?>
                </p>
            </div>
        </div>
        <!-- Section title end -->

        <!-- skill wrapper start -->
        <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] md:flex-wrap md:text-center">
            <?php
            // Theme_mod First Culomn skill_items to check.
            $skill_items = get_theme_mod('skill_items');
            if (count($skill_items) > 0) {
            ?>
                <!-- Column start -->
                <div class="max-w-full lg:max-w-[472px]  w-full only-md:px-7 sm:px-5">
                    <?php
                    $counter = 0;
                    foreach ($skill_items as $item) :
                        $counter++;
                    ?>
                        <!-- Single skill start -->
                        <div class="relative mb-7">
                            <div class="flex justify-between mb-1">
                                <span class="text-lg font-medium text-primary dark:text-white"><?= $item['title'] ?></span>
                                <span class="text-xs font-medium text-white bg-accent1 dark:text-white absolute py-1.5 px-1.5 bottom-6 rounded-sm before:absolute before:content-[''] before:bg-accent1 before:w-5 before:h-5 before:clip-polygon before:top-4 ltr:before:left-2 rtl:before:right-2 before:-z-10 ltr:left-[calc(<?= $item['percent'] ?>%_-_20px)] rtl:right-[calc(<?= $item['percent'] ?>%_-_20px)]"><?= $item['percent'] ?>%</span>
                            </div>
                            <?php if ($item['percent']) { ?>
                                <div class="w-full bg-gray-200 rounded-full h-[10px] dark:bg-gray-700 flex items-center">
                                    <div class="bg-accent1 h-[6px] rounded-full mx-[2px]" style="width: <?= $item['percent'] ?>%">
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <!-- Single skill end -->
                    <?php endforeach; ?>

                </div>
                <!-- Column end -->
            <?php } ?>

            <?php
            // Theme_mod Second Culomn skill_items to check.
            $skill_items = get_theme_mod('skill_items2');
            if (count($skill_items) > 0) {
            ?>
                <!-- Column start -->
                <div class="max-w-full lg:max-w-[472px]  w-full only-md:px-7 sm:px-5">
                    <?php
                    $counter = 0;
                    foreach ($skill_items as $item) :
                        $counter++;
                    ?>
                        <!-- Single skill start -->
                        <div class="relative mb-7">
                            <div class="flex justify-between mb-1">
                                <span class="text-lg font-medium text-primary dark:text-white"><?= $item['title'] ?></span>
                                <span class="text-xs font-medium text-white bg-accent1 dark:text-white absolute py-1.5 px-1.5 bottom-6 rounded-sm before:absolute before:content-[''] before:bg-accent1 before:w-5 before:h-5 before:clip-polygon before:top-4 ltr:before:left-2 rtl:before:right-2 before:-z-10 ltr:left-[calc(<?= $item['percent'] ?>%_-_<?= $item['percent'] == 100 ? '30px' : '20px'; ?>)] rtl:right-[calc(<?= $item['percent'] ?>%_-_<?= $item['percent'] == 100 ? '30px' : '20px'; ?>)]"><?= $item['percent'] ?>%</span>
                            </div>
                            <?php if ($item['percent']) { ?>
                                <div class="w-full bg-gray-200 rounded-full h-[10px] dark:bg-gray-700 flex items-center">
                                    <div class="bg-accent1 h-[6px] rounded-full mx-[2px]" style="width: <?= $item['percent'] ?>%">
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <!-- Single skill end -->
                    <?php endforeach; ?>

                </div>
                <!-- Column end -->
            <?php } ?>
        </div>
        <!-- skill wrapper end -->
    </div>
</section>
<!--  Skill section end -->
