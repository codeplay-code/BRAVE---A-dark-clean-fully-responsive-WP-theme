<?php get_header(); ?>		

<div id="content" class="clearfix">

    <?php // the loop ?>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <!-- BEGIN LOOP + SEPARATOR -->
        <?php get_template_part('includes/loop'); ?>
        <div class="separator"></div>
        <!-- END LOOP + SEPARATOR -->

    <?php endwhile; ?>

        <!-- BEGIN INCLUDE PAGINATION -->
        <?php get_template_part('includes/pagination'); ?>
        <!-- END INCLUDE PAGINATION -->

    <?php else : ?>
        
        <!-- BEGIN NO CONTENT FOUND -->
        <p><?php _e( 'Apologies, nothing found.', 'brave' ); ?></p>
        <!-- END NO CONTENT FOUND -->
        
    <?php endif; ?> 

</div>
<!-- /#content -->

<?php get_footer(); ?>