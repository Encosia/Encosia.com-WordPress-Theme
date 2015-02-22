<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title><?php wp_title(); ?></title>
  <?php if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) { ?>
  <link rel="stylesheet" href="/blog/wp-content/themes/encosia/css/dist/styles.css?v=72" type="text/css" media="screen" />
  <?php } else { ?>
  <link rel="stylesheet" href="/blog/wp-content/themes/encosia/css/dist/styles.min.css?v=72" type="text/css" media="screen" />
  <?php } ?>
      <link href='http://fonts.googleapis.com/css?family=Merriweather:400italic,400,700|Archivo+Narrow:400,400italic' rel='stylesheet' type='text/css'>
  <!--[if gte IE 9]>
  <style type="text/css">
    #sidebar h3 { filter: none; }
  </style>
  <![endif]-->
  <link rel="alternate" type="application/rss+xml" title="Posts" href="http://feeds.encosia.com/Encosia" />
  <link rel="alternate" type="application/rss+xml" title="Comments" href="http://feeds.encosia.com/EncosiaComments" />
  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="pingback" href="http://encosia.com/blog/xmlrpc.php" />
  <meta property="fb:admins" content="503531327" />
  <?php
    global $twitter_image;

    if (isset($twitter_image)) { ?>
  <meta name="twitter:image" content="<?php echo $twitter_image[0]; ?>">
  <?php } ?>

  <?php wp_head(); ?>
</head>
<body>
<div id="page">
  <div id="header">
    <div id="headerimg">
      <h1><a href="http://encosia.com"><img src="/blog/images/encosia-logo-trans.png" height="100" width="312" alt="Encosia - ASP.NET, AJAX, jQuery, and more" title="Encosia - ASP.NET, AJAX, jQuery, and more" /></a></h1>
    </div>
    
    <div id="RSSBlock"></div>
    
    <ul id="nav">
      <li><a href="/about-dave-ward/" title="About">About</a></li>
      <!--<li><a href="http://encosia.com/downloads/" title="Downloads">Downloads</a></li>-->
      <li><a href="/contact/" title="Contact">Contact</a></li>
    </ul>
  </div>