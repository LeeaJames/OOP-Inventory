<?php require_once('../../private/initialize.php'); ?>

<?php require_login(); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content" class="grid-container">
  <div id="main-menu" class="grid-x">
  	<div class="cell medium-9">
	    <h2>Main Menu</h2>
	    <ul>
	      <li><a href="<?php echo url_for('/staff/bicycles/index.php'); ?>">Bicycles</a></li>
	      <li><a href="<?php echo url_for('/staff/admins/index.php'); ?>">Admins</a></li>
	    </ul>
    </div>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
