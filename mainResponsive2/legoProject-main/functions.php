<?php 

    function clientProject_files() {
        wp_enqueue_style('lego_main_style', get_theme_file_uri('/css/style.css'));
        wp_enqueue_style('lego_extra_style', get_theme_file_uri('/css/foundation-prototype.css'));

    }
    add_action('wp_enqueue_scripts', 'clientProject_files');
    // add action lets us give wordpress instructions. first argument tells wordpress what type of action we want to do.
    // Here wp_enqueue_scripts tells wordpress we want it to load css or js files. The second arugment is a custom function we create.


    // Changes index page blog posts excerpt() default behaviour of adding a [..] instead of a read more link
    function wpdocs_excerpt_more( $more ) {
    $more = sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( ' Read More', 'textdomain' )
    );
     
        return $more;
    }
    add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

    function wpdocs_custom_excerpt_length( $length ) {
        return 10;
    }
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

    