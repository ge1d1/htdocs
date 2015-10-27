<div class="page-header">
    <?php if ( is_single() ) : ?>
        <h1><?php the_title(); ?></h1>
    <?php else: ?>
        <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php endif; ?>
</div>