<?php
// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}

?>
<!--  Resume section start -->
<section class="lg:py-[100px] md:py-[70px]" id="resume">
    <div class="container mx-auto">
        <!-- Section title start -->
        <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
            <div class="max-w-full lg:max-w-[575px]  w-full">
                <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]"><?= get_theme_mod('resume_sub_title_text') ?></span>
                <h2 class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">
                    <?= get_theme_mod('resume_title_text') ?>
                </h2>
            </div>
            <div class="md:grow">
                <p class="text-[#636363] dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full">
                    <?= get_theme_mod('resume_description') ?></p>
            </div>
        </div>
        <!-- Section title end -->

        <!-- Resume wrapper start -->
        <div class="flex flex-wrap">
            <?php
            // Theme_mod First Culomn resume_items to check.
            $resume_items = get_theme_mod('resume_items');
            if (count($resume_items) > 0) {
            ?>
                <!-- Items -->
                <div class="w-full max-w-[50%] sm:max-w-full flex-grow">
                    <div class="relative ltr:pl-[30px] rtl:pr-[30px]">
                        <!-- border line -->
                        <div class="absolute w-[1px] ltr:left-0 rtl:right-0 top-[10px] bottom-[5px] bg-accent1">
                        </div>
                        <!-- border line  end-->
                        <?php
                        $counter = 0;
                        foreach ($resume_items as $item) :
                            $counter++;
                        ?>
                            <!-- Single resume start -->
                            <div class="flex ltr:pr-[50px] ltr:sm:pr-[0] ltr:lg:pr-[70px rtl:pl-[50px] rtl:sm:pl-[0] rtl:lg:pl-[70px relative <?= $counter != 1 ? 'mt-[40px]' : ''; ?> ">
                                <span class="absolute w-[20px] h-[20px] ltr:left-[-40px] rtl:right-[-40px] top-[10px] bg-accent1 rounded-full z-10 before:absolute before:bg-white before:w-[16px] before:h-[16px] before:rounded-full ltr:before:left-[2px] rtl:before:right-[2px] before:top-[2px]"></span>
                                <div class="w-[70px] h-[70px]">
                                    <span class="w-[50px] h-[50px] bg-accent1 text-[25px] text-white flex items-center rounded-full justify-center">
                                        <li class="<?= $item['icon'] ?>"></li>
                                    </span>
                                </div>
                                <div class="flex-grow ltr:pl-[15px] rtl:pr-[15px]">
                                    <div class="flex items-center only-md:flex-col only-md:items-start 2xs:flex-col 2xs:items-start">
                                        <?php if ($item['title']) { ?>
                                            <h3 class="font-heebo 2xs:text-[18px] text-[20px] lg:text-[25px] text-primary dark:text-white">
                                                <?= $item['title'] ?></h3>
                                        <?php } ?>
                                        <?php if ($item['subtitle']) { ?>
                                            <span class="bg-accent1 text-white text-[13px] rounded-[30px] px-[15px] py-[5px] uppercase ltr:ml-[15px] rtl:mr-[15px] ltr:only-md:ml-0 only-md:my-[5px] ltr:2xs:ml-0 rtl:only-md:m-0 rtl:2xs:mr-0 2xs:my-[5px] text-center"><?= $item['subtitle'] ?></span>
                                        <?php } ?>
                                    </div>
                                    <p class="text-paragraph dark:text-slate-200 mt-[10px] text-[17px]">
                                        <?= $item['description'] ?></p>
                                    <?php if ($item['year']) { ?>
                                        <span class="text-[17px] font-medium text-accent1 relative ltr:pl-[20px] rtl:pr-[20px] before:absolute before:bg-accent1 before:w-[7px] before:h-[7px] ltr:before:left-0 rtl:before:right-0 before:top-[50%] before:translate-y-[-50%] mt-[20px] block"><?= $item['year'] ?></span>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- Single resume end -->
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Items -->
            <?php } ?>

            <?php
            // Theme_mod Second Culomn resume_items to check.
            $resume_items = get_theme_mod('resume_items2');
            if (count($resume_items) > 0) {
            ?>
                <!-- Items -->
                <div class="w-full max-w-[50%] sm:max-w-full flex-grow">
                    <div class="relative ltr:pl-[30px] rtl:pr-[30px]">
                        <!-- border line -->
                        <div class="absolute w-[1px] ltr:left-0 rtl:right-0 top-[10px] bottom-[5px] bg-accent1">
                        </div>
                        <!-- border line  end-->
                        <?php
                        $counter = 0;
                        foreach ($resume_items as $item) :
                            $counter++;
                        ?>
                            <!-- Single resume start -->
                            <div class="flex ltr:pr-[50px] ltr:sm:pr-[0] ltr:lg:pr-[70px rtl:pl-[50px] rtl:sm:pl-[0] rtl:lg:pl-[70px relative <?= $counter != 1 ? 'mt-[40px]' : ''; ?> ">
                                <span class="absolute w-[20px] h-[20px] ltr:left-[-40px] rtl:right-[-40px] top-[10px] bg-accent1 rounded-full z-10 before:absolute before:bg-white before:w-[16px] before:h-[16px] before:rounded-full ltr:before:left-[2px] rtl:before:right-[2px] before:top-[2px]"></span>
                                <div class="w-[70px] h-[70px]">
                                    <span class="w-[50px] h-[50px] bg-accent1 text-[25px] text-white flex items-center rounded-full justify-center">
                                        <li class="<?= $item['icon'] ?>"></li>
                                    </span>
                                </div>
                                <div class="flex-grow ltr:pl-[15px] rtl:pr-[15px]">
                                    <div class="flex items-center only-md:flex-col only-md:items-start 2xs:flex-col 2xs:items-start">
                                        <?php if ($item['title']) { ?>
                                            <h3 class="font-heebo 2xs:text-[18px] text-[20px] lg:text-[25px] text-primary dark:text-white">
                                                <?= $item['title'] ?></h3>
                                        <?php } ?>
                                        <?php if ($item['subtitle']) { ?>
                                            <span class="bg-accent1 text-white text-[13px] rounded-[30px] px-[15px] py-[5px] uppercase ltr:ml-[15px] rtl:mr-[15px] ltr:only-md:ml-0 only-md:my-[5px] ltr:2xs:ml-0 rtl:only-md:m-0 rtl:2xs:mr-0 2xs:my-[5px] text-center"><?= $item['subtitle'] ?></span>
                                        <?php } ?>
                                    </div>
                                    <p class="text-paragraph dark:text-slate-200 mt-[10px] text-[17px]">
                                        <?= $item['description'] ?></p>
                                    <?php if ($item['year']) { ?>
                                        <span class="text-[17px] font-medium text-accent1 relative ltr:pl-[20px] rtl:pr-[20px] before:absolute before:bg-accent1 before:w-[7px] before:h-[7px] ltr:before:left-0 rtl:before:right-0 before:top-[50%] before:translate-y-[-50%] mt-[20px] block"><?= $item['year'] ?></span>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- Single resume end -->
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Items -->
            <?php } ?>

        </div>
        <!-- Resume wrapper end -->
    </div>
</section>
<!--  Resume section end -->
