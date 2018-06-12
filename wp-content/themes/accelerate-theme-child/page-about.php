<?php
/**
 * The template for displaying about pages
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="about-page about-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="services">
		<h2>Our Services</h2>
		<p>We take pride in our clients and the content we create for them. 
Here’s a brief overview of our offered services.</p>
		 <div class="services-content">
	   	 	<?php
	   	 	query_posts('posts_per_page=4&post_type=services&order=ASC'); ?>

		  		<?php while ( have_posts() ) : the_post();

		  		$image = get_field ('image');
		  		$size = "medium"; ?>
		  		<div class="individual-service">
		  			<div class="service-img">
		  				<?php if (image) {
							echo wp_get_attachment_image ($image, $size); 
			 			}?>
			 		</div>
		    	 	<div class="service-text">
		    	 		<h4><?php the_title(); ?></h4>
		    	 		<p><?php the_content(); ?></p>
		    	 	</div>
		    	 </div>
		  		<?php endwhile; ?> 
		 	<?php wp_reset_query(); ?>
		 </div>
	</section>
	<div class="work-with-us site-content">
		<div class="work-with-us-content">
			<span>Interested in working with us?</span> <a class="button" href="/accelerate/contact">Contact Us</a>
		</div>
	</div>

<?php get_footer(); ?>
