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

function eninews_add_my_scripts() {
    wp_enqueue_script('my.js', get_template_directory_uri().'/js/my.js'); // Chargement du JS
    wp_enqueue_style('my.css', get_template_directory_uri().'/css/my.css'); // Chargement du CSS
}

add_action('wp_enqueue_scripts', 'eninews_add_my_scripts');

add_theme_support('post-thumbnails');

function eninews_set_title_tag() {
    add_theme_support( 'title-tag');
}

add_action('after_setup_theme', 'eninews_set_title_tag' );