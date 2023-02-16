<!-- About me section start -->
<section class="bg-cover bg-no-repeat bg-center bg-[url('../images/about-me-bg.png')] bg-[#ECF1F6] dark:bg-dark_primary_bg dark:bg-none py-[70px] lg:py-[100px] dark:border-t dark:border-b dark:border-dark_accent1" id="about">
    <div class="container mx-auto">
        <div class="flex justify-between sm:flex-wrap sm:flex-col-reverse">
            <div class="w-full lg:max-w-[550px]">
                <div>
                    <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]"><?= get_theme_mod('about_sub_title_text') ?></span>
                    <h2 class="text-[24px] only-md:text-[32px] lg:text-[48px] font-bold font-heebo leading-[36px] lg:leading-[58px] text-[#000248] dark:text-white ltr:lg:pr-[50px] rtl:lg:pl-[50px]">
                        <?= get_theme_mod('about_title_text') ?></h2>
                </div>
                <div class="mt-[30px]">
                    <h3 class="text-accent1 text-[20px] lg:text-[24px] font-medium ">
                        <?= get_theme_mod('about_info_title_text') ?></h3>
                    <ul class="flex justify-between flex-wrap mt-[18px]">
                        <?php
                        // Theme_mod infos to check.
                        $infos = get_theme_mod('about_informations');
                        $counter = 0;
                        foreach ($infos as $info) :
                            $counter++;

                        ?>
                            <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">
                                <?= $info['info'] ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php if (get_theme_mod('about_info_btn_text')) { ?>
                        <a href="<?= get_theme_mod('about_info_btn_url') ?>" class="btn solid-btn text-accent1 mt-[35px] inline-block"><?= get_theme_mod('about_info_btn_text') ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="sm:mb-[50px]">
                <?php if (get_theme_mod('about_image')) {
                    $image_url = wp_get_attachment_url(get_theme_mod('about_image'));
                ?>
                    <div class="relative">
                        <img class="relative z-10 sm:mx-auto" src="<?= $image_url ?>" alt="">
                        <span class="absolute sm:w-[100px] sm:h-[100px] only-md:w-[150px] only-md:h-[150px] lg:w-[200px] lg:h-[200px] xl:w-[250px] xl:h-[250px] border-[8px] lg:border-[13px] border-accent1 rounded-full xs:bottom-[-25%] sm:bottom-[-12%] bottom-[-18%] ltr:sm:left-[3%] ltr:left-[-18%] rtl:sm:right-[3%] rtl:right-[-18%] animateUpDown"></span>
                    </div>
                <?php } ?>
                <div class="text-center mt-[30px]">
                    <h4 class="font-heebo text-[50px] lg:text-[80px] font-bold leading-[1] text-white title-stroke">
                        <?= get_theme_mod('about_image_top_text') ?></h4>
                    <span class="font-bold sm:text-[20px] only-md:text-[24px] lg:text-[30px] font-heebo text-primary dark:text-white"><?= get_theme_mod('about_image_bottom_text') ?></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About me section end -->
