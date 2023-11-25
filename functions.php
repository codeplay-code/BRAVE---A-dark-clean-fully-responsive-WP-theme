<?php

	//
	// Load theme languages
	//
	load_theme_textdomain( 'brave', get_template_directory().'/languages' );

	//
	// Enable WordPress features
	//
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-background');
	add_theme_support('automatic-feed-links');
	add_theme_support('responsive-embeds');

	//
	// Register Custom Menu Function
	//
	if (function_exists('register_nav_menus')) {
		register_nav_menus( array(
			'main-nav' => ( 'Main Navigation' ),
		) );
	}

	//
	// Default Main Nav Function
	//
	function default_main_nav() {
		echo '<ul id="main-nav" class="main-nav clearfix">';
		wp_list_pages('title_li=');
		echo '</ul>';
	}

	//
	// Register Widgets
	//
	function bonfire_widgets_init() {
	
		register_sidebar( array(
		'name' => __( 'Footer Widgets', 'brave' ),
		'id' => 'brave-footer-widgets',
		'description' => __( 'Drag widgets here', 'brave' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
		));

	}
	add_action( 'widgets_init', 'bonfire_widgets_init' );

	//
	// Prevent page scroll when clicking 'read more' link
	//
	function remove_more_link_scroll( $link ) {
		$link = preg_replace( '|#more-[0-9]+|', '', $link );
		return $link;
	}
	add_filter( 'the_content_more_link', 'remove_more_link_scroll' );
	
	//
	// Exclude pages from search results
	//
	function SearchFilter($query) {
	if ($query->is_search) {
	$query->set('post_type', 'post');
	}
	return $query;
	}
	add_filter('pre_get_posts','SearchFilter');

	//
	// Enqueue Google WebFonts
	//
	function bonfire_fonts_url() {
		$font_url = '';

		if ( 'off' !== _x( 'on', 'Google font: on or off', 'brave' ) ) {
			$font_url = add_query_arg( 'family', urlencode( 'Righteous|Open+Sans|Lato:700' ), "//fonts.googleapis.com/css" );
		}
		return $font_url;
	}
	function bonfire_scripts() {
		wp_enqueue_style( 'bonfire-fonts', bonfire_fonts_url(), array(), '1.0.0' );
	}
	add_action( 'wp_enqueue_scripts', 'bonfire_scripts' );

	//
	// Enqueue style.css
	//
	function bonfire_style() {  
        wp_register_style( 'style', get_stylesheet_uri() , array(), '1', 'all' );
        wp_enqueue_style( 'style' );  
    }
    add_action( 'wp_enqueue_scripts', 'bonfire_style' );	
	
	//
	// Enqueue accordion.js
	//
	function bonfire_accordion() {  
        wp_register_script( 'bonfire-accordion', get_template_directory_uri() . '/js/accordion.js', array( 'jquery' ), '1' );
        wp_enqueue_script( 'bonfire-accordion' );  
    }  
    add_action( 'wp_enqueue_scripts', 'bonfire_accordion' );  

	//
	// Enqueue header-menu.js
	//
	function bonfire_menu() {  
        wp_register_script( 'menu_slide', get_template_directory_uri() . '/js/header-menu.js',  array( 'jquery' ), '1', true );
        wp_enqueue_script( 'menu_slide', true );  
    }  
    add_action( 'wp_enqueue_scripts', 'bonfire_menu' );  
		
	//
	// Enqueue empty-textarea.js
	//
	function bonfire_emptytextarea() {  
        wp_register_script( 'empty-textarea', get_template_directory_uri() . '/js/empty-textarea.js',  array( 'jquery' ), '1' );
        wp_enqueue_script( 'empty-textarea' );
	}  
    add_action( 'wp_enqueue_scripts', 'bonfire_emptytextarea' );
	
	//
	// Enqueue expand-textfield.js
	//
	function bonfire_expandtextfield() {  
        wp_register_script( 'expand-textfield', get_template_directory_uri() . '/js/expand-textfield.js',  array( 'jquery' ), '1', true );
        wp_enqueue_script( 'expand-textfield' );
	}  
    add_action( 'wp_enqueue_scripts', 'bonfire_expandtextfield' );

	//
	// Enqueue autogrow/jquery.autogrow-textarea.js
	//
	function bonfire_autogrow() {
		if ( is_singular() ) {
			wp_register_script( 'autogrow', get_template_directory_uri() . '/js/autogrow/jquery.autogrow-textarea.js',  array( 'jquery' ), '1', true );
			wp_enqueue_script( 'autogrow' );  
		}
	}  
    add_action( 'wp_enqueue_scripts', 'bonfire_autogrow' );

	//
	// Enqueue expand-textarea.js
	//
	function bonfire_expandtextarea() {  
		if ( is_singular() ) {
			wp_register_script( 'expand-textarea', get_template_directory_uri() . '/js/expand-textarea.js',  array( 'jquery' ), '1' );
			wp_enqueue_script( 'expand-textarea' );  
		}
	}
    add_action( 'wp_enqueue_scripts', 'bonfire_expandtextarea' );

	//
	// Enqueue comment-form.js
	//
	function bonfire_commentform() {  
        wp_register_script( 'comment-form', get_template_directory_uri() . '/js/comment-form.js',  array( 'jquery' ), '1', true );
        wp_enqueue_script( 'comment-form' );  
	}
    add_action( 'wp_enqueue_scripts', 'bonfire_commentform' );

	//
	// Define content width
	//
	if ( ! isset( $content_width ) ) $content_width = 960;

	//
	// Custom Comment Output
	//
	function custom_theme_comment($comment, $args, $depth) {
	   $GLOBALS['comment'] = $comment; 
	   ?>

	<li id="comment-<?php comment_ID() ?>" <?php comment_class(); ?>>
		
		<div class="comment-avatar"><?php echo get_avatar($comment,$size='64'); ?></div>
			<div class="comment-container">
			<div class="comment-author">
			<?php comment_author(); ?>, <span class="comment-time"><?php comment_date('M d, Y'); ?></span>
			</div>
			
			<div class="comment-entry">
			
			<?php if ($comment->comment_approved === '0') : ?>
			<strong><?php _e('(Your comment is awaiting moderation.)', 'brave') ?></strong>
			<?php endif; ?>
			<?php echo get_comment_text(); ?>
			<?php edit_comment_link( __('Edit', 'brave'),' [',']') ?>

			<?php comment_reply_link(array_merge( $args, array('add_below' => 'comment', 'depth' => $depth, 'reply_text' => __( 'Reply', 'brave' ), 'max_depth' => $args['max_depth']))) ?>

			</div>
			
			<div class="clear"></div>

		</div>
		
	<?php
	}

?>