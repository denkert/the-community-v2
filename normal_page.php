<?php /*
Template Name: Normal
*/

get_header(); ?>

	<div id="primary" class="normal-content-area">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>