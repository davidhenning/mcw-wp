<?php

function mcwSetup() {
    add_theme_support('title-tag');
}

function removeImageDimensions($html) {
    return preg_replace('/(width|height)=\"\d*\"\s/', '', $html);
}

function themeCleanUp() {
    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}

function removeGenerator(){
    return false;
}

add_action('after_setup_theme', 'mcwSetup');
add_action('widgets_init', 'themeCleanUp');
add_filter('the_generator','removeGenerator');
add_filter('the_content', 'removeImageDimensions', 10);