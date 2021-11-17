<?php get_header();?>
<!--Title-->
<div>
      <div class="row column text-center">
        <h2 class="header-h2">Blog Posts</h2>
      </div>
    </div>

    


</div>

 <!-- Category Boxes -->
    <div class="bottom-container">
    <div class="grid-x align-bottom">
    <div class="category-container"> 
      
   

        <?php
// LOAD Category DYNAMICALLY //

$categories = get_categories();
foreach(array_slice($categories, 0, 6) as $category)
echo '<a href="' . get_category_link($category->term_id) . '" class="category-button">' . $category->name . '</a>';
  
?>


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
<!--pagination-->

<nav aria-label="Pagination">
  <ul class="pagination text-center">
    <li class="pagination-previous disabled">Previous</li>
    <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
    <li><a href="#" aria-label="Page 2">2</a></li>
    <li><a href="#" aria-label="Page 3">3</a></li>
    <li><a href="#" aria-label="Page 4">4</a></li>
    <li class="ellipsis"></li>
    <li><a href="#" aria-label="Page 12">12</a></li>
    <li><a href="#" aria-label="Page 13">13</a></li>
    <li class="pagination-next"><a href="#" aria-label="Next page">Next</a></li>
  </ul>
</nav>

</div>
</div>
</div>
<?php get_footer(); ?>