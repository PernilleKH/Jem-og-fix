<?php
function load_stylesheets()
{
wp_register_style('custom', get_template_directory_uri() . '/style.css', array(), 1, 'all');
wp_enqueue_style('custom');    
}
add_action('wp_enqueue_scripts', 'load_stylesheets');
?>