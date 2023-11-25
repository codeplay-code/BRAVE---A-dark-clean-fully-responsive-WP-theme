<?php get_header(); ?>		

<div id="content" class="clearfix">

	<?php // the loop ?>
	<?php if (have_posts()) : ?>

		<div class="search-archive">
			<div class="showing">
				<?php _e('Showing posts in category:', 'brave'); ?> <?php printf( '%s', '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
			</div>
			<?php $category_description = category_description(); if ( ! empty( $category_description ) ) echo '<div class="archive-meta">' . $category_description . '</div>'; get_template_part( 'loop', 'category' ); ?>
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