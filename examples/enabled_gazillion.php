<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta charset="utf-8">
  <title>Lazy Load Enabled With Gazillion Images</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" media="screen" href="css/appelsiini.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet"><link href="css/jieyou.css" rel="stylesheet">
  <link rel="shortcut icon" href="ico/favicon.ico">
  <!--[if lt IE 9]>
    <script src="page_js/html5shiv.js"></script>
  <![endif]-->
  
  <style type="text/css">
    .container img {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <div class="jumbotron">
    <div class="container">
      <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
        <h1>lazyload Plugin for jQuery | Zepto</h1>
        <p class="des">
          <!--<iframe src="http://ghbtns.com/github-btn.html?user=tuupola&amp;repo=jquery_lazyload&amp;type=watch&amp;count=true&amp;size=small" allowtransparency="true" frameborder="0" scrolling="0" width="92" height="30"></iframe>    
          <iframe src="http://ghbtns.com/github-btn.html?user=tuupola&amp;repo=jquery_lazyload&amp;type=fork&amp;count=true&amp;size=small" allowtransparency="true" frameborder="0" scrolling="0" width="90" height="30"></iframe>-->
          This project is forked from <a href="https://github.com/tuupola/jquery_lazyload"><span class="label label-danger">tuupola/jquery_lazyload</span></a> and add features below:<br/>
          * Many Details for improve performance;<br/>
          * IE6/7 support;<br/>
          * Available with <a href="https://github.com/madrobby/zepto"><span class="label label-danger">Zepto</span></a>;<br/>
          * `vertical_only` \ `minimum_interval` \ `use_minimum_interval_in_ios` \ `no_fake_img_loader` options.
        </p>
        <p class="des">
          More information on <a href="https://github.com/jieyou/lazyload"><span class="label label-danger">jieyou/lazyload</span></a>.
        </p>
      </div>
    </div>
  </div>
   
  <div class="container">
    <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
      
      <h2>Plugin enabled with gazillion images</h2>
      <p>
        When you have hundreds of images it is best to use James Padolseys <a href="http://james.padolsey.com/javascript/special-scroll-events-for-jquery/">scrollstop event</a>. 
        Compate this to page where plugin is <a href="disabled.html">disabled</a> or page with 
        <a href="enabled.html">larger images</a>.
      </p>
      <p>
        Note: The <a href="http://james.padolsey.com/javascript/special-scroll-events-for-jquery/">scrollstop event</a> is only available with jQuery (not available with Zepto).
      </p>

      <pre class="prettyprint">&lt;script src="jquery.scrollstop.js" type="text/javascript"&gt;&lt;/script&gt; </pre>
      <pre class="prettyprint">&lt;img class="lazy" data-original="img/example.jpg" width="80" height="120" alt=""&gt;</pre>
      <pre class="prettyprint">$("img.lazy").lazyload({
  event: "scrollstop"
});</pre>

      <div id="container">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">

      </div>
    </div>
  </div>
  
  

  <script src="//webmap2.map.bdimg.com/yyfm/jQuery_1.x/1.10.2/js/jQuery_1.x.min.js"></script>
  <!-- <!-- <script src="http://webmap2.map.bdimg.com/yyfm/zepto_default/1.0/js/zepto_default.min.js"></script> --> -->
  <script src="../lazyload.js"></script>
  <script src="http://bcs.duapp.com/jieyou-storage/jquery.scrollstop.min.js"></script>
  <script src="page_js/demo.js"></script>
  <script type="text/javascript">
      $(function() {
          $("img.lazy").lazyload({
              event: "scrollstop"
          });
      });
  </script>
</body>
</html>