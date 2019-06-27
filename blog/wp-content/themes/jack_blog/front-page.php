<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php
		// Show the selected front page content.
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif;
		?>
		
		
		<?php
		// Show the Categories.
		?>
		
		<H5> <center> From the Blog </center> </H5>
		
		<p>	
		</p>
		<?php
		// Show the blog.
		echo do_shortcode('[wcp-carousel id="163"] ');
		?>
		
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
