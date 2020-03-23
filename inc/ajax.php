<?php

/*

@package finelinetaping

    ========================
        AJAX FUNCTIONS
    ========================
*/
add_action('wp_ajax_nopriv_finelinetaping_contact_form', 'finelinetaping_save_contact');
add_action('wp_ajax_finelinetaping_contact_form', 'finelinetaping_save_contact');

function finelinetaping_save_contact(){
    $title = wp_strip_all_tags($_POST['name']);
    $email = wp_strip_all_tags($_POST['email']);
    $message = wp_strip_all_tags($_POST['message']);

    $args = array(
        'post_title' => $title,
        'post_content' => $message,
        'post_author' => 1,
        'post_status' => 'publish',
        'post_type' => 'sunset-contact',
        'meta_input' => array(
            '_contact_email_value_key' => $email,
        ),
    );

    $postID = wp_insert_post($args);



}
