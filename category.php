<?php 

/**
 * Template Name: Category Custom Page
 */
get_header();

  // get category slug in wordpress
  if ( is_single() ) {
    $cats =  get_the_category();
    $cat = $cats[0];
} else {
    $cat = get_category( get_query_var( 'cat' ) );
}
$cat_slug = $cat->slug;
$cat_slug_title =  str_replace('-', ' ', $cat_slug); // Replaces all hyphens with spaces. 

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => $cat_slug,
    //can i pass a variable here that contains the slug of the site?
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
  ?>


 <!-- top section of page -->
 <div class="grid-x grid-margin-x category_top"> 
        <div class="medium-5 large-8 cell">
            <div class="row column text-center">
                <h2 class="subheader"><?php echo ucfirst($cat_slug_title); ?></h2>
            </div>
        </div>

<!-- Category Boxes -->
<div class="bottom-container">
    <div class="grid-x align-bottom">
    <div class="category-container"> 

<?php
// LOAD Category DYNAMICALLY //

$categories = get_categories();
foreach($categories as $category) 
echo '<a href="' . get_category_link($category->term_id) . '" class="hollow button secondary medium-expanded">' . $category->name . '</a>';
  
?>
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
    </div>

<?php
if ( $arr_posts->have_posts() ) :
  ?> 
    <div class="bottom-container">

    <?php
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
            <div class="medium-2 cell">
                <div class="media-object">
                    <div class="media-object-section">
                        <img class="thumbnail" src="<?php echo get_theme_file_uri("/img/placeholder.png")?>">
                    </div>
                    <div class="media-object-section">
                        <h5><?php the_title(); ?></h5>
                        <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </div>

        <?php
    endwhile;
    ?>
    </div>
<?php
endif;


?>
    
    </div>
 

   

</div>
</div>

</main> 
<!--pagination-->

<nav aria-label="Pagination">
  <ul class="pagination text-center">
    <li class="pagination-previous disabled">Previous</li>
    <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
    <li><a href="#" aria-label="Page 2">2</a></li>
    <li><a href="#" aria-label="Page 3">3</a></li>
    <li><a href="#" aria-label="Page 4">4</a></li>
    <li class="ellipsis"></li>
    <li class="pagination-next"><a href="#" aria-label="Next page">Next</a></li>
  </ul>
</nav>

<?php get_footer(); ?>