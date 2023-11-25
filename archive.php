<?php get_header(); ?>		

<div id="content" class="clearfix">

	<?php // the loop ?>
	<?php if (have_posts()) : ?>

		<div class="search-archive">
			<?php if ( is_day() ) : ?>
				<div class="showing"><?php _e( 'Daily archives:', 'brave' ); ?> <span><?php printf( get_the_date() ); ?></span></div>
			<?php elseif ( is_month() ) : ?>
				<div class="showing"><?php _e( 'Monthly archives:', 'brave' ); ?> <span><?php printf( get_the_date( _x( 'F Y', 'monthly archives format', 'brave' ) ) ); ?></span></div>
			<?php elseif ( is_year() ) : ?>
				<div class="showing"><?php _e( 'Yearly archives:', 'brave' ); ?> <span><?php printf( get_the_date( _x( 'Y', 'yearly archives format', 'brave' ) ) ); ?></span></div>
			<?php else : ?>
				<?php ( 'Blog Archives' ); ?>
			<?php endif; ?>
		</div>
	
	<?php while (have_posts()) : the_post(); ?>
	
		<!-- BEGIN LOOP + SEPARATOR -->
		<?php get_template_part('includes/loop'); ?>
		<div class="separator"></div>
		<!-- END LOOP + SEPARATOR -->

	<?php endwhile; ?>

		<!-- BEGIN INCLUDE PAGINATION -->
		<?php get_template_part('includes/pagination'); ?>
		<!-- END INCLUDE PAGINATION -->

	<?php endif; ?>			
	
</div>
<!-- /#content -->

<?php get_footer(); ?>