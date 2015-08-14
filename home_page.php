<?php /*
Template Name: Home
*/

get_header(); ?>

	<div id="primary" class="home-content-area">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="main-image-slider">
<!-- 		<img src="<?php bloginfo('template_url'); ?>/images/NYC.jpg"></img>
 -->	</div>
	
	<div class="home-grid-menu">
		<a class="box">Film</a>
		<a class="box">Theatre</a>
		<a class="box">Events</a>
	</div>

<?php get_footer(); ?>