<?php
/**
 * Template Name: Full Width Page
 *
 * @package Kaira
 */

get_header(); ?>
<div id="content" class="site-content">
      <div class="container">
        <div class="row">
        	
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>
	</div>
	
<?php 
get_footer();
 ?>