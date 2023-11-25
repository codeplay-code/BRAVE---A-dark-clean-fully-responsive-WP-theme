<?php get_header(); ?>

<div id="content" class="clearfix">
	<div class="content-wrapper">

		<!-- BEGIN FEATURED IMAGE -->
		<?php the_post_thumbnail(); ?>
		<!-- END FEATURED IMAGE -->

		<!-- BEGIN SHORTCODE OUTSIDE THE LOOP -->
		<?php $shortcode = get_post_meta($post->ID, 'Shortcode', true); ?><?php echo do_shortcode($shortcode); ?>
		<!-- END SHORTCODE OUTSIDE THE LOOP -->

		<div class="page-wrapper">
			<?php while ( have_posts() ) : the_post(); ?>

				<!-- BEGIN PAGE TITLE -->
				<h1 class="page-title"><?php the_title(); ?></h1>
				<!-- END PAGE TITLE -->

				<!-- BEGIN MINI DIVIDER -->
				<div class="mini-divider"></div>
				<!-- END MINI DIVIDER -->

				<!-- BEGIN PAGE CONTENT -->
				<div class="entry-content"><?php the_content(); ?></div>
				<!-- END PAGE CONTENT -->

				<!-- BEGIN POST NAVIGATION -->
				<div class="link-pages">
					<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:', 'brave').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div>
				<!-- END POST NAVIGATION -->

				<!-- BEGIN EDIT POST LINK -->
				<?php edit_post_link(__('- edit -', 'brave')); ?>
				<!-- END EDIT POST LINK -->

			<?php endwhile; ?>
		</div>

	</div>
</div>
<!-- /#content -->

<!-- BEGIN COMMENTS -->
<?php comments_template(); ?>
<!-- END COMMENTS -->

<!-- BEGIN AUTO-EXPAND TEXTAREA -->
<script>
jQuery(document).ready(function() {
	jQuery( "textarea" ).autogrow();
});
</script>
<!-- END AUTO-EXPAND TEXTAREA -->

<!-- BEGIN PAGE BOTTOM PADDING -->
<div class="page-bottom-padding"></div>
<!-- END PAGE BOTTOM PADDING -->

<?php get_footer(); ?>