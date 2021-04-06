<?php
function kali_resources(){
    wp_enqueue_style('kali_styles',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','kali_resources');