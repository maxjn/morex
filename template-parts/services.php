<!-- Services section start -->
<section class="lg:py-[100px] md:py-[70px]" id="services">
    <div class="container mx-auto">
        <!-- Section title start -->
        <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
            <div class="max-w-full lg:max-w-[580px]  w-full">
                <span
                    class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]"><?= get_theme_mod('services_sub_title_text') ?></span>
                <h2
                    class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">
                    <?= get_theme_mod('services_title_text') ?></h2>
            </div>
            <div class="md:grow">
                <p class="text-[#636363] text-[17px] leading-[28px] lg:max-w-[472px] w-full dark:text-slate-200">
                    <?= get_theme_mod('services_description_text') ?></p>
            </div>
        </div>
        <!-- Section title end -->

        <!-- Services list start -->
        <div class="grid gap-[30px] lg:grid-cols-3 grid-cols-1 only-md:grid-cols-2">
            <?php
            // Theme_mod services to check.
            $services = get_theme_mod('services_contents');
            $counter = 0;
            foreach ($services as $service) :
                $counter++;

            ?>
            <!-- Single service start -->
            <div
                class="shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_150px_0_rgba(196,206,213,0.7)]  dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] hover:translate-y-[-10px] transition duration-500">
                <div class="overflow-hidden px-[30px] xl:px-[40px] lg:pt-[50px] md:pt-[40px] pb-[40px] ">
                    <span
                        class="bg-[#<?= $service['service_color'] ?>] text-white w-[70px] h-[70px] lg:w-[93px] lg:h-[93px] flex items-center justify-center rounded-full service-shape before:bg-[#<?= $service['service_color'] ?>] before:opacity-[0.26]">
                        <li class="<?= $service['service_icon'] ?> text-[50px]"></li>
                    </span>
                    <h3
                        class="text-primary dark:text-white text-[20px] xl:text-[25px] font-bold font-heebo mt-[20px] mb-[15px]">
                        <?= $service['service_title'] ?></h3>
                    <p class="text-[17px] text-[#636363] dark:text-slate-200"><?= $service['service_description'] ?>
                    </p>
                    <a href="<?= $service['service_btn_text'] ?>"
                        class="link-button text-[#<?= $service['service_color'] ?>] before:bg-[#<?= $service['service_color'] ?>] mt-[15px] hover:text-[#333] dark:hover:text-white"><?= $service['service_btn_text'] ?></a>
                </div>
            </div>
            <!-- Single service end -->
            <?php endforeach; ?>
        </div>
        <!-- Services list end -->

    </div>
</section>
<!-- Services section end -->
