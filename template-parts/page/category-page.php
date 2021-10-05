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
    <div class="grid-x grid-margin-x">
      <div class="medium-5 large-8 cell">
      <div class="row column text-center">
        <h2 class="subheader">Title</h2>
      </div>
    </div>
    <div class="large-4 cell">
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
</div>
    </div>

<div class="bottom-container">
  <div class="grid-x align-bottom">
    <div class="medium-2 cell">
      <div class="media-object">
        <div class="media-object-section">
        </div>
         
        </div>
      </div>

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
</main>