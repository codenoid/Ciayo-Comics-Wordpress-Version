<?php /*
| Header
| Writer : Rubi Jihantoro
| Url  	 : facebook.com/real.jihantoro | kutemukan.com/profile/ruby
| Email  : jihantoro8@gmail.com
*/ ?> <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '-', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
    <meta type="description" content="<?php wp_title( '-', true, 'right' ); ?> <?php bloginfo('description'); ?>" />
    <meta property="og:title" content="<?php wp_title( '-', true, 'right' ); ?> <?php bloginfo('name'); ?>" />
    <meta property="og:description" content="<?php wp_title( '-', true, 'right' ); ?> <?php bloginfo('description'); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php bloginfo('url');?>" />
    <meta property="og:image" content="" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()."/blurbs.css"; ?>">
	<?php wp_head(); ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
</head>
<body>