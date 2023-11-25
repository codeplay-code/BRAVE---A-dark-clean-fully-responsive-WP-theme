<?php get_header(); ?>		

<div id="content" class="clearfix">

	<?php // the loop ?>
	<?php if (have_posts()) : ?>
	
		<div class="search-archive">
			<div class="showing">
				<?php _e( 'Showing posts with tag:', 'brave' ); ?> <?php printf( '<span>' . single_tag_title( '', false ) . '</span>' ); ?>
			</div>
			<?php $tag_description = tag_description(); if ( ! empty( $tag_description ) ) echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' ); ?>
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