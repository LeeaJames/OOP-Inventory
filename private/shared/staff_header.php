<?php
  if(!isset($page_title)) { $page_title = 'Staff Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>Chain Gang - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/css/foundation.css'); ?>" />
  </head>

  <body>
    <header>
      <div class="grid-container">
        <div class="grid-x">
          <div class="cell medium-6">
           <h1>Chain Gang Staff Area</h1>
          </div>

          <div class="cell medium-6">
            <navigation>
                <ul>
                  <?php if ($session->is_logged_in()) { ?>
                    <li>User: <?php echo $session->username; ?></li>
                  <li><a href="<?php echo url_for('/staff/index.php'); ?>">Menu</a></li>
                  <li><a href="<?php echo url_for('/staff/logout.php'); ?>">Logout</a></li>
                  <?php } ?>
              </ul>
            </navigation>

            <?php echo display_session_message(); ?>
          </div>
        </div>
      </div>
    </header>


