<?php 
    /**
     * Template Name: Category Custom Page
     */
    get_header();

    // get category slug 
    if ( is_single() ) {
        $cats =  get_the_category();
        $cat = $cats[0];
    } 
    else {
        $cat = get_category( get_query_var( 'cat' ) );
    }


    $cat_slug = $cat->slug;
    $cat_slug_title =  str_replace('-', ' ', $cat_slug); // Replaces all hyphens with spaces. 

    
    $ourCurrentPage = get_query_var('paged');

    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => $cat_slug,
        //can i pass a variable here that contains the slug of the site?
        'posts_per_page' => 5,
        'paged' => $ourCurrentPage
    );

    $arr_posts = new WP_Query( $args );
?>


<div class="container_category">         
          <h2 class="subheader"><?php echo ucfirst($cat_slug_title); ?></h2>  
</div>
<!-- close top section of page div -->

    <!-- close grid-x alig-bottom -->
       
<?php
if ( $arr_posts->have_posts() ) :
  ?> 
    <div class="bottom-container category_top">

    <?php
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
            <div class="medium-2 cell">
                <div class="media-object index-flex-container">
                    <div class="media-object-section post-item-containers">
                    <a href="<?php echo get_permalink() ?>"><img class="thumbnail category-img-container" src="<?php echo the_post_thumbnail_url('gallery-size'); ?>"></a>
                    </div>
                    <div class="media-object-section  post-item-containers">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <?php the_excerpt(); ?>           
                </div>
            </div> 
            <!-- End Of medium-2 cell -->
        <?php
    endwhile;

    echo paginate_links();

    ?>
    
<?php
endif;


?>
 
    </div>
    <!--pagination-->
</div>
</div>

</div>
<!-- End of bottom container -->
<?php get_footer(); ?>

 <!-- DROP DOWN MENU CANT FIGURE OUT MUST FIX -->


        <!-- <div class="large-4 cell">
            <div class="filter">
                <div class="cell">
                    <label>Category
                    <select>
                      
                    <option value="husker">Husker</option>
                    <option value="starbuck">Starbuck</option>
                    <option value="hotdog">Hot Dog</option>
                    <option value="apollo">Apollo</option>

                  
                    </select>
                    </label>
                </div>
            </div>
        </div> -->
    <!-- </div> -->
