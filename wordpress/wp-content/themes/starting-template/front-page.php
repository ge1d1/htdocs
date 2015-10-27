<?php get_header(); ?>

<div class="wrapper">

	<div class="container">

	<?php if(have_posts() ) : while(have_posts()) : the_post(); ?>

		<?php if ( is_sticky ()) { ?>

		<h2><?php the_title(); ?></h2>

		<?php the_content(); ?>

		<?php } else { ?>

    <article class="teaser">

    	<div class="thumb">

    		<a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail() ) { the_post_thumbnail('post-thumbnail'); } ?></a>
		
		</div>

		<div class="excerpt">

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				
			<?php the_excerpt(); ?>

		</div>

		</article>

	<?php }?>
			
<?php endwhile; else: ?>

	<p><?php_e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>

	</div> <!-- .container -->

</div> <!-- .wrapper -->

<?php get_footer(); ?>