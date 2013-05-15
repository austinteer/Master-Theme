<?php 
/**************************
Template Name: Homepage Template
**************************/
?>

<?php get_header(); ?>

	<div class="large-wrap">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>

			<?php endwhile; ?>
		<?php endif; ?>
				
	</div> <!-- // large-wrap -->

<?php get_footer(); ?>