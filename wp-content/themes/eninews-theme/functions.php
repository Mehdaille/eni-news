<?php

function eninews_register_menu_main (): void
{
    register_nav_menu('emplacement_principal', 'Emplacement menu principal');
}

add_action('after_setup_theme', 'eninews_register_menu_main');

add_theme_support('custom-logo');

function eninews_title_uppercase($titre) {
    return strtoupper($titre);
}

add_filter('the_title', 'eninews_title_uppercase');

function eninews_add_my_style() {
    wp_enqueue_style('my.css', get_template_directory_uri().'/css/my.css');
}

add_action('wp_enqueue_scripts', 'eninews_add_my_style');

function eninews_add_my_script() {
    wp_enqueue_script('my.js', get_template_directory_uri().'/js/my.js');
}

add_action('wp_enqueue_scripts', 'eninews_add_my_script');