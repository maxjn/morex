<?php

/**
 *Customizing Comment_Form()
 * https://developer.wordpress.org/reference/functions/comment_form/
 *
 * @package Morex
 */

namespace Morex_THEME\Inc;

use Morex_THEME\Inc\Traits\Singleton;

class Comment_Form
{

    use Singleton;

    protected function __construct()
    {

        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {

        /**
         * Actions.
         */
        add_filter('comment_form_fields', [$this, 'comment_fields_custom_order']);
        // Remove the logout link in comment form
        add_filter('comment_form_logged_in', '__return_empty_string');
    }

    /**
     * Comment Form Field Order.
     */
    public function comment_fields_custom_order($fields)
    {
        $comment_field = $fields['comment'];
        $author_field = $fields['author'];
        $email_field = $fields['email'];
        unset($fields['comment']);
        unset($fields['author']);
        unset($fields['email']);
        unset($fields['url']);
        unset($fields['cookies']);
        // the order of fields is the order below, change it as needed:
        $fields['author'] = $author_field;
        $fields['email'] = $email_field;
        $fields['comment'] = $comment_field;
        // done ordering, now return the fields:
        return $fields;
    }

    public function comment_form_customization()
    {
        //Declare Vars
        $comment_send = 'Post Comment';
        $comment_reply = '  <div class="mb-4">
        <h2>' . __('Leave A Comment', 'morex') . '</h2>
    </div>';
        $comment_reply_to = ' <div class="mb-4">
        <h2 class="d-flex">Leave A Reply to &nbsp;  %s</h2>
    </div>';

        $comment_author = 'Name';
        $comment_email = 'Email';
        $comment_body = 'Message';


        $comment_cancel = 'Cancel Reply';

        //Array
        $comments_args = array(
            //Define Fields
            'fields' => array(
                //Author field
                'author' => '
                <div class="grid grid-cols-2 gap-7">
                <div>
                    <input id="author" class="w-full bg-white rounded px-5 py-2 h-11 border border-gray-300 dark:bg-transparent dark:text-slate-300
                    dark:border dark:border-slate-600" type="text" name="author" placeholder="' . __($comment_author, 'morex') . '">
                </div>',
                //Email Field
                'email' => '
                <div>
                <input id="email"
                    class="w-full bg-white rounded px-5 py-2 h-11 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600"
                    type="email" name="email" placeholder="' . __($comment_email, 'morex') . '">
                </div>'
            ),
            // Change the title of send button
            'label_submit' => __($comment_send, 'morex'),
            // Change the title of the reply section
            'title_reply' => __($comment_reply, 'morex'),
            // Change the title of the reply section
            'title_reply_to' => __($comment_reply_to, 'morex'),
            //Cancel Reply Text
            'cancel_reply_link' => __($comment_cancel, 'morex'),
            // Redefine your own textarea (the comment body).
            'comment_field' => '<div class="col-span-2">
                                     <textarea  id="comment" name="comment" class="w-full bg-white rounded px-5 py-2 h-40 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" cols="30" rows="10" placeholder="' . __($comment_body, 'morex') . '"></textarea>
                                     </div></div>',
            //Message Before Comment
            'comment_notes_before' => '',
            // Remove "Text or HTML to be displayed after the set of comment fields".
            'comment_notes_after' => '',
            //Submit Button ID
            'id_submit' => __('comment-submit', 'morex'),
            //Form Class
            'class_form' => 'mt-10',
        );
        return $comments_args;
    }
}
