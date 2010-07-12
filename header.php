<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php wp_title(); ?></title>
  <link rel="stylesheet" href="http://encosia.com/blog/wp-content/themes/encosia/style.css?v=3.84" type="text/css" media="screen" />
  <!--[if lt IE 7]>
  <script defer type="text/javascript" src="http://encosia.com/blog/includes/pngfix.js"></script>
  <![endif]-->
  <link rel="alternate" type="application/rss+xml" title="Posts" href="http://feeds.encosia.com/Encosia" />
  <link rel="alternate" type="application/rss+xml" title="Comments" href="http://feeds.encosia.com/EncosiaComments" />
  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="pingback" href="http://encosia.com/blog/xmlrpc.php" />
  <?php wp_head(); ?>
  <?php if (is_single()) { ?>
  <link rel="shorturl" href="http://encosia.com/<?php the_ID(); ?>" />
  <?php } ?>
</head>
<body>
<div id="page">
  <div id="header">
    <div id="headerimg">
      <h1><a href="http://encosia.com"><img src="http://i.encosia.com/blog/images/encosia-logo-trans.png" height="100" width="312" alt="Encosia - ASP.NET, AJAX, jQuery, and more" title="Encosia - ASP.NET, AJAX, jQuery, and more" /></a></h1>
    </div>
    
    <div id="RSSBlock">
      <a href="http://feeds.encosia.com/Encosia" rel="nofollow" target="_blank"><img src="http://feeds.feedburner.com/~fc/Encosia?bg=F78B21&amp;fg=000000" height="26" width="88" border="0" title="Everyone else is doing it.  What are you waiting on?" alt="Encosia RSS feed count" /></a>
    </div>
    
    <ul id="nav">
      <li><a href="http://encosia.com/about-dave-ward/" title="About">About</a></li>
      <li><a href="http://encosia.com/downloads/" title="Downloads">Downloads</a></li>
      <li><a href="http://encosia.com/contact/" title="Contact">Contact</a></li>
    </ul>
  </div>