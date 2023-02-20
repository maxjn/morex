<!-- Contact form section start -->
<section
    class="py-[70px] lg:py-[100px] mb-[270px] bg-cover bg-no-repeat bg-center bg-[url('../images/contact-bg.html')] bg-[#ECF1F6] dark:bg-[url('../images/contact-bg-dark.html')] dark:bg-dark_primary_bg"
    id="contact">
    <div class="container mx-auto">
        <!-- Form wrapper start -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[30px]">
            <div>
                <!-- Section title -->
                <div class="mb-[55px] md:text-center">
                    <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">
                        <?= get_theme_mod('contact_sub_title_text') ?> </span>
                    <h2
                        class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">
                        <?= get_theme_mod('contact_title_text') ?>
                    </h2>
                    <p class="text-[#636363] dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full">
                        <?= get_theme_mod('contact_description') ?></p>
                </div>
                <!-- Section title end -->

                <!-- from inner start-->
                <?php
                if (get_theme_mod('contact_form_id')) {
                    $form_id = get_theme_mod('contact_form_id');
                    echo  do_shortcode('[contact-form-7 id="' . $form_id . '" title="فرم تماس"]');
                }
                ?>
                <!-- from inner end -->
            </div>

            <div
                class="ltr:only-md:pl-[30px] ltr:lg:pl-[50px] rtl:only-md:pr-[30px] rtl:lg:pr-[50px] mt-[30px] lg:mt-[150px] md:flex md:gap-[30px] md:flex-wrap">
                <?php
                // Theme_mod  Contacts to check.
                $Contacts = get_theme_mod('contact_items');
                if ($Contacts) {
                    $counter = 0;
                    foreach ($Contacts as $contact) :
                        $counter++;
                ?>
                <!-- Single contact info start -->
                <div class="flex items-center <?= $counter != 1 ? 'lg:mt-7' : ''; ?> ">
                    <div
                        class=" w-[50px] h-[50px] lg:w-[70px] lg:h-[70px] bg-accent1 text-white flex items-center rounded-full justify-center text-[40px]">
                        <li class="<?= $contact['icon'] ?> "></li>
                    </div>
                    <div class="ltr:pl-6 rtl:pr-6">
                        <h3 class="text-[28px] md:text-[22px] font-heebo font-bold text-primary dark:text-white">
                            <?= $contact['title'] ?></h3>
                        <span class="text-primary  dark:text-slate-200 text-[22px] md:text-[18px] mt-5">
                            <?= $contact['info'] ?>
                        </span>
                    </div>
                </div>
                <!-- Single contact info end -->
                <?php endforeach;
                }
                ?>
            </div>
        </div>
        <!-- Form wrapper end -->

        <!-- Google map start  -->
        <div class="mb-[-275px] pt-[70px] lg:pt-[100px]">
            <div style="width: 100%">
                <?= get_theme_mod('contact_map_iframe')  ?>
            </div>
        </div>
        <!-- Google map send -->

    </div>
</section>
<!-- Contact form section end -->
