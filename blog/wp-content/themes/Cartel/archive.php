<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cartel
 */

get_header(); ?>

<div class="container-fluid" style='padding:0 85px;'>
<div class="row">
<div class="col-md-12" > 
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="col-lg-4" style='min-height:500px;'>
				<?php 
				$thumb = get_post_thumbnail_id();
				$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
				$image = aq_resize( $img_url, 720, 400, true ); //resize & crop the image
				?>
				<?php if($image) : ?>
					<a href="<?php the_permalink(); ?>"><img src="<?php echo $image ?>" alt="<?php the_title(); ?>" /></a>
				<?php endif; ?>
				<div class="homepost-entry">
					<h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
					<div class="entry-meta">
						<?php cartel_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php the_excerpt(); ?>
				</div>
			</div>
			<?php endwhile; ?>

			<?php if (function_exists('wp_pagenavi')){ wp_pagenavi(); } ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		
		</main><!-- #main -->
	</section><!-- #primary -->
	
</div></div>

<div class="col-md-4">
	<?php get_sidebar(); ?>
</div>

</div>
<?php get_footer(); ?>
