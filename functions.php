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

    class Excerpt {

        // Default length (by WordPress)
        public static $length = 55;
      
        // So you can call: my_excerpt('short');
        public static $types = array(
            'short' => 5,
            'regular' => 50,
            'long' => 100
          );
      
        /**
         * Sets the length for the excerpt,
         * then it adds the WP filter
         * And automatically calls the_excerpt();
         *
         * @param string $new_length 
         * @return void
         * @author Baylor Rae'
         */
        public static function length($new_length = 55) {
          Excerpt::$length = $new_length;
      
          add_filter('excerpt_length', 'Excerpt::new_length');
      
          Excerpt::output();
        }
      
        // Tells WP the new length
        public static function new_length() {
          if( isset(Excerpt::$types[Excerpt::$length]) )
            return Excerpt::$types[Excerpt::$length];
          else
            return Excerpt::$length;
        }
      
        // Echoes out the excerpt
        public static function output() {
          the_excerpt();
        }
      
      }
      
      // An alias to the class
      function my_excerpt($length = 55) {
        Excerpt::length($length);
      }

    function lego_features() {
        add_theme_support( 'post-thumbnails');
        add_image_size('gallery-size', 500, 300, true);
        add_image_size('single-feature', 700, 500, true);
    }
    add_action('after_setup_theme', 'lego_features');

    // OLD FUNCTIONS

    /* function wpdocs_custom_excerpt_length( $length ) {
    return 10;
     }
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 ); */