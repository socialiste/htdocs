<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!--[if lt IE 9]>  
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  
<![endif]--> 
<title><?php wp_title() ?></title>
<link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url');?>" type="text/css" />

</head>
<div id ="wrap">
<header>
    <h1> <a href="<?php echo bloginfo('url');?>"><?php echo bloginfo('name'); ?></a></h1>
    <nav>
        <?php wp_nav_menu(); ?>
    </nav>
</header>