<?php
// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}
?>
</main>
<!-- Main wrapper end -->
<?php
// Elementor `footer` location
if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('footer')) {

    get_template_part(MOREX_TEMPLATE_MAIN_PATH . '/footer');
}
?>

<!-- Back to top start -->
<button id="scroll__top" class="fixed bottom-12 ltr:right-5 rtl:left-5 z-50 bg-accent1 text-white shadow-[0_2px_22px_rgba(0,0,0,0.16)] cursor-pointer translate-y-12 opacity-0 invisible transition-all duration-300 leading-[1] w-11 h-11 rounded-full border-none flex items-center justify-center hover:bg-primary dark:hover:bg-dark_accent1">
    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-6 leading-[1]" viewBox="0 0 512 512">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292" />
    </svg>
</button>
<!-- Back to top end -->



<!-------- Plugins js ------>
<?php wp_footer(); ?>
</body>

</html>
