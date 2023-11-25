<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div id="content" class="list-post">

		<!-- BEGIN LOOP + SEPARATOR -->
		<?php get_template_part('includes/loop'); ?>
		<div class="separator"></div>
		<!-- END LOOP + SEPARATOR -->

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

	</div>
	<!-- /#content -->

<?php endwhile; ?>

<?php get_footer(); ?>