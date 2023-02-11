<!-- Blog section start -->
<section class="pb-[70px] lg:pb-[100px]" id="blog">
    <div class="container mx-auto">
        <!-- Section title start -->
        <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
            <div class="max-w-full lg:max-w-[580px]  w-full">
                <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">آخرین
                    های
                    وبلاگ</span>
                <h2
                    class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">
                    Blog Latest of News
                    tricks & Updates</h2>
            </div>
            <div class="md:grow">
                <p class="text-[#636363] dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full">
                    چاپگرها و
                    متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد
                    نیاز و کاربردهای
                    متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
            </div>
        </div>
        <!-- Section title end -->

        <div class="grid grid-cols-1 only-md:grid-cols-2 lg:grid-cols-3 gap-[30px]">


            <!-- single blog  start -->
            <div
                class="blog__card shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_100px_0_rgba(196,206,213,0.7)] dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] transition duration-500">
                <a class="block popup-modal--open" href="#">
                    <!-- blog image -->
                    <div class="overflow-hidden">
                        <span class="block">
                            <img class="blog__thumb w-full transition duration-300"
                                src="<?= get_template_directory_uri() ?>/assets/images/blog/1.png" alt="">
                        </span>
                    </div>
                    <!-- blog image end -->

                    <!-- blog content -->
                    <div class="p-[30px]">
                        <div class="mb-[15px]">
                            <span
                                class="bg-accent1_rgb text-[14px] uppercase py-1 px-[6px] text-accent1 dark:text-white dark:bg-accent1 hover:bg-accent1 hover:text-white transition-all duration-300">طراحی
                                UI/UX</span>
                        </div>
                        <div>
                            <h3 class="text-[25px] leading-7 font-heebo font-bold">
                                <span
                                    class="text-primary hover:text-accent1 dark:text-white dark:hover:text-accent1 transition-all duration-300">لورم
                                    عنوان و تیتر با موضوع سفارشی</span>
                            </h3>
                            <p class="mt-[15px] text-paragraph dark:text-slate-200 text-[17px]">لورم ایپسوم متن
                                ساختگی با تولید
                                سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها </p>
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
                                        src="<?= get_template_directory_uri() ?>/assets/images/blog/blog-details-1.png"
                                        alt="Blog details">
                                </div>
                                <h4 class="text-[25px] lg:text-[32px] leading-7 font-heebo font-bold mt-8">
                                    <span class="text-primary dark:text-white">لورم عنوان و تیتر با موضوع
                                        سفارشی</span>
                                </h4>
                                <div class="blog__content mt-5 text-[17px] leading-7 dark:text-slate-300">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                        طراحان گرافیک است.
                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی
                                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                        کتابهای زیادی در شصت و سه
                                        درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                        نرم افزارها شناخت بیشتری
                                        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                                        فارسی ایجاد کرد.</p>
                                    <p class="mt-5"> کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                        کتابهای زیادی در شصت و سه
                                        درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                        نرم افزارها شناخت بیشتری
                                        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                                        فارسی ایجاد کرد.</p>

                                    <blockquote
                                        class="p-4 my-4 bg-gray-50 ltr:border-l-4 rtl:border-r-4 border-gray-300 dark:border-dark_accent1 dark:bg-dark_accent1 dark:text-white text-xl">
                                        <svg aria-hidden="true" class="w-10 h-10 text-gray-400 dark:text-gray-600"
                                            viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                                                fill="currentColor" />
                                        </svg>
                                        <p>"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                            استفاده از طراحان گرافیک است.
                                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                            برای شرایط فعلی."</p>
                                    </blockquote>
                                </div>

                                <!-- Blog comment box start -->
                                <div class="mt-10">
                                    <h4 class="text-primary mb-5 dark:text-white">(2) کامنت</h4>
                                    <div class="mt-7">
                                        <!-- Single comment start -->
                                        <div class="flex gap-4 border-b border-gray-300 pb-7 dark:text-slate-300">
                                            <div class="w-20">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/blog/avatar.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <div class="flex items-center gap-3">
                                                    <h6 class="text-primary font-heebo dark:text-white">طاها وطن
                                                        دوست</h6>
                                                    <span>18 بهمن 1401</span>
                                                </div>
                                                <p class="py-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                    صنعت چاپ و با استفاده از
                                                    طراحان گرافیک است.</p>
                                                <button
                                                    class="text-accent1 font-heebo font-bold text-[18px] transition-all duration-300 hover:text-primary bg-transparent">بازخورد</button>
                                            </div>
                                        </div>
                                        <!-- Single comment end -->

                                        <!-- Single comment start -->
                                        <div class="flex gap-4 pt-7 pl-20 dark:text-slate-300">
                                            <div class="w-20">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/blog/avatar-2.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <div class="flex items-center gap-3">
                                                    <h6 class="text-primary font-heebo dark:text-white">ابراهیم
                                                        بابایی</h6>
                                                    <span>17 بهمن 1401</span>
                                                </div>
                                                <p class="py-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                    صنعت چاپ و با استفاده از
                                                    طراحان گرافیک است.</p>
                                                <button
                                                    class="text-accent1 font-heebo font-bold text-[18px] transition-all duration-300 hover:text-primary bg-transparent">بازخورد</button>
                                            </div>
                                        </div>
                                        <!-- Single comment end -->
                                    </div>
                                </div>
                                <!-- Blog comment box end -->

                                <form action="#" class="mt-10">
                                    <h4 class="text-primary mb-5 dark:text-white">قراردادن بازخورد</h4>
                                    <div class="grid grid-cols-2 gap-7">
                                        <div>
                                            <input
                                                class="w-full bg-white rounded px-5 py-2 h-11 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600"
                                                type="text" name="name" placeholder="نام شما">
                                        </div>
                                        <div>
                                            <input
                                                class="w-full bg-white rounded px-5 py-2 h-11 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600"
                                                type="email" name="email" placeholder="ایمیل شما">
                                        </div>
                                        <div class="col-span-2">
                                            <textarea
                                                class="w-full bg-white rounded px-5 py-2 h-40 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600"
                                                name="message" id="" cols="30" rows="10"
                                                placeholder="متن پیام"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn--small solid-btn mt-7">ارسال نظر</button>
                                </form>
                            </div>
                            <!-- Modal main content end -->
                        </div>
                    </div>
                </div>
                <!-- Blog popup end -->

            </div>
            <!-- single blog end -->

            <!-- single blog  start -->
            <div
                class="blog__card shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_100px_0_rgba(196,206,213,0.7)] dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] transition duration-500">
                <a class="block popup-modal--open" href="#">
                    <!-- blog image -->
                    <div class="overflow-hidden">
                        <span class="block">
                            <img class="blog__thumb w-full transition duration-300"
                                src="<?= get_template_directory_uri() ?>/assets/images/blog/2.png" alt="">
                        </span>
                    </div>
                    <!-- blog image end -->

                    <!-- blog content -->
                    <div class="p-[30px]">
                        <div class="mb-[15px]">
                            <span
                                class="bg-accent1_rgb text-[14px] uppercase py-1 px-[6px] text-accent1 dark:text-white dark:bg-accent1 hover:bg-accent1 hover:text-white transition-all duration-300">HTML
                                و CSS</span>
                        </div>
                        <div>
                            <h3 class="text-[25px] leading-7 font-heebo font-bold">
                                <span
                                    class="text-primary hover:text-accent1 dark:text-white dark:hover:text-accent1 transition-all duration-300"
                                    href="#">چگونگی ایجاد وبسایت با استفاده از HTML و CSS</span>
                            </h3>
                            <p class="mt-[15px] text-paragraph dark:text-slate-200 text-[17px]">لورم ایپسوم متن
                                ساختگی با تولید
                                سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها </p>
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
                                        src="<?= get_template_directory_uri() ?>/assets/images/blog/blog-details-1.png"
                                        alt="Blog details">
                                </div>
                                <h4 class="text-[25px] lg:text-[32px] leading-7 font-heebo font-bold mt-8">
                                    <span class="text-primary dark:text-white">لورم عنوان و تیتر با موضوع
                                        سفارشی</span>
                                </h4>
                                <div class="blog__content mt-5 text-[17px] leading-7 dark:text-slate-300">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                        طراحان گرافیک است.
                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی
                                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                        کتابهای زیادی در شصت و سه
                                        درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                        نرم افزارها شناخت بیشتری
                                        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                                        فارسی ایجاد کرد.</p>
                                    <p class="mt-5"> کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                        کتابهای زیادی در شصت و سه
                                        درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                        نرم افزارها شناخت بیشتری
                                        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                                        فارسی ایجاد کرد.</p>

                                    <blockquote
                                        class="p-4 my-4 bg-gray-50 ltr:border-l-4 rtl:border-r-4 border-gray-300 dark:border-dark_accent1 dark:bg-dark_accent1 dark:text-white text-xl">
                                        <svg aria-hidden="true" class="w-10 h-10 text-gray-400 dark:text-gray-600"
                                            viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                                                fill="currentColor" />
                                        </svg>
                                        <p>"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                            استفاده از طراحان گرافیک است.
                                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                            برای شرایط فعلی."</p>
                                    </blockquote>
                                </div>

                                <!-- Blog comment box start -->
                                <div class="mt-10">
                                    <h4 class="text-primary mb-5 dark:text-white">(2) کامنت</h4>
                                    <div class="mt-7">
                                        <!-- Single comment start -->
                                        <div class="flex gap-4 border-b border-gray-300 pb-7 dark:text-slate-300">
                                            <div class="w-20">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/blog/avatar.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <div class="flex items-center gap-3">
                                                    <h6 class="text-primary font-heebo dark:text-white">طاها وطن
                                                        دوست</h6>
                                                    <span>18 بهمن 1401</span>
                                                </div>
                                                <p class="py-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                    صنعت چاپ و با استفاده از
                                                    طراحان گرافیک است.</p>
                                                <button
                                                    class="text-accent1 font-heebo font-bold text-[18px] transition-all duration-300 hover:text-primary bg-transparent">بازخورد</button>
                                            </div>
                                        </div>
                                        <!-- Single comment end -->

                                        <!-- Single comment start -->
                                        <div class="flex gap-4 pt-7 pl-20 dark:text-slate-300">
                                            <div class="w-20">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/blog/avatar-2.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <div class="flex items-center gap-3">
                                                    <h6 class="text-primary font-heebo dark:text-white">ابراهیم
                                                        بابایی</h6>
                                                    <span>17 بهمن 1401</span>
                                                </div>
                                                <p class="py-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                    صنعت چاپ و با استفاده از
                                                    طراحان گرافیک است.</p>
                                                <button
                                                    class="text-accent1 font-heebo font-bold text-[18px] transition-all duration-300 hover:text-primary bg-transparent">بازخورد</button>
                                            </div>
                                        </div>
                                        <!-- Single comment end -->
                                    </div>
                                </div>
                                <!-- Blog comment box end -->

                                <form action="#" class="mt-10">
                                    <h4 class="text-primary mb-5 dark:text-white">قراردادن بازخورد</h4>
                                    <div class="grid grid-cols-2 gap-7">
                                        <div>
                                            <input
                                                class="w-full bg-white rounded px-5 py-2 h-11 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600"
                                                type="text" name="name" placeholder="نام شما">
                                        </div>
                                        <div>
                                            <input
                                                class="w-full bg-white rounded px-5 py-2 h-11 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600"
                                                type="email" name="email" placeholder="ایمیل شما">
                                        </div>
                                        <div class="col-span-2">
                                            <textarea
                                                class="w-full bg-white rounded px-5 py-2 h-40 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600"
                                                name="message" id="" cols="30" rows="10"
                                                placeholder="متن پیام"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn--small solid-btn mt-7">ارسال نظر</button>
                                </form>
                            </div>
                            <!-- Modal main content end -->
                        </div>
                    </div>
                </div>
                <!-- Blog popup end -->

            </div>
            <!-- single blog end -->

            <!-- single blog  start -->
            <div
                class="blog__card shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_100px_0_rgba(196,206,213,0.7)] dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] transition duration-500">
                <a class="block popup-modal--open" href="#">
                    <!-- blog image -->
                    <div class="overflow-hidden">
                        <span class="block">
                            <img class="blog__thumb w-full transition duration-300"
                                src="<?= get_template_directory_uri() ?>/assets/images/blog/3.png" alt="">
                        </span>
                    </div>
                    <!-- blog image end -->

                    <!-- blog content -->
                    <div class="p-[30px]">
                        <div class="mb-[15px]">
                            <span
                                class="bg-accent1_rgb text-[14px] uppercase py-1 px-[6px] text-accent1 dark:text-white dark:bg-accent1 hover:bg-accent1 hover:text-white transition-all duration-300">شاپیفای</span>
                        </div>
                        <div>
                            <h3 class="text-[25px] leading-7 font-heebo font-bold">
                                <span
                                    class="text-primary hover:text-accent1 dark:text-white dark:hover:text-accent1 transition-all duration-300">
                                    چگونگی ایجاد یک تیم کارآمد و مفید در کسب و کار</span>
                            </h3>
                            <p class="mt-[15px] text-paragraph dark:text-slate-200 text-[17px]">لورم ایپسوم متن
                                ساختگی با تولید
                                سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها </p>
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
                                        src="<?= get_template_directory_uri() ?>/assets/images/blog/blog-details-1.png"
                                        alt="Blog details">
                                </div>
                                <h4 class="text-[25px] lg:text-[32px] leading-7 font-heebo font-bold mt-8">
                                    <span class="text-primary dark:text-white">لورم عنوان و تیتر با موضوع
                                        سفارشی</span>
                                </h4>
                                <div class="blog__content mt-5 text-[17px] leading-7 dark:text-slate-300">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                        طراحان گرافیک است.
                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی
                                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                        کتابهای زیادی در شصت و سه
                                        درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                        نرم افزارها شناخت بیشتری
                                        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                                        فارسی ایجاد کرد.</p>
                                    <p class="mt-5"> کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                        کتابهای زیادی در شصت و سه
                                        درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                        نرم افزارها شناخت بیشتری
                                        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                                        فارسی ایجاد کرد.</p>

                                    <blockquote
                                        class="p-4 my-4 bg-gray-50 ltr:border-l-4 rtl:border-r-4 border-gray-300 dark:border-dark_accent1 dark:bg-dark_accent1 dark:text-white text-xl">
                                        <svg aria-hidden="true" class="w-10 h-10 text-gray-400 dark:text-gray-600"
                                            viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                                                fill="currentColor" />
                                        </svg>
                                        <p>"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                            استفاده از طراحان گرافیک است.
                                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                            برای شرایط فعلی."</p>
                                    </blockquote>
                                </div>

                                <!-- Blog comment box start -->
                                <div class="mt-10">
                                    <h4 class="text-primary mb-5 dark:text-white">(2) کامنت</h4>
                                    <div class="mt-7">
                                        <!-- Single comment start -->
                                        <div class="flex gap-4 border-b border-gray-300 pb-7 dark:text-slate-300">
                                            <div class="w-20">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/blog/avatar.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <div class="flex items-center gap-3">
                                                    <h6 class="text-primary font-heebo dark:text-white">طاها وطن
                                                        دوست</h6>
                                                    <span>18 بهمن 1401</span>
                                                </div>
                                                <p class="py-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                    صنعت چاپ و با استفاده از
                                                    طراحان گرافیک است.</p>
                                                <button
                                                    class="text-accent1 font-heebo font-bold text-[18px] transition-all duration-300 hover:text-primary bg-transparent">بازخورد</button>
                                            </div>
                                        </div>
                                        <!-- Single comment end -->

                                        <!-- Single comment start -->
                                        <div class="flex gap-4 pt-7 pl-20 dark:text-slate-300">
                                            <div class="w-20">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/blog/avatar-2.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <div class="flex items-center gap-3">
                                                    <h6 class="text-primary font-heebo dark:text-white">ابراهیم
                                                        بابایی</h6>
                                                    <span>17 بهمن 1401</span>
                                                </div>
                                                <p class="py-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                    صنعت چاپ و با استفاده از
                                                    طراحان گرافیک است.</p>
                                                <button
                                                    class="text-accent1 font-heebo font-bold text-[18px] transition-all duration-300 hover:text-primary bg-transparent">بازخورد</button>
                                            </div>
                                        </div>
                                        <!-- Single comment end -->
                                    </div>
                                </div>
                                <!-- Blog comment box end -->

                                <form action="#" class="mt-10">
                                    <h4 class="text-primary mb-5 dark:text-white">قراردادن بازخورد</h4>
                                    <div class="grid grid-cols-2 gap-7">
                                        <div>
                                            <input
                                                class="w-full bg-white rounded px-5 py-2 h-11 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600"
                                                type="text" name="name" placeholder="نام شما">
                                        </div>
                                        <div>
                                            <input
                                                class="w-full bg-white rounded px-5 py-2 h-11 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600"
                                                type="email" name="email" placeholder="ایمیل شما">
                                        </div>
                                        <div class="col-span-2">
                                            <textarea
                                                class="w-full bg-white rounded px-5 py-2 h-40 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600"
                                                name="message" id="" cols="30" rows="10"
                                                placeholder="متن پیام"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn--small solid-btn mt-7">ارسال نظر</button>
                                </form>
                            </div>
                            <!-- Modal main content end -->
                        </div>
                    </div>
                </div>
                <!-- Blog popup end -->

            </div>
            <!-- single blog end -->

        </div>
    </div>
</section>
<!-- Blog section end -->