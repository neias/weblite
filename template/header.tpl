<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="/favicon.png">
    <?php if ($description): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    <?php if ($keywords): ?>
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <?php endif; ?>
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/public/css/carousel.css">

    <?php foreach ($links as $link): ?>
    <link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
    <?php endforeach; ?>
    <?php foreach ($styles as $style): ?>
    <link rel="<?php echo $style['rel']; ?>" type="text/css" href="<?php echo $style['href']; ?>" media="<?php echo $style['media']; ?>" />
    <?php endforeach; ?>

    <script src="/public/js/jquery-2.1.3.min.js"></script>
    <script src="/public/js/bootstrap.min.js"></script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="/public/js/holder.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/public/js/ie10-viewport-bug-workaround.js"></script>

    <?php foreach ($scripts as $script): ?>
    <script type="text/javascript" src="<?php echo $script; ?>"></script>
    <?php endforeach; ?>

    <noscript>
      <link rel="stylesheet" type="text/css" href="/public/css/styleNoJS.css" />
    </noscript>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/public/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/public/js/ie-emulation-modes-warning.js"></script>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

  </head>
  <body>
