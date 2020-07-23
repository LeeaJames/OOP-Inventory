      
  <?php if(isset($super_hero_image)) { ?>
    
    <div class="expanding-wrapper">
      <?php $image_url = url_for('/images/' . $super_hero_image); ?>
      <img id="super-hero-image" src="<?php echo $image_url; ?>" />
      <footer>
      <div class="grid-container">
        <div class="grid-x">
          <div class="cell medium-12">
            <?php include(SHARED_PATH . '/public_copyright_disclaimer.php'); ?>
          </div>
        </div>
      </div>
    </footer>
    </div>
    
  <?php } else { ?>
    
    <footer>
      <div class="grid-container">
        <div class="grid-x">
          <div class="cell medium-10">
            <?php include(SHARED_PATH . '/public_copyright_disclaimer.php'); ?>
          </div>
        </div>
      </div>
    </footer>
    
  <?php } ?>

  </body>
</html>
<?php db_disconnect($database); ?>