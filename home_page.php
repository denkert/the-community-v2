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
		<?php 
    		echo do_shortcode("[metaslider id=131]"); 
		?>
 	</div>
	
	<div class="home-grid-menu">
		<a class="box effect-bubba" href="thecommunitynyc.com/productions/films">
			<img src="<?php bloginfo('template_url'); ?>/images/box1.png" />
			<span class="caption">
				<h2>Film</h2>
			</span>
		</a>
		<a class="box effect-bubba" href="thecommunitynyc.com/productions/theatre">
			<img src="<?php bloginfo('template_url'); ?>/images/box2.png" />
			<span class="caption">
				<h2>Theatre</h2>
			</span>
		</a>
		<a class="box effect-bubba" href="thecommunitynyc.com/productions/about">
			<img src="<?php bloginfo('template_url'); ?>/images/box3.png" />
			<span class="caption">
				<h2>Events</h2>
			</span>
		</a>
	</div>

<?php get_footer(); ?>