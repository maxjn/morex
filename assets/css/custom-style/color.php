<?php
// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}

$theme_color = get_theme_mod('theme_color', '#EE5F38');

list($r, $g, $b) = sscanf($theme_color, "#%02x%02x%02x");

?>

<style>
:root {
    --accent1-rgb: <?="$r $g $b"?>;
    --accent1-hex: <?="$theme_color"?>;
}
</style>