<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Under Maintenance - <?php wp_title( '-', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
  <meta type="description" content="<?php wp_title( '-', true, 'right' ); ?> <?php bloginfo('description'); ?>" />
  <meta property="og:title" content="<?php wp_title( '-', true, 'right' ); ?> <?php bloginfo('name'); ?>" />
  <meta property="og:description" content="<?php wp_title( '-', true, 'right' ); ?> <?php bloginfo('description'); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php bloginfo('url');?>" />
  <style>
    body { text-align: center; padding: 150px; }
    h1 { font-size: 50px; }
    body { font: 20px Helvetica, sans-serif; color: #333; }
    article { display: block; text-align: left; width: 650px; margin: 0 auto; }
    a { color: #dc8100; text-decoration: none; }
    a:hover { color: #333; text-decoration: none; }
  </style>
</head>
<body>
  <article>
      <h1>We&rsquo;ll be back soon!</h1>
      <div>
          <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. Keep stay on this <a href="<?php bloginfo('url');?>">site</a>,  and otherwise we&rsquo;ll be back online shortly!</p>
          <p>&mdash; <?php bloginfo('name'); ?></p>
      </div>
  </article>
</body>
</html>
