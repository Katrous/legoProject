<?php get_header(); ?>

    <main>
      <div class="front_page-main-top">
        <div class="grid-x grid-margin-x">
          <div class="small-6 cell">
              <h1>Brickin' It</h1>
              <p>Hello, Im Adrian, I am a LEGO lover. I love collecting Lego as my favourite hobby. I have built a lot of Lego stuff using all the colourful blocks that is available everywhere. </p>
          </div>
          <div class="small-6 cell">
            <img src="<?php echo get_theme_file_uri("/img/placeholder.png")?>" alt="">
          </div>
        </div>
      </div>
      
      <br>
      <div class="hero-section">
        <div class="hero-section-text">
          <p>Clickable Link For App Once Available</p>
        </div>
      </div>
    <br>
    <div class="main-middle">
    <div class="grid-x grid-margin-x">

    <?php
        $articles = new WP_Query(array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => 1
      ));?>
      <?php  while ($articles->have_posts()): $articles->the_post(); ?>
      <div class="medium-6 cell small-order-2 medium-order-1">
      <a href="<?php echo get_permalink() ?>"><img class="thumbnail" src="<?php echo the_post_thumbnail_url('gallery-size'); ?>"></a>
      </div>
      <div class="medium-6 cell small-order-1 medium-order-2">
            <h1><?php the_title(); ?></h1>
            <p> <?php  my_excerpt('regular'); ?> </p>
           
            </p>
          </div>
                 
            <?php endwhile; ?> 
        </div>
      </div>
      <br>

      <div class="main-bottom">

        <?php

        // Create a counter here, we will use this with a condition statement to NOT output the recent post we already outputted above.
        $postCount = 0;
        // Define our WP Query Parameters
        $the_query = new WP_Query( 'posts_per_page=10' ); ?>
          
          
          <div class="grid-x align-top">
        <?php 
        // Start our WP Query
        while ($the_query -> have_posts()) : $the_query -> the_post(); 
        // Display the Post Title with Hyperlink

        if($postCount != 0) {
        ?>
          <div class="medium-4 cell">
            <div class="media-object">
              <div class="media-object-section">
              <a href="<?php echo get_permalink() ?>"><img class="thumbnail" src="<?php echo the_post_thumbnail_url('gallery-size'); ?>"></a>
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
        } 

        $postCount++;
        ?>

         
        <?php 
        // Repeat the process and reset once it hits the limit
        endwhile;
        wp_reset_postdata();
        ?>

      </div>
      <br>
  </main>

<?php get_footer(); ?>