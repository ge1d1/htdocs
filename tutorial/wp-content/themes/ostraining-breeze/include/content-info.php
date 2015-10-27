<dl class="article-info muted">
    <dd class="createdby"><i class="fa fa-user"></i> <?php _e( 'Written by', 'ostraining-breeze' ); ?>: <?php the_author_posts_link(); ?></dd>
    <dd class="category-name"><i class="fa fa-bars"></i> <?php _e( 'Category', 'ostraining-breeze' ); ?>: <?php the_category(', '); ?></dd>
    <dd class="published"><i class="fa fa-calendar"></i> <?php _e( 'Published', 'ostraining-breeze' ); ?>: <?php the_time( get_option( 'date_format', 'l F d, Y' ) ); ?></dd>
</dl>