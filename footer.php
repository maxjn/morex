<?php

/**
 * Footer Template
 *
 * @package Morex
 */
?>
</main>
<!-- Main wrapper end -->

<!-- Footer start -->
<footer
    class="py-[50px] bg-cover bg-no-repeat bg-center bg-[url('../images/footer-bg.html')] bg-[#EFF3F7] dark:bg-[url('../images/footer-bg-dark.html')] dark:bg-dark_primary_bg dark:border-t dark:border-dark_accent1">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 only-md:grid-cols-2 lg:grid-cols-2">
            <div class="flex">
                <p class="flex items-center flex-wrap sm:justify-center dark:text-slate-200">منتشر شده در راستچین
                    <span class="px-[3px] text-paragraph dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" stroke="text-paragraph" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-heart">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg>
                    </span> توسط <span class=" px-[3px]"><a class="text-accent1 hover:font-bold"
                            href="#">Morex</a></span>© 2023
                </p>
            </div>
            <div class="flex items-center justify-end gap-8 sm:justify-center sm:mt-[15px]">
                <a href="#"
                    class="text-paragraph dark:text-slate-200 hover:text-accent1 font-medium text-[20px] sm:text-[16px]">قوانین
                    و مقررات</a>
                <a href="#"
                    class="text-paragraph dark:text-slate-200 hover:text-accent1 font-medium text-[20px] sm:text-[16px]">
                    ارتباط با من</a>
            </div>
        </div>
    </div>

</footer>
<!-- Footer end -->

<!-- Back to top start -->
<button id="scroll__top"
    class="fixed bottom-12 ltr:right-5 rtl:left-5 z-50 bg-accent1 text-white shadow-[0_2px_22px_rgba(0,0,0,0.16)] cursor-pointer translate-y-12 opacity-0 invisible transition-all duration-300 leading-[1] w-11 h-11 rounded-full border-none flex items-center justify-center hover:bg-primary dark:hover:bg-dark_accent1">
    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-6 leading-[1]" viewBox="0 0 512 512">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="48"
            d="M112 244l144-144 144 144M256 120v292" />
    </svg>
</button>
<!-- Back to top end -->



<!-------- Plugins js ------>
<?php wp_footer(); ?>
</body>

</html>