<?php get_header(); ?>		

<div id="content" class="clearfix">

	<?php // the loop ?>
	<?php if (have_posts()) : ?>

		<div class="search-archive">
			<?php if ( have_posts() ) the_post(); ?>
				<div class="showing">
					<?php _e( 'Showing posts by:', 'brave' ); ?> <span><?php printf( "" . get_the_author() . "" ); ?></span>
				</div>
			<?php rewind_posts(); ?>
		</div>
		
		<?php while (have_posts()) : the_post(); ?>
	
		<!-- BEGIN LOOP + SEPARATOR -->
		<?php get_template_part('includes/loop'); ?>
		<div class="separator"></div>
		<!-- END LOOP + SEPARATOR -->

	<?php endwhile; ?>

		<!-- BEGIN INCLUDE PAGINATION -->
		<?php get_template_part('includes/pagination'); ?>
		<!-- BEGIN INCLUDE PAGINATION -->

	<?php endif; ?>			
	
</div>
<!-- /#content -->

<?php get_footer(); ?>