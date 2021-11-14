    <footer>
      <div class="top-bar align-center" id="main-menu">
        <ul class="menu vertical medium-horizontal">
              <li class="menu-text"><a href="#home">Back to the Top</a></li>
              <li class="menu-text"><a href="<?php echo site_url(); ?>">Home</a></li>
              <li class="menu-text"><a href=" <?php echo site_url("/blog"); ?>">Post</a></li>
              <li class="menu-text"><a href="<?php echo site_url("/about"); ?>">About</a></li>
              <li class="menu-text"><a href="#">Twitter</a></li>
            </ul>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.5/js/foundation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.5/motion-ui.min.js"></script>
    <script>
      $(document).foundation();
    </script>

<?php wp_footer(); ?>
</body>
</html>