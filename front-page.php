<?php get_header(); ?>

    <main>
      <div class="main-top">
        <div class="grid-x grid-margin-x">
        <div class="medium-5 large-4 cell">
          <h1>Title</h1>
          <p>Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Donec molestie, ante et luctus
            vehicula, nisl leo porta lacus, nec laoreet nisi
            quam a dui. Praesent eu dolor mi. Mauris
            ultrices condimentum hendrerit. Phasellus a
            tempor nunc, sit amet rhoncus risus. </p>
        </div>
        <div class="show-for-large large-4 cell">
          <img src="<?php echo get_theme_file_uri("/img/placeholder.png")?>" alt="">
        </div>
        <div class="medium-5 large-4 cell">
            <h1>Post Title</h1>
          <p>Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Donec molestie, ante et
            luctus vehicula, nisl leo porta lacus, nec
            laoreet nisi quam a dui. Praesent eu dolor
            mi. Mauris ultrices condimentum
            hendrerit.</p>
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
          <div class="medium-6 cell small-order-2 medium-order-1">
            <img class="thumbnail" src="<?php echo get_theme_file_uri("/img/placeholder.png")?>">
          </div>
          <div class="medium-6 cell small-order-1 medium-order-2">
            <h1>Post Title</h1>
          <p>Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Donec molestie, ante et
            luctus vehicula, nisl leo porta lacus, nec
            laoreet nisi quam a dui. </p>
            <a href="#">Read More</a>
            </p>
          </div>
        </div>
      </div>
      <br>

      <div class="main-bottom">

        <?php
        // Define our WP Query Parameters
        $the_query = new WP_Query( 'posts_per_page=3' ); ?>
          
          
          <div class="grid-x align-top">
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
                the_excerpt(); ?>
              </div> 
            </div>
          </div>

        <?php 
        // Repeat the process and reset once it hits the limit
        endwhile;
        wp_reset_postdata();
        ?>

      </div>
      <br>
  </main>

<?php get_footer(); ?>