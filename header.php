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
        <div class="padding-top">
            <div class="padding-top-content"></div>
            <div class="padding-top-sidebar"></div>
        </div>

        <div class="header-container">
            <header>
                <a href="/">
                    <img src="/blog/wp-content/themes/encosia/images/encosia-logo-plain.png"
                         alt="Encosia - ASP.NET, AJAX, jQuery, and more" title="Encosia - ASP.NET, AJAX, jQuery, and more" />
                </a>

                <nav>
                    <a href="/about-dave-ward" title="About">About</a>
                    <a href="/contact" title="Contact">Contact</a>
                </nav>
            </header>
        </div>