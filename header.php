<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="initial-scale=1.0">

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php echo bloginfo('rss2_url'); ?>">

<!-- BEGIN ENQUEUE comment-reply.js (required for threaded comments) -->
<?php // enqueue comment-reply.js (required for threaded comments)
	if ( is_singular() && get_option( 'thread_comments' ) )	wp_enqueue_script( 'comment-reply' ); 
?>
<!-- END ENQUEUE comment-reply.js (required for threaded comments) -->

<!-- wp_header -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- BEGIN LOGO, TAGLINE -->
<div class="logo-tagline-wrapper">
	<div id="site-logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
	</div>
	<div class="tagline">
		<span><?php bloginfo('description'); ?></span>
	</div>
</div>
<!-- END LOGO, TAGLINE -->

<!-- BEGIN MENU BUTTON, SEARCH FORM -->
<div id="header-area">
	<div id="headerbar-wrapper">
		<div id="menu-button"></div>
		<?php get_search_form(); ?>
	</div>
</div>
<!-- END MENU BUTTON, SEARCH FORM -->

<!-- BEGIN MAIN MENU -->
<div class="menu-wrap-outer">
	<div id="header-menu">
		<div id="menu-wrap">
			<?php wp_nav_menu( array( 'container_class' => 'menu01', 'theme_location' => 'main-nav', 'depth' => '2' ) ); ?>
		</div>
	</div>
</div>
<!-- END MAIN MENU -->


<div id="sitewrap">
	<div id="body" class="pagewidth clearfix">