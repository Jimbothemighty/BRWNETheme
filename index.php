<?php get_header(); ?>

  
    <?php get_template_part( 'sidebar-parallax', get_post_format() ); ?>  
    
	<div class="main_and_sidebar">
		<div class="main-content">
					<div id="middle">&middle;</div>				
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );
					endwhile; endif; ?>
					<?php get_template_part( 'sidebar-secondary', get_post_format() ); ?>
		</div> <!-- close main-content class -->
		<?php get_sidebar(); ?>
	</div> <!-- close main_and_sidebar -->
	<?php get_footer(); ?>


</body>
</html>