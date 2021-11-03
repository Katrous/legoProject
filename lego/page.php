<?php
if(isset($_POST['user-submit'])){
  $name = htmlspecialchars(stripslashes(trim($_POST['user-name'])));
  $subject = "Lego Blog Email";
  $email = htmlspecialchars(stripslashes(trim($_POST['user-email'])));
  $message = htmlspecialchars(stripslashes(trim($_POST['user-message'])));
  if(!preg_match("/^[A-Za-z .'-]+$/", $name)){
    $name_error = 'Invalid name';
  }
  if(!preg_match("/^[A-Za-z .'-]+$/", $subject)){
    $subject_error = 'Invalid subject';
  }
  if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
    $email_error = 'Invalid email';
  }
  if(strlen($message) === 0){
    $message_error = 'Your message should not be empty';
  }
}


//ABOUT PAGE
get_header();

while(have_posts()){
  the_post(); ?>
    <!-- title -->
 <div class="row title">
    <div class="columns">
    <h2 class="header-h2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
    <?php
  
   // Define our Weters
   $the_query = new WP_Query( 'posts_per_page=3' ); ?>

    </div>

    <hr>

    <div class="grid">
        <div class="grid-x grid-margin-x">
              <div class="medium-6 cell background-blur-container">
                <div class="background-blur"></div>
                <img class="contact-building-image" src="<?php echo get_theme_file_uri("/img/lego-building.jpg")?>">
              </div>
              <div class="medium-5 cell">
                <br>
                <h3 class="contact-form">Contact Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec molestie, ante et luctus vehicula, nisl leo porta lacus, nec laoreet nisi quam a dui. Praesent eu dolor mi. Mauris ultrices condimentum hendrerit.</p>
                <p>Contact Number: 61+ 1234 5678</p>
                <p>Email: lego@gmail.com</p>
                <p>Address: Locked Bag 6, Northbridge WA 6865</p>
                <hr>
                <form action="" method='POST'>
                  <label>Name</label>
                    <input type="text" placeholder="Name" name='user-name'>
                  <p><?php if(isset($name_error)) echo $name_error; ?></p>

                  <label>Email </label>
                    <input type="text" placeholder="Email" name='user-email'>
                    <p><?php if(isset($email_error)) echo $email_error; ?></p>

                  <label>Message</label>
                    <textarea placeholder="Message" name='user-message'></textarea>
                    <p><?php if(isset($message_error)) echo $message_error; ?></p>

                  <input class="submit-button" type="submit" class="button expanded" value="Submit" name='user-submit'>

                  <?php 
        if(isset($_POST['user-submit']) && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)){
          $to = 'wilson.gleelover@gmail.com'; 
          $body = " Name: $name\n E-mail: $email\n Message:\n $message";
          if(mail($to, $subject, $body)){
            echo '<p style="color: green">Message sent</p>';
          }else{
            echo '<p>Error occurred, please try again later</p>';
          }
        }
      ?>
                </form>
                <br>
              </div>
            </div>
        </div>
<!-- INLUDE CONTACT PAGE HERE -->
<?php get_footer(); ?>