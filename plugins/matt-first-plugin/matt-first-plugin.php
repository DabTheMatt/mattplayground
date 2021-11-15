<?php

/*
Plugin Name: Matt First Plugin
Description: Matts first plugin
Author: Matt
Version: 0.1.0
License: GPLv3
*/

add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    $d_date = get_the_date();
    echo $d_date;
    return $content .= '<p><?php $d_date ?></p>';
}