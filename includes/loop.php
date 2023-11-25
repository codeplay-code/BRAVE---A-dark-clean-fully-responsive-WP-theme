<?php if(!is_single()) : global $more; $more = 0; endif; //enable more link ?>

<div class="content-wrapper">

    <!-- BEGIN FEATURED IMAGE -->
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    <!-- END FEATURED IMAGE -->

    <!-- BEGIN SHORTCODE OUTSIDE THE LOOP -->
    <?php $shortcode = get_post_meta($post->ID, 'Shortcode', true); ?><?php echo do_shortcode($shortcode); ?>
    <!-- END SHORTCODE OUTSIDE THE LOOP -->

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <!-- BEGIN DATE + POST AUTHOR -->
        <div class="post-meta-date-author">
            <?php _e( 'Posted on', 'brave' ); ?> <time datetime="<?php echo esc_attr( the_time('o-m-d') ); ?>"><?php the_time('M j, Y') ?></time>, <?php _e( 'by', 'brave' ); ?> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php printf( get_the_author() ); ?></a>
        </div>
        <!-- END DATE + POST AUTHOR -->

        <!-- BEGIN TITLE -->
        <h1 class="post-title"><a class="hide-for-post-formats" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'brave' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php if ( is_sticky() ) { ?><span class="sticky-marker"><?php _e( 'Sticky:', 'touch' ); ?></span><?php } ?><?php the_title(); ?></a> 

        <?php if ( have_comments() || comments_open() ) : ?>
        <span class="post-title-comments"><a href="<?php the_permalink(); ?>#respond"><?php comments_number( '<span class="no-comments">'.__('no comments', 'brave').'</span>', '<span class="has-comments">1 '.__('comment', 'brave').'</span>', '<span class="has-comments">% '.__('comments', 'brave').'</span>' ); ?></a></span>
        <?php else : if ( ! comments_open() ) :?>
        <span class="post-title-comments"><a href="<?php the_permalink(); ?>#respond-closed"><span>Comments closed</span></a></span>
        <?php endif; // end ! comments_open() ?>
        <?php endif; // end have_comments() || comments_open() ?>

        </h1>
        <!-- END TITLE -->

        <!-- BEGIN MINI DIVIDER -->
        <div class="mini-divider"></div>
        <!-- END MINI DIVIDER -->

        <!-- BEGIN CONTENT -->
        <div class="entry-content">
            <?php the_content( __( 'Continues..', 'brave' ) ); ?>
        </div>
        <!-- END CONTENT -->

        <!-- BEGIN COMMENT COUNT + TAGS -->
        <div class="post-meta">
            <?php the_tags('Tagged with: ',', '); ?>
        </div>
        <!-- END COMMENT COUNT + TAGS -->

        <!-- BEGIN POST NAVIGATION -->
        <div class="link-pages">
            <?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:', 'brave').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        </div>
        <!-- END POST NAVIGATION -->

        <!-- BEGIN EDIT POST LINK -->
        <?php edit_post_link(__('- edit -', 'brave')); ?>
        <!-- END EDIT POST LINK -->

    </article>
</div>
<!-- /.post -->