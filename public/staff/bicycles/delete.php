<?php

require_once('../../../private/initialize.php');

require_login(); 

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/bicycles/index.php'));
}
$id = $_GET['id'];
$bicycle = Bicycle::find_by_id($id);
  if ($bicycle == false) {
    redirect_to(url_for('/staff/bicycles/index.php'));
  }

if(is_post_request()) {

  // Delete bicycle
  $result = $bicycle->delete();

  $session->message('The bicycle was updated successfully.');
  redirect_to(url_for('/staff/bicycles/index.php'));

} else {
  // Display form
}

?>

<?php $page_title = 'Delete Bicycle'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content" class="grid-container">
  <div class="grid-x">
    <div class="cell medium-10">

      <a class="back-link" href="<?php echo url_for('/staff/bicycles/index.php'); ?>">&laquo; Back to List</a>

      <div class="bicycle delete">
        <h1>Delete Bicycle</h1>
        <p>Are you sure you want to delete this bicycle?</p>
        <p class="item"><?php echo h($bicycle->name()); ?></p>

        <form action="<?php echo url_for('/staff/bicycles/delete.php?id=' . h(u($id))); ?>" method="post">
          <div id="operations">
            <input type="submit" name="commit" value="Delete Bicycle" class="button" />
          </div>
        </form>
      </div>
    </div>
  </div>  
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
