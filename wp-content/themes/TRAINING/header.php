<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<div id="header">
  <div id="menu">
        <ul>
        <li><a href="<?php the_permalink(); ?>">HOME</a></li>&bull;
        <li><a href="<?php the_permalink(); ?>">BLOG</a></li>&bull;
        <li><a href="<?php the_permalink(); ?>">TRAINING</a></li>&bull;
        <li><a href="<?php the_permalink(); ?>">KMM</a></li>&bull;
        <li><a href="<?php the_permalink(); ?>">INVITE</a></li>&bull;
        <li><a href="<?php the_permalink(); ?>">STORE</a></li>
        <li><a href="<?php the_permalink(); ?>"><button type="submit" id="subbtn">Why Subscribe?</button></a></li>
      </ul>      
  </div>
  <div id="logo">
    <img src="<?php bloginfo('template_directory'); ?>/images/logo.png"/>
  </div>
  <div id="tagline"><?php bloginfo('description'); ?></div>
  <div id="hr">
  </div>
</div>
    
		

