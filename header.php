<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title><?php wp_title(); ?></title>
  <link rel="stylesheet" href="http://encosia.com/blog/wp-content/themes/encosia/style.css?v=69" type="text/css" media="screen" />
  <script type="text/javascript">
    (function() {
      var config = {
        kitId: 'ndu6umd',
        scriptTimeout: 3000
      };
      var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)
    })();
  </script>
  <!--[if lt IE 7]>
  <script defer type="text/javascript" src="http://encosia.com/blog/includes/pngfix.js"></script>
  <![endif]-->
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
      <h1><a href="http://encosia.com"><img src="http://i.encosia.com/blog/images/encosia-logo-trans.png" height="100" width="312" alt="Encosia - ASP.NET, AJAX, jQuery, and more" title="Encosia - ASP.NET, AJAX, jQuery, and more" /></a></h1>
    </div>
    
    <div id="RSSBlock"></div>
    
    <ul id="nav">
      <li><a href="http://encosia.com/about-dave-ward/" title="About">About</a></li>
      <!--<li><a href="http://encosia.com/downloads/" title="Downloads">Downloads</a></li>-->
      <li><a href="http://encosia.com/contact/" title="Contact">Contact</a></li>
    </ul>
  </div>