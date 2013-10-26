<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title><?php wp_title() ?></title>
 
<link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url');?>" type="text/css" />
 
<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lte IE 7]>
	<script src="js/IE8.js" type="text/javascript"></script><![endif]-->
<!--[if lt IE 7]>
 
	<link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->
</head>
<h1> <a href="<?php echo bloginfo('url');?>"><?php echo bloginfo('name'); ?></a></h1>
<nav>
    <?php wp_nav_menu(); ?>
</nav>