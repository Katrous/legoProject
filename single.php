<!-- THIS PAGE POWERS SINGLE BLOG PAGES -->

<?php 
get_header();

  while(have_posts()){
    the_post(); ?>
    <div class="blog-text">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <br>
      <div>
        <img class="single-blog-image" src="<?php echo the_post_thumbnail_url('single-feature'); ?>">
      </div>
      <br>
      <?php the_content(); ?>
      <hr>
    </div>
  <?php } ?>
  <!-- End of while -->

  <h5 class="excerpt-post-title">Make Sure To Check Out Our Latest Posts!</h5>

   <?php
        // Define our WP Query Parameters
        $the_query = new WP_Query( 'posts_per_page=3' ); ?>
          
          
          <div class="grid-x bottom-posts align-top">
        <?php 
        // Start our WP Query
        while ($the_query -> have_posts()) : $the_query -> the_post(); 
        // Display the Post Title with Hyperlink
        ?>

          <div class="medium-4 cell">
            <div class="media-object">
              <div class="media-object-section">
                <img class="thumbnail" src="<?php echo get_theme_file_uri("/img/placeholder.png")?>">
              </div>
              <div class="media-object-section">
                <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>

                <?php 
                // Display the Post Excerpt
                my_excerpt('short'); ?>
              </div> 
            </div>
          </div>

        <?php 
        // Repeat the process and reset once it hits the limit
        endwhile;
        wp_reset_postdata();
        ?>

      </div>
<?php get_footer(); ?>