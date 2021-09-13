<?php 

    function clientProject_files() {
        wp_enqueue_style('lego_main_style', get_theme_file_uri('/css/style.css'));
        wp_enqueue_style('lego_extra_style', get_theme_file_uri('/css/foundation-prototype.css'));

    }
    add_action('wp_enqueue_scripts', 'clientProject_files');
    // add action lets us give wordpress instructions. first argument tells wordpress what type of action we want to do.
    // Here wp_enqueue_scripts tells wordpress we want it to load css or js files. The second arugment is a custom function we create.