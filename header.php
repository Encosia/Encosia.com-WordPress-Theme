<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <title><?php wp_title(); ?></title>
    <!-- build:css /blog/wp-content/themes/encosia/css/styles.min.css -->
    <!-- bower:css -->
    <!-- endbower-->
    <link rel="stylesheet" href="/blog/wp-content/themes/encosia/css/styles.css" type="text/css" media="screen" />
    <!-- endbuild -->
    <link href="//fonts.googleapis.com/css?family=Merriweather:400italic,400,700|Archivo+Narrow:400,400italic" rel="stylesheet" type="text/css">
    <link rel="alternate" type="application/rss+xml" title="Posts" href="http://feeds.encosia.com/Encosia" />
    <link rel="alternate" type="application/rss+xml" title="Comments" href="http://feeds.encosia.com/EncosiaComments" />
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
      <h1><a href="http://encosia.com"><img src="/blog/wp-content/themes/encosia/images/encosia-logo-plain.png" height="100" width="312" alt="Encosia - ASP.NET, AJAX, jQuery, and more" title="Encosia - ASP.NET, AJAX, jQuery, and more" /></a></h1>
    </div>
    
    <div id="RSSBlock"></div>
    
    <ul id="nav">
      <li><a href="/about-dave-ward/" title="About">About</a></li>
      <!--<li><a href="http://encosia.com/downloads/" title="Downloads">Downloads</a></li>-->
      <li><a href="/contact/" title="Contact">Contact</a></li>
    </ul>
  </div>