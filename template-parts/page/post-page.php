<?php
/**
 * @package WordPress
 * @subpackage
 * @since
 * @version 1.0
 */

?>
	

<?php get_header(); ?>

<main>
  <br>
         <div>
      <div class="row column text-center">
        <h2 class="subheader">Blog Title - Am I in the right one?</h2>
      </div>
    </div>



<!-- Category Boxes
    <div class="bottom-container">
    <div class="grid-x align-bottom">

    <div class="category-container"> -->

<?php
// LOAD Category DYNAMICALLY //

$categories = get_categories();
foreach($categories as $category) 
echo '<a href="' . get_category_link($category->term_id) . '" class="hollow button secondary medium-expanded">' . $category->name . '</a>';
  
?>

<!--posts 6?-->



<div class="bottom-container">
<?php
// LOAD POSTS DYNAMICALLY
while(have_posts()){
    the_post(); ?>
    <div class="medium-2 cell">
    <div class="media-object">
        <div class="media-object-section">
            <img class="thumbnail" src="<?php echo get_theme_file_uri("/img/placeholder.png")?>">
        </div>
        <div class="media-object-section">
            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p>Posted on <?php the_time('d/m/Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>">Read More &raquo;</a>
        </div>
    </div>
</div>
<?php 
}

?>

</div>

    </div>
  </div>
</div>

      <br>
    </main>