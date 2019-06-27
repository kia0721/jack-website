<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Cartel
 */

get_header(); ?>



<div class="container"><div class="row">

<div class="col-md-12">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<div class="col-md-4">
	<?php get_sidebar(); ?>
</div>
</div> </div>
<?php get_footer(); ?>