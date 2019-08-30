<!DOCTYPE html>
<html lang=""<?php bloginfo('charset'); ?>">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
<?php wp_head(); ?>
</head>
<body>
<div id="container">
  <header>
    <h1>
      <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
		<span>- <?php bloginfo('description'); ?> -</span>
    </h1>
  </header>
  <nav id="global">
<?php wp_nav_menu(array("container"=>false)); ?>
   </nav>
  <main>
    <div id="contents">