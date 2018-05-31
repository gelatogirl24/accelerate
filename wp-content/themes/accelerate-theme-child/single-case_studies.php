<?php
/**
 * The template for displaying case studies
 *
 * @package WordPress
 * @subpackage Accelerate Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

<div id="primary" class="site-content">
	<div class="main-content" role="main">
		<?php while ( have_posts() ) : the_post(); 

			$services = get_field ('services');
			$client = get_field ('client');
			$link = get_field ('site_link');
			$image1 = get_field ('image_1');
			$image2 = get_field ('image_2');
			$image3 = get_field ('image_3'); 
			$size = "full";	?>

			<article class="case-study">
				<aside class="case-study-sidebar">
					<h2><?php the_title(); ?></h2>
					<h5><?php echo $services; ?></h5>
					<h6>Client: <?php echo $client; ?></h6>
					<?php the_content(); ?>
					<a href="<?php echo $link; ?>" class="view-live-site">View Live Site</a>
				</aside>

				<div class="case-study-images">
					<?php if (image1) {
						echo wp_get_attachment_image ($image1, $size); 
					}?>

					<?php if (image2) {
						echo wp_get_attachment_image ($image2, $size);
					} ?>

					<?php if (image3) {
					echo wp_get_attachment_image ($image3, $size); 
					} ?>
				</div>
			</article>
			
		<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->
</div><!-- #primary -->

<nav id="navigation" class="container">
	<div class="left"><a href="<?php echo site_url('/case-studies/') ?>">&larr; <span>Back to Work</span></a></div>
</nav>

<?php get_footer(); ?>