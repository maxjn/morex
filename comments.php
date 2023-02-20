<?php
// Prevent Direct Access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Comments
 *
 * @package Morex
 */

$comment_form_class     = \Morex_Theme\Inc\Comment_Form::get_instance();
$comment_form_args = $comment_form_class->comment_form_customization();

$comments = get_comments(['post_id' => get_the_ID(), 'status'  => 'approve',]);

if ($comments && comments_open()) {
?>
    <!-- Blog comment box start -->
    <div class="mt-10">
        <h4 class="text-primary mb-5 dark:text-white">(<?= count($comments) ?>)
            <?= __('comment', 'morex') ?></h4>
        <div class="mt-7">
            <?php
            $counter = 0;
            $comment_count = count($comments);
            foreach ($comments as $comment) {
                $counter++;
            ?>
                <div class="flex gap-4 <?php ($counter != $comment_count) ? ' border-b' : ''; ?> border-gray-300 pb-7 dark:text-slate-300">
                    <div class="w-20-fix h-fit rounded-full overflow-hidden ">
                        <img src="<?= get_avatar_url($comment->comment_author) ?>" alt="" width="80" height="80">
                    </div>
                    <div>
                        <div class="flex items-center gap-3">
                            <h6 class="text-primary font-heebo dark:text-white"><?= $comment->comment_author; ?></h6>
                            <span><?php echo human_time_diff(strtotime($comment->comment_date), current_time('U')) . ' ' . __(' ago', 'morex'); ?>
                            </span>
                        </div>
                        <p class="py-2"><?= $comment->comment_content; ?></p>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
    <!-- Blog comment box end -->
    <?php

} // have_comments() End
else {
    if (!get_comments_number() && comments_open()) { ?>
        <p class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">
            <?php _e('No comments yet. Leave the first comment.', 'morex'); ?></p>
    <?php
    }
}

// Comments were closed
if (!comments_open()) {
    //Npthing will happen
} else
// Comments were Opened
{
    ?>
    <!-- comment form start-->
    <div class="post-comments mt-5">
        <?php
        ob_start();
        comment_form($comment_form_args);
        echo str_replace('class="submit"', 'class="submit btn--small solid-btn mt-7"', ob_get_clean());
        ?>
    </div>
    <!-- comment form End-->
<?php }
?>
