<?php get_header(); ?>

	
		<div class="main-content">	

			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );
				endwhile; endif; 
			?>

		</div>
	

<?php get_footer(); ?>