<html>
    <head>
        <?php wp_head() ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lego</title>
    
  <meta class="foundation-mq"></head>
  <body>
     <a id="home"></a>
    <div class="top-bar" id="mainNavigation" style="display: flex;">
      <div class="top-bar-left">
        <ul class="menu vertical medium-horizontal">
          <li class="menu-text"><a href="<?php echo site_url(); ?>"><img class="logo" src="<?php echo get_theme_file_uri("/img/lego-logo.jpg")?>"></a></li>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu vertical medium-horizontal">
          <li class="menu-text"><a href="<?php echo site_url(); ?>">Home</a></li>
          <li class="menu-text"><a href=" <?php echo site_url("/blog"); ?>">Post</a></li>
          <li class="menu-text"><a href="<?php echo site_url("/about"); ?>">About</a></li>
        </ul>
      </div>
    </div>
    <br>
