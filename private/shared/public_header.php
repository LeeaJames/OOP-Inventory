<!doctype html>

<html lang="en">
  <head>
    <title>Chain Gang <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/css/foundation.css'); ?>" />
  </head>

  <body>

    <header>
      <div class="grid-container">
        <div class="grid-x">
          <div class="cell medium-5">
            <img class="bike-icon" width="200px" src="<?php echo url_for('/images/USDOT_bicycle_symbol.svg') ?>" />
            <h1><a href="<?php echo url_for('/index.php'); ?>">Chain Gang</a></h1>
          </div>
          <div class="cell medium-7"></div>
        </div>
      </div>
    </header>