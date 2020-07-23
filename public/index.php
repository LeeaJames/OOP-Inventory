<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main" class="grid-container">
	<div class="grid-x">
		<div class="cell medium-10">

		  <ul id="menu">
		    <li><a href="<?php echo url_for('/bicycles.php'); ?>">View Our Inventory</a></li>
		    <li><a href="<?php echo url_for('/about.php'); ?>">About Us</a></li>
		  </ul>
  
  		</div>
    </div>
</div>

<?php $super_hero_image = 'AdobeStock_18040381_xlarge.jpeg'; ?>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
