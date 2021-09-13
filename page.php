<?php 
//ABOUT PAGE
get_header();

while(have_posts()){
  the_post(); ?>
    <!-- title -->
 <div class="row title">
    <div class="columns">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </div>
  </div>

  <hr>

  <!-- content -->
  <div class="main-middle">
    <div class="grid-x grid-margin-x">
          <div class="medium-6 cell small-order-2 medium-order-1">
            <img class="thumbnail" src="<?php echo get_theme_file_uri("/img/placeholder.png")?>">
          </div>
          <div class="medium-6 cell small-order-1 medium-order-2">
          <p>Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Donec molestie, ante et
            luctus vehicula, nisl leo porta lacus, nec
            laoreet nisi quam a dui.Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Donec molestie, ante et
            luctus vehicula, nisl leo porta lacus, nec
            laoreet nisi quam a dui. 

            <p>Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Donec molestie, ante et
            luctus vehicula, nisl leo porta lacus, nec
            laoreet nisi quam a dui. Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Donec molestie, ante et
            luctus vehicula, nisl leo porta lacus, nec
            laoreet nisi quam a dui.  </p>
            </p>
          </div>
        </div>
      </div>
      <br>
      <div class="main-middle">
        <div class="grid-x grid-margin-x">
              <div class="medium-6 cell small-order-2 medium-order-1">
                <p>Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Donec molestie, ante et
                luctus vehicula, nisl leo porta lacus, nec
                laoreet nisi quam a dui.Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Donec molestie, ante et
                luctus vehicula, nisl leo porta lacus, nec
                laoreet nisi quam a dui. 
    
                <p>Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Donec molestie, ante et
                luctus vehicula, nisl leo porta lacus, nec
                laoreet nisi quam a dui. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Donec molestie, ante et
                luctus vehicula, nisl leo porta lacus, nec
                laoreet nisi quam a dui.  </p>
                </p>
              </div>
              <div class="medium-6 cell small-order-1 medium-order-2">
                <img class="thumbnail" src="<?php echo get_theme_file_uri("/img/placeholder.png")?>">
              </div>
            </div>
          </div>
          <br>
  <?php }
?>


    <h5 class="excerpt-post-title">Make Sure To Check Out the Latest Post!</h5>

<!-- INLUDE CONTACT PAGE HERE -->
<?php get_footer(); ?>