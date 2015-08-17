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
		<figure class="box">
			<img src="<?php bloginfo('template_url'); ?>/images/box1.jpg">
			<figcaption>
				<h2>
					Film
				</h2>
			</figcaption>
			</img>
		</figure>
		<!-- <figure class="box">
			<img src="<?php bloginfo('template_url'); ?>/images/box2.jpg">
			<figcaption>
				<h2>
					Theatre
				</h2>
			</figcaption>
			</img>
		</figure>
		<figure class="box">
			<img src="<?php bloginfo('template_url'); ?>/images/box3.jpg">
			</img>
			<figcaption>
				<h2>
					Events
				</h2>
			</figcatpion>
		</figure> -->
	</div>

<?php get_footer(); ?>