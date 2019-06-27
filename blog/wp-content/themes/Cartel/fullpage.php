<?php
/**
 * The template for displaying full width pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 Template name: Fullpage
 * @package Cartel
 */

get_header(); ?>


<div class="container-fluid"><div class="row">

<div class="col-md-12">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

</div></div>
<?php get_footer(); ?>
