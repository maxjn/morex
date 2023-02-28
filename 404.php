<?php

// Elementor `single` location
if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('404')) {
?>
    <div style="text-align:center">
        <img src="<?= MOREX_IMG_URI ?>/404.gif" alt="404" width="60%" />
    </div>
<?php
}
