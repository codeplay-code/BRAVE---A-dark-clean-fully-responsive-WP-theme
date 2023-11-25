<?php get_header(); ?>

	<div id="content" class="clearfix">
	
		<div class="showing">
			<?php _e('Oops, page not found! Looks like you may have taken a wrong turn somewhere...', 'brave'); ?>
		</div>

		<div class="page-wrapper">
			<div class="archive-content">
				<br>
				<h5>Latest posts:</h5>
				<ul>
					<?php $recent_posts = wp_get_recent_posts('numberposts=5'); foreach( $recent_posts as $recent ){ echo '<li>- <a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a><br></li> '; } ?>
				</ul>
			</div>
		</div>

	</div>
	<!-- /#content -->
	
<?php get_footer(); ?>