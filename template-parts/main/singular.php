<?php
// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}
/**
 * Singular Template
 *
 * @package Morex
 */
?>
<section class="pb-[70px] lg:py-[100px]">
    <div class="container mx-auto">
        <?php
        get_template_part(MOREX_TEMPLATE_CONTENT_PATH . '/singular-content');
        ?>
    </div>
</section>
