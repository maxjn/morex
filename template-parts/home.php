<!-- Hero section start -->
<section class="bg-cover bg-no-repeat bg-center sm:h-full only-md:h-screen lg:min-h-screen flex justify-center items-center overflow-hidden bg-[url('../images/hero-bg-img.png')] bg-[#DAEEF1] dark:bg-[url('../images/hero-bg-img-dark.png')] dark:bg-dark_primary_bg dark:border-b dark:border-dark_accent1" id="home">
    <div class="container mx-auto flex sm:flex-col items-center justify-center lg:mt-[40px] only-md:mt-[40px] sm:pt-[100px] sm:pb-[70px]">
        <!-- Image Container Start -->

        <div class="lg:max-w-[40%] sm:max-w-[60%] xs:max-w-[85%] only-md:max-w-[40%] flex justify-end">
            <?php
            $light_image = false;
            $dark_image = false;

            if (get_theme_mod('home_main_image_light')) {
                $light_image = true;
                $light_url = wp_get_attachment_url(get_theme_mod('home_main_image_light'));
            }
            if (get_theme_mod('home_main_image_dark')) {
                $dark_image = true;
                $dark_url = wp_get_attachment_url(get_theme_mod('home_main_image_dark'));
            }

            if ($light_image || $dark_image) {

            ?>
                <div class="relative only-xl:max-w-[70%]">
                    <?php

                    if ($light_image && $dark_image) {
                        echo '<img class="hidden dark:block" src="' . $dark_url . '" alt="">';
                        echo '<img class="dark:hidden" src="' . $light_url . '" alt="">';
                    } else {
                        echo '<img src="' . ($light_image ? $light_url : $dark_url) . '" alt="">';
                    }

                    if (get_theme_mod('home_icon1_image')) {
                        $icon1_url = wp_get_attachment_url(get_theme_mod('home_icon1_image'));

                    ?>
                        <span class="absolute top-[100px] lg:top-[210px] right-[-20px] only-md:right-[-10px] only-xl:max-w-[65px] lg:max-w-[80px] xl:max-w-[105px] sm:max-w-[50px] only-md:max-w-[70px] animateUpDown"><img src="<?= $icon1_url ?>" alt=""></span>
                    <?php
                    }
                    if (get_theme_mod('home_icon2_image')) {
                        $icon2_url = wp_get_attachment_url(get_theme_mod('home_icon2_image'));

                    ?>
                        <span class="absolute top-[80px] left-[-40px] md:left-[-10px] only-xl:max-w-[65px] lg:max-w-[80px] xl:max-w-[105px] sm:max-w-[50px] only-md:max-w-[70px] animateUpDown"><img src="<?= $icon2_url ?>" alt=""></span>
                    <?php }
                    if (get_theme_mod('home_counter_number_text')) {
                    ?>


                        <div class="flex items-center absolute bottom-0 right-0 bg-white dark:bg-dark_accent1 rounded-[50px] px-[15px] py-[15px] shadow-[0_0_50px_0_rgba(196,206,213,0.2)] dark:shadow-[0_0_50px_0_rgba(0,0,0,0.2)]">
                            <div class="text-accent1 w-[45px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                            </div>
                            <div class="pl-[10px] pr-[15px]">
                                <span class="block text-[20px] lg:text-[26px] font-bold text-primary dark:text-white font-heebo leading-[1]"><?= get_theme_mod('home_counter_number_text') ?></span>
                                <span class="block text-paragraph dark:text-slate-200 text-[17px]"><?= get_theme_mod('home_counter_label_text') ?></span>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            <?php
            }
            ?>
        </div>
        <!-- Image Container End -->

        <div class="ltr:xl:pl-[95px] ltr:lg:pl-[50px] ltr:only-md:pl-[40px] rtl:xl:pr-[95px] rtl:lg:pr-[50px] rtl:only-md:pr-[40px] flex-grow sm:mt-[30px] sm:text-center">
            <span class="text-accent1 text-[24px] font-semibold italic pb-[5px]"><?= get_theme_mod('home_top_text') ?></span>
            <h2 class="lg:text-[60px] only-md:text-[40px] sm:text-[28px] font-bold font-heebo text-heading dark:text-white">
                <?= get_theme_mod('home_middle_text') ?></h2>
            <h3 class="font-heebo font-normal text-primary dark:text-white"><?= get_theme_mod('home_bottom_text') ?>
            </h3>
            <p class="lg:text-[20px] md:text-[16px] text-paragraph dark:text-slate-200 lg:mt-[18px] md:mt-[15px]">
                <?= get_theme_mod('home_description_text') ?></p>
            <div class="flex items-center gap-[18px] flex-wrap mt-[30px] sm:justify-center">
                <?php if (get_theme_mod('home_btn_text')) { ?> <a href="<?= get_theme_mod('home_btn_url') ?>" class="btn outline-btn text-accent1 shrink-0"><?= get_theme_mod('home_btn_text') ?></a>
                <?php
                }
                ?>
                <div class="flex items-center flex-wrap gap-[15px] sm:justify-center">
                    <span class="font-heebo lg:text-[22px] md:text-[18px] font-semibold shrink-0 text-primary dark:text-white"><?= get_theme_mod('home_social_text') ?></span>
                    <div class="flex items-center">
                        <?php
                        // Theme_mod social_btns to check.
                        $social_btns = get_theme_mod('home_social_btns');
                        $counter = 0;
                        foreach ($social_btns as $btn) :
                            $counter++;

                        ?>

                            <a href="<?= $btn['home_social_btn_url']; ?>" class="w-[30px] h-[30px] flex items-center justify-center text-accent1 border border-accent1 transition duration-300 hover:bg-accent1 hover:text-white rounded-full<?= ($counter != 1) ? ' ltr:ml-[10px] rtl:mr-[10px]' : ''; ?>">
                                <i class="<?= $btn['home_social_btn_icon']; ?>"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->
