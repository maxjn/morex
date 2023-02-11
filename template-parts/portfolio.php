<!-- Portfolio section start -->
<section
    class="bg-[#EFF3F7] dark:bg-dark_primary_bg pt-[70px] lg:pt-[100px] pb-[40px] lg:pb-[70px] dark:border-t dark:border-b dark:border-dark_accent1"
    id="portfolio">
    <div class="container mx-auto">
        <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
            <div class="max-w-full lg:max-w-[580px]  w-full">
                <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">نمونه
                    کار</span>
                <h2
                    class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">
                    نمونه کار ها و پروژه های انجام شده ی من.
                </h2>
            </div>
            <div class="md:grow">
                <p class="text-[#636363] dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full">
                    چاپگرها و
                    متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد
                    نیاز و کاربردهای
                    متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
            </div>
        </div>

        <!-- Filter portfolio start -->
        <div class="isotope--filter">
            <div class="button-group filters-button-group flex justify-center flex-wrap gap-[30px]">
                <button
                    class="button is-checked text-primary dark:text-white text-[18px] capitalize font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300"
                    data-filter="*">نمایش همه</button>
                <button
                    class="button text-primary dark:text-white text-[18px] capitalize font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300"
                    data-filter=".web">وب دیزاین</button>
                <button
                    class="button text-primary dark:text-white text-[18px] capitalize font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300"
                    data-filter=".graphics">طراحی</button>
                <button
                    class="button text-primary dark:text-white text-[18px] capitalize font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300"
                    data-filter=".development">توسعه</button>
                <button
                    class="button text-primary dark:text-white text-[18px] capitalize font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300"
                    data-filter=".mobile">موبایل اپیکیشن</button>
            </div>
            <div class="portfolio__grid flex mt-[50px] mx-[-15px]">
                <!-- single portfolio start -->
                <div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] web portfolio__parent"
                    data-category="web">
                    <div class="relative overflow-hidden">
                        <a href="#" class="popup-modal--open">
                            <span
                                class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                                <div
                                    class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                                    <span
                                        class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-maximize">
                                            <path
                                                d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                                            </path>
                                        </svg>
                                    </span>
                                    <h3
                                        class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">
                                        Illustration</h3>
                                    <span
                                        class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .</span>
                                </div>
                            </span>
                            <div class="w-full portfolio__image--card">
                                <img class="w-full transition duration-300"
                                    src="<?= get_template_directory_uri() ?>/assets/images/portfolio/1.png" alt="">
                            </div>
                        </a>
                        <!-- Portfolio popup start -->
                        <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                            <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]">
                            </div>
                            <!-- Modal content -->
                            <div
                                class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                                <div
                                    class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                                    <button
                                        class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                    <h2 class="text-accent1 text-center font-bold">
                                        پروژه Illustration
                                    </h2>
                                    <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-file-text">
                                                        <path
                                                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                        </path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                                        <polyline points="10 9 9 9 8 9"></polyline>
                                                    </svg>
                                                </span>
                                                پروژه : &nbsp;
                                                <span class="font-medium"> وبسایت</span>
                                            </p>
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-code">
                                                        <polyline points="16 18 22 12 16 6"></polyline>
                                                        <polyline points="8 6 2 12 8 18"></polyline>
                                                    </svg>
                                                </span>
                                                زبان :&nbsp;
                                                <span class="font-medium">Photoshop, Illustration</span>
                                            </p>
                                        </div>

                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-user">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                        </path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                </span>
                                                کارفرما: &nbsp; <span class="font-medium">اینویتو</span>
                                            </p>
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-external-link">
                                                        <path
                                                            d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                        </path>
                                                        <polyline points="15 3 21 3 21 9"></polyline>
                                                        <line x1="10" y1="14" x2="21" y2="3"></line>
                                                    </svg>
                                                </span>
                                                پیشنمایش :&nbsp;
                                                <span
                                                    class="font-medium transition-all duration-300 ease-in-out hover:text-accent1">
                                                    <a href="https://www.envato.com/" target="_blank"
                                                        rel="noopener noreferrer">www.envato.com</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="dark:text-white font-normal text-[17px]">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                        از طراحان گرافیک است.
                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی
                                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                        کتابهای زیادی در شصت و سه
                                        درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                        نرم افزارها شناخت بیشتری
                                        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                                        فارسی ایجاد کرد.
                                    </p>
                                    <div class="pr-3">
                                        <img class="max-w-full h-auto rounded-xl mt-6 mx-auto"
                                            src="<?= get_template_directory_uri() ?>/assets/images/portfolio/big-1.png"
                                            alt="portfolio image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio popup end -->
                    </div>
                </div>
                <!-- single portfolio end -->

                <!-- single portfolio start -->
                <div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] graphics portfolio__parent"
                    data-category="graphics">
                    <div class="relative overflow-hidden">
                        <a href="#" class="popup-modal--open">
                            <span
                                class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                                <div
                                    class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                                    <span
                                        class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-maximize">
                                            <path
                                                d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                                            </path>
                                        </svg>
                                    </span>
                                    <h3
                                        class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">
                                        React</h3>
                                    <span
                                        class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .</span>
                                </div>
                            </span>
                            <div class="w-full portfolio__image--card">
                                <img class="w-full transition duration-300"
                                    src="<?= get_template_directory_uri() ?>/assets/images/portfolio/2.png" alt="">
                            </div>
                        </a>

                        <!-- Portfolio popup start -->
                        <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                            <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]">
                            </div>
                            <!-- Modal content -->
                            <div
                                class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                                <div
                                    class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                                    <button
                                        class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                    <h2 class="text-accent1 text-center font-bold">
                                        پروژه React
                                    </h2>
                                    <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-file-text">
                                                        <path
                                                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                        </path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                                        <polyline points="10 9 9 9 8 9"></polyline>
                                                    </svg>
                                                </span>
                                                پروژه : &nbsp;
                                                <span class="font-medium"> وبسایت</span>
                                            </p>
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-code">
                                                        <polyline points="16 18 22 12 16 6"></polyline>
                                                        <polyline points="8 6 2 12 8 18"></polyline>
                                                    </svg>
                                                </span>
                                                زبان :&nbsp;
                                                <span class="font-medium">Photoshop, Illustration</span>
                                            </p>
                                        </div>

                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-user">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                        </path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                </span>
                                                کارفرما: &nbsp; <span class="font-medium">اینویتو</span>
                                            </p>
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-external-link">
                                                        <path
                                                            d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                        </path>
                                                        <polyline points="15 3 21 3 21 9"></polyline>
                                                        <line x1="10" y1="14" x2="21" y2="3"></line>
                                                    </svg>
                                                </span>
                                                پیشنمایش :&nbsp;
                                                <span
                                                    class="font-medium transition-all duration-300 ease-in-out hover:text-accent1">
                                                    <a href="https://www.envato.com/" target="_blank"
                                                        rel="noopener noreferrer">www.envato.com</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="dark:text-white font-normal text-[17px]">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                        از طراحان گرافیک است.
                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی
                                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                        کتابهای زیادی در شصت و سه
                                        درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                        نرم افزارها شناخت بیشتری
                                        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                                        فارسی ایجاد کرد.
                                    </p>
                                    <div class="pr-3">
                                        <img class="max-w-full h-auto rounded-xl mt-6 mx-auto"
                                            src="<?= get_template_directory_uri() ?>/assets/images/portfolio/big-2.png"
                                            alt="portfolio image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio popup end -->
                    </div>
                </div>
                <!-- single portfolio end -->

                <!-- single portfolio start -->
                <div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] development portfolio__parent"
                    data-category="development">
                    <div class="relative overflow-hidden">
                        <a href="#" class="popup-modal--open">
                            <span
                                class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                                <div
                                    class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                                    <span
                                        class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-maximize">
                                            <path
                                                d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                                            </path>
                                        </svg>
                                    </span>
                                    <h3
                                        class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">
                                        Next JS</h3>
                                    <span
                                        class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .</span>
                                </div>
                            </span>
                            <div class="w-full portfolio__image--card">
                                <img class="w-full transition duration-300"
                                    src="<?= get_template_directory_uri() ?>/assets/images/portfolio/3.png" alt="">
                            </div>
                        </a>
                        <!-- Portfolio popup start -->
                        <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                            <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]">
                            </div>
                            <!-- Modal content -->
                            <div
                                class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                                <div
                                    class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                                    <button
                                        class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                    <h2 class="text-accent1 text-center font-bold">
                                        پروژه نکست جی اس
                                    </h2>
                                    <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-file-text">
                                                        <path
                                                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                        </path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                                        <polyline points="10 9 9 9 8 9"></polyline>
                                                    </svg>
                                                </span>
                                                پروژه : &nbsp;
                                                <span class="font-medium"> وبسایت</span>
                                            </p>
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-code">
                                                        <polyline points="16 18 22 12 16 6"></polyline>
                                                        <polyline points="8 6 2 12 8 18"></polyline>
                                                    </svg>
                                                </span>
                                                زبان :&nbsp;
                                                <span class="font-medium">Photoshop, Illustration</span>
                                            </p>
                                        </div>

                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-user">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                        </path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                </span>
                                                کارفرما: &nbsp; <span class="font-medium">اینویتو</span>
                                            </p>
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-external-link">
                                                        <path
                                                            d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                        </path>
                                                        <polyline points="15 3 21 3 21 9"></polyline>
                                                        <line x1="10" y1="14" x2="21" y2="3"></line>
                                                    </svg>
                                                </span>
                                                پیشنمایش :&nbsp;
                                                <span
                                                    class="font-medium transition-all duration-300 ease-in-out hover:text-accent1">
                                                    <a href="https://www.envato.com/" target="_blank"
                                                        rel="noopener noreferrer">www.envato.com</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="dark:text-white font-normal text-[17px]">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                        از طراحان گرافیک است.
                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی
                                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                        کتابهای زیادی در شصت و سه
                                        درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                        نرم افزارها شناخت بیشتری
                                        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                                        فارسی ایجاد کرد.
                                    </p>
                                    <div class="pr-3">
                                        <img class="max-w-full h-auto rounded-xl mt-6 mx-auto"
                                            src="<?= get_template_directory_uri() ?>/assets/images/portfolio/big-3.png"
                                            alt="portfolio image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio popup end -->
                    </div>
                </div>
                <!-- single portfolio end -->

                <!-- single portfolio start -->
                <div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] mobile portfolio__parent"
                    data-category="mobile">
                    <div class="relative overflow-hidden">
                        <a href="#" class="popup-modal--open">
                            <span
                                class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                                <div
                                    class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                                    <span
                                        class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-maximize">
                                            <path
                                                d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                                            </path>
                                        </svg>
                                    </span>
                                    <h3
                                        class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">
                                        برنامه نویسی اندروید</h3>
                                    <span
                                        class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .</span>
                                </div>
                            </span>
                            <div class="w-full portfolio__image--card">
                                <img class="w-full transition duration-300"
                                    src="<?= get_template_directory_uri() ?>/assets/images/portfolio/4.png" alt="">
                            </div>
                        </a>

                        <!-- Portfolio popup start -->
                        <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                            <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]">
                            </div>
                            <!-- Modal content -->
                            <div
                                class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                                <div
                                    class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                                    <button
                                        class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                    <h2 class="text-accent1 text-center font-bold">
                                        برنامه نویسی اندروید
                                    </h2>
                                    <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-file-text">
                                                        <path
                                                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                        </path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                                        <polyline points="10 9 9 9 8 9"></polyline>
                                                    </svg>
                                                </span>
                                                پروژه : &nbsp;
                                                <span class="font-medium"> وبسایت</span>
                                            </p>
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-code">
                                                        <polyline points="16 18 22 12 16 6"></polyline>
                                                        <polyline points="8 6 2 12 8 18"></polyline>
                                                    </svg>
                                                </span>
                                                زبان :&nbsp;
                                                <span class="font-medium">Photoshop, Illustration</span>
                                            </p>
                                        </div>

                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-user">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                        </path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                </span>
                                                کارفرما: &nbsp; <span class="font-medium">اینویتو</span>
                                            </p>
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-external-link">
                                                        <path
                                                            d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                        </path>
                                                        <polyline points="15 3 21 3 21 9"></polyline>
                                                        <line x1="10" y1="14" x2="21" y2="3"></line>
                                                    </svg>
                                                </span>
                                                پیشنمایش :&nbsp;
                                                <span
                                                    class="font-medium transition-all duration-300 ease-in-out hover:text-accent1">
                                                    <a href="https://www.envato.com/" target="_blank"
                                                        rel="noopener noreferrer">www.envato.com</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="dark:text-white font-normal text-[17px]">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                        از طراحان گرافیک است.
                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی
                                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                        کتابهای زیادی در شصت و سه
                                        درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                        نرم افزارها شناخت بیشتری
                                        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                                        فارسی ایجاد کرد.
                                    </p>
                                    <div class="pr-3">
                                        <img class="max-w-full h-auto rounded-xl mt-6 mx-auto"
                                            src="<?= get_template_directory_uri() ?>/assets/images/portfolio/big-4.png"
                                            alt="portfolio image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio popup end -->
                    </div>
                </div>
                <!-- single portfolio end -->

                <!-- single portfolio start -->
                <div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] graphics portfolio__parent"
                    data-category="graphics">
                    <div class="relative overflow-hidden">
                        <a href="#" class="popup-modal--open">
                            <span
                                class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                                <div
                                    class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                                    <span
                                        class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-maximize">
                                            <path
                                                d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                                            </path>
                                        </svg>
                                    </span>
                                    <h3
                                        class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">
                                        توسعه اپیکیشن</h3>
                                    <span
                                        class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .</span>
                                </div>
                            </span>
                            <div class="w-full portfolio__image--card">
                                <img class="w-full transition duration-300"
                                    src="<?= get_template_directory_uri() ?>/assets/images/portfolio/5.png" alt="">
                            </div>
                        </a>

                        <!-- Portfolio popup start -->
                        <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                            <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]">
                            </div>
                            <!-- Modal content -->
                            <div
                                class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                                <div
                                    class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                                    <button
                                        class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                    <h2 class="text-accent1 text-center font-bold">
                                        توسعه اپیکیشن
                                    </h2>
                                    <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-file-text">
                                                        <path
                                                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                        </path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                                        <polyline points="10 9 9 9 8 9"></polyline>
                                                    </svg>
                                                </span>
                                                پروژه : &nbsp;
                                                <span class="font-medium"> وبسایت</span>
                                            </p>
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-code">
                                                        <polyline points="16 18 22 12 16 6"></polyline>
                                                        <polyline points="8 6 2 12 8 18"></polyline>
                                                    </svg>
                                                </span>
                                                زبان :&nbsp;
                                                <span class="font-medium">Photoshop, Illustration</span>
                                            </p>
                                        </div>

                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-user">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                        </path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                </span>
                                                کارفرما: &nbsp; <span class="font-medium">اینویتو</span>
                                            </p>
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-external-link">
                                                        <path
                                                            d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                        </path>
                                                        <polyline points="15 3 21 3 21 9"></polyline>
                                                        <line x1="10" y1="14" x2="21" y2="3"></line>
                                                    </svg>
                                                </span>
                                                پیشنمایش :&nbsp;
                                                <span
                                                    class="font-medium transition-all duration-300 ease-in-out hover:text-accent1">
                                                    <a href="https://www.envato.com/" target="_blank"
                                                        rel="noopener noreferrer">www.envato.com</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="dark:text-white font-normal text-[17px]">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                        از طراحان گرافیک است.
                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی
                                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                        کتابهای زیادی در شصت و سه
                                        درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                        نرم افزارها شناخت بیشتری
                                        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                                        فارسی ایجاد کرد.
                                    </p>
                                    <div class="pr-3">
                                        <img class="max-w-full h-auto rounded-xl mt-6 mx-auto"
                                            src="<?= get_template_directory_uri() ?>/assets/images/portfolio/big-5.png"
                                            alt="portfolio image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio popup end -->
                    </div>
                </div>
                <!-- single portfolio end -->

                <!-- single portfolio start -->
                <div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] توسعه وب portfolio__parent"
                    data-category="development">
                    <div class="relative overflow-hidden">
                        <a href="#" class="popup-modal--open">
                            <span
                                class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                                <div
                                    class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                                    <span
                                        class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-maximize">
                                            <path
                                                d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                                            </path>
                                        </svg>
                                    </span>
                                    <h3
                                        class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">
                                        Photoshop</h3>
                                    <span
                                        class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .</span>
                                </div>
                            </span>
                            <div class="w-full portfolio__image--card">
                                <img class="w-full transition duration-300"
                                    src="<?= get_template_directory_uri() ?>/assets/images/portfolio/6.png" alt="">
                            </div>
                        </a>
                        <!-- Portfolio popup start -->
                        <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                            <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]">
                            </div>
                            <!-- Modal content -->
                            <div
                                class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                                <div
                                    class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                                    <button
                                        class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                    <h2 class="text-accent1 text-center font-bold">
                                        طراحی با Photoshop
                                    </h2>
                                    <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-file-text">
                                                        <path
                                                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                        </path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                                        <polyline points="10 9 9 9 8 9"></polyline>
                                                    </svg>
                                                </span>
                                                پروژه : &nbsp;
                                                <span class="font-medium"> وبسایت</span>
                                            </p>
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-code">
                                                        <polyline points="16 18 22 12 16 6"></polyline>
                                                        <polyline points="8 6 2 12 8 18"></polyline>
                                                    </svg>
                                                </span>
                                                زبان :&nbsp;
                                                <span class="font-medium">Photoshop, Illustration</span>
                                            </p>
                                        </div>

                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-user">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                        </path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                </span>
                                                کارفرما: &nbsp; <span class="font-medium">اینویتو</span>
                                            </p>
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-external-link">
                                                        <path
                                                            d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                        </path>
                                                        <polyline points="15 3 21 3 21 9"></polyline>
                                                        <line x1="10" y1="14" x2="21" y2="3"></line>
                                                    </svg>
                                                </span>
                                                پیشنمایش :&nbsp;
                                                <span
                                                    class="font-medium transition-all duration-300 ease-in-out hover:text-accent1">
                                                    <a href="https://www.envato.com/" target="_blank"
                                                        rel="noopener noreferrer">www.envato.com</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="dark:text-white font-normal text-[17px]">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                        از طراحان گرافیک است.
                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی
                                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                        کتابهای زیادی در شصت و سه
                                        درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                        نرم افزارها شناخت بیشتری
                                        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                                        فارسی ایجاد کرد.
                                    </p>
                                    <div class="pr-3">
                                        <img class="max-w-full h-auto rounded-xl mt-6 mx-auto"
                                            src="<?= get_template_directory_uri() ?>/assets/images/portfolio/big-6.png"
                                            alt="portfolio image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio popup end -->
                    </div>
                </div>
                <!-- single portfolio end -->

                <!-- single portfolio start -->
                <div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] web portfolio__parent"
                    data-category="web">
                    <div class="relative overflow-hidden">
                        <a href="#" class="popup-modal--open">
                            <span
                                class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                                <div
                                    class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                                    <span
                                        class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-maximize">
                                            <path
                                                d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                                            </path>
                                        </svg>
                                    </span>
                                    <h3
                                        class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">
                                        وب‌فلو</h3>
                                    <span
                                        class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .</span>
                                </div>
                            </span>
                            <div class="w-full portfolio__image--card">
                                <img class="w-full transition duration-300"
                                    src="<?= get_template_directory_uri() ?>/assets/images/portfolio/7.png" alt="">
                            </div>
                        </a>

                        <!-- Portfolio popup start -->
                        <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                            <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]">
                            </div>
                            <!-- Modal content -->
                            <div
                                class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                                <div
                                    class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                                    <button
                                        class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                    <h2 class="text-accent1 text-center font-bold">
                                        پروژه وب‌فلو
                                    </h2>
                                    <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-file-text">
                                                        <path
                                                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                        </path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                                        <polyline points="10 9 9 9 8 9"></polyline>
                                                    </svg>
                                                </span>
                                                پروژه : &nbsp;
                                                <span class="font-medium"> وبسایت</span>
                                            </p>
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-code">
                                                        <polyline points="16 18 22 12 16 6"></polyline>
                                                        <polyline points="8 6 2 12 8 18"></polyline>
                                                    </svg>
                                                </span>
                                                زبان :&nbsp;
                                                <span class="font-medium">Photoshop, Illustration</span>
                                            </p>
                                        </div>

                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-user">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                        </path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                </span>
                                                کارفرما: &nbsp; <span class="font-medium">اینویتو</span>
                                            </p>
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-external-link">
                                                        <path
                                                            d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                        </path>
                                                        <polyline points="15 3 21 3 21 9"></polyline>
                                                        <line x1="10" y1="14" x2="21" y2="3"></line>
                                                    </svg>
                                                </span>
                                                پیشنمایش :&nbsp;
                                                <span
                                                    class="font-medium transition-all duration-300 ease-in-out hover:text-accent1">
                                                    <a href="https://www.envato.com/" target="_blank"
                                                        rel="noopener noreferrer">www.envato.com</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="dark:text-white font-normal text-[17px]">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                        از طراحان گرافیک است.
                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی
                                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                        کتابهای زیادی در شصت و سه
                                        درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                        نرم افزارها شناخت بیشتری
                                        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                                        فارسی ایجاد کرد.
                                    </p>
                                    <div class="pr-3">
                                        <img class="max-w-full h-auto rounded-xl mt-6 mx-auto"
                                            src="<?= get_template_directory_uri() ?>/assets/images/portfolio/big-7.png"
                                            alt="portfolio image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio popup end -->
                    </div>
                </div>
                <!-- single portfolio end -->

                <!-- single portfolio start -->
                <div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] development graphics portfolio__parent"
                    data-category="mobile">
                    <div class="relative overflow-hidden">
                        <a href="#" class="popup-modal--open">
                            <span
                                class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                                <div
                                    class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                                    <span
                                        class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-maximize">
                                            <path
                                                d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                                            </path>
                                        </svg>
                                    </span>
                                    <h3
                                        class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">
                                        هاب اسپات</h3>
                                    <span
                                        class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .</span>
                                </div>
                            </span>
                            <div class="w-full portfolio__image--card">
                                <img class="w-full transition duration-300"
                                    src="<?= get_template_directory_uri() ?>/assets/images/portfolio/8.png" alt="">
                            </div>
                        </a>

                        <!-- Portfolio popup start -->
                        <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                            <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]">
                            </div>
                            <!-- Modal content -->
                            <div
                                class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                                <div
                                    class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                                    <button
                                        class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                    <h2 class="text-accent1 text-center font-bold">
                                        پروژه هاب اسپات
                                    </h2>
                                    <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-file-text">
                                                        <path
                                                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                        </path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                                        <polyline points="10 9 9 9 8 9"></polyline>
                                                    </svg>
                                                </span>
                                                پروژه : &nbsp;
                                                <span class="font-medium"> وبسایت</span>
                                            </p>
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-code">
                                                        <polyline points="16 18 22 12 16 6"></polyline>
                                                        <polyline points="8 6 2 12 8 18"></polyline>
                                                    </svg>
                                                </span>
                                                زبان :&nbsp;
                                                <span class="font-medium">Photoshop, Illustration</span>
                                            </p>
                                        </div>

                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-user">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                        </path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                </span>
                                                کارفرما: &nbsp; <span class="font-medium">اینویتو</span>
                                            </p>
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-external-link">
                                                        <path
                                                            d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                        </path>
                                                        <polyline points="15 3 21 3 21 9"></polyline>
                                                        <line x1="10" y1="14" x2="21" y2="3"></line>
                                                    </svg>
                                                </span>
                                                پیشنمایش :&nbsp;
                                                <span
                                                    class="font-medium transition-all duration-300 ease-in-out hover:text-accent1">
                                                    <a href="https://www.envato.com/" target="_blank"
                                                        rel="noopener noreferrer">www.envato.com</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="dark:text-white font-normal text-[17px]">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                        از طراحان گرافیک است.
                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی
                                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                        کتابهای زیادی در شصت و سه
                                        درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                        نرم افزارها شناخت بیشتری
                                        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                                        فارسی ایجاد کرد.
                                    </p>
                                    <div class="pr-3">
                                        <img class="max-w-full h-auto rounded-xl mt-6 mx-auto"
                                            src="<?= get_template_directory_uri() ?>/assets/images/portfolio/big-8.png"
                                            alt="portfolio image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio popup end -->
                    </div>
                </div>
                <!-- single portfolio end -->

                <!-- single portfolio start -->
                <div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] web mobile portfolio__parent"
                    data-category="web">
                    <div class="relative overflow-hidden">
                        <a href="#" class="popup-modal--open">
                            <span
                                class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                                <div
                                    class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                                    <span
                                        class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-maximize">
                                            <path
                                                d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                                            </path>
                                        </svg>
                                    </span>
                                    <h3
                                        class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">
                                        طراحی وب</h3>
                                    <span
                                        class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .</span>
                                </div>
                            </span>
                            <div class="w-full portfolio__image--card">
                                <img class="w-full transition duration-300"
                                    src="<?= get_template_directory_uri() ?>/assets/images/portfolio/9.png" alt="">
                            </div>
                        </a>

                        <!-- Portfolio popup start -->
                        <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                            <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]">
                            </div>
                            <!-- Modal content -->
                            <div
                                class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                                <div
                                    class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                                    <button
                                        class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                    <h2 class="text-accent1 text-center font-bold">
                                        توسعه وب
                                    </h2>
                                    <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-file-text">
                                                        <path
                                                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                        </path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                                        <polyline points="10 9 9 9 8 9"></polyline>
                                                    </svg>
                                                </span>
                                                پروژه : &nbsp;
                                                <span class="font-medium"> وبسایت</span>
                                            </p>
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-code">
                                                        <polyline points="16 18 22 12 16 6"></polyline>
                                                        <polyline points="8 6 2 12 8 18"></polyline>
                                                    </svg>
                                                </span>
                                                زبان :&nbsp;
                                                <span class="font-medium">Photoshop, Illustration</span>
                                            </p>
                                        </div>

                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-user">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                        </path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                </span>
                                                کارفرما: &nbsp; <span class="font-medium">اینویتو</span>
                                            </p>
                                            <p class="dark:text-white flex items-center">
                                                <span class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-external-link">
                                                        <path
                                                            d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                        </path>
                                                        <polyline points="15 3 21 3 21 9"></polyline>
                                                        <line x1="10" y1="14" x2="21" y2="3"></line>
                                                    </svg>
                                                </span>
                                                پیشنمایش :&nbsp;
                                                <span
                                                    class="font-medium transition-all duration-300 ease-in-out hover:text-accent1">
                                                    <a href="https://www.envato.com/" target="_blank"
                                                        rel="noopener noreferrer">www.envato.com</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="dark:text-white font-normal text-[17px]">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                        از طراحان گرافیک است.
                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی
                                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                        کتابهای زیادی در شصت و سه
                                        درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                        نرم افزارها شناخت بیشتری
                                        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                                        فارسی ایجاد کرد.
                                    </p>
                                    <div class="pr-3">
                                        <img class="max-w-full h-auto rounded-xl mt-6 mx-auto"
                                            src="<?= get_template_directory_uri() ?>/assets/images/portfolio/big-9.png"
                                            alt="portfolio image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio popup end -->
                    </div>
                </div>
                <!-- single portfolio end -->
            </div>
        </div>
        <!-- Filter portfolio end -->

    </div>
</section>
<!-- Portfolio section end -->