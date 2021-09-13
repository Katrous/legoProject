<html>
    <head>
        <?php wp_head() ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lego</title>
    <link rel="stylesheet" href="css/foundation-prototype.css">
    <link rel="stylesheet" href="css/style.css">
    
  <meta class="foundation-mq"></head>
  <body>
     <a id="home"></a>
    <div class="top-bar" id="mainNavigation" style="display: flex;">
      <div class="top-bar-left">
        <ul class="menu vertical medium-horizontal">
          <li class="menu-text hide-for-small-only"><a>Logo</a></li>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu vertical medium-horizontal">
          <li class="menu-text hide-for-small-only"><a href="<?php echo site_url(); ?>">Home</a></li>
          <li class="menu-text hide-for-small-only"><a href=" <?php echo site_url("/blog"); ?>">Post</a></li>
          <li class="menu-text hide-for-small-only"><a href="<?php echo site_url("/about"); ?>">About</a></li>
        </ul>
      </div>
    </div>
    <br>
