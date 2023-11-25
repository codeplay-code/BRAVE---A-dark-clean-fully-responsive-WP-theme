<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
<div class="content-wrapper">
	<div id="content" class="clearfix">
		<div class="page-wrapper">
			<div class="archive-content">
				<h5><?php _e( 'Yearly', 'brave' ); ?></h5>
				<ul><?php wp_get_archives( array( 'type' => 'yearly', 'limit' => '12', 'show_post_count' => 1 ) ); ?></ul>
				<br>
				<h5><?php _e( 'Monthly', 'brave' ); ?></h5>
				<ul><?php wp_get_archives( array( 'type' => 'monthly', 'limit' => '12', 'show_post_count' => 1 ) ); ?></ul>
				<br>
				<h5><?php _e( 'Authors', 'brave' ); ?></h5>
				<ul><?php wp_list_authors(TRUE, TRUE, TRUE); ?></ul>
				<br>
				<h5><?php _e( 'Categories', 'brave' ); ?></h5>
				<ul><?php wp_list_categories( array( 'title_li' => '', 'show_count' => 1 ) ); ?></ul>
				<br>
				<h5><?php _e( 'Tags', 'brave' ); ?></h5>
				<?php wp_tag_cloud('smallest=16&largest=16&unit=px&orderby=count'); ?>
				<br><br>
				<h5><?php _e( 'Latest posts', 'brave' ); ?></h5>
				<ul><?php $recent_posts = wp_get_recent_posts('numberposts=5');
				foreach( $recent_posts as $recent ){
				echo '<li>- <a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a><br></li> '; } ?></ul>
			</div>
		</div>
	</div>
</div>
<!-- /.content-wrapper -->
		
<!-- BEGIN PAGE BOTTOM PADDING -->
<div class="page-bottom-padding"></div>
<!-- END PAGE BOTTOM PADDING -->

<?php get_footer(); ?>