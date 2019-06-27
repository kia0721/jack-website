<?php
/**
 * The template for displaying homepage.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 Template name: Homepage
 *
 * @package Cartel
 */
 
get_header(); ?>
 
<!-- slideshow  -->
<div class="home-slideshow">
<div class="flexslider">
<ul class="slides">
<?php

$slidecount = ft_of_get_option('slide_number','4');

$args = array( 'posts_per_page' => $slidecount, 'post_type' => 'slide');
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<?php $slidelink = get_post_meta($post->ID, '_slide_link', true); ?>
<li>

	
		<?php 
		$thumb = get_post_thumbnail_id();
		$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
		$image = aq_resize( $img_url, 1280, 500, true ); //resize & crop the image
		?>
		<?php if($image) : ?>
			<a href="<?php echo $slidelink ?>"><img src="<?php echo $image ?>" alt="<?php the_title(); ?>" /></a>
		<?php endif; ?>
		
		<div class="container-fluid" ><div class="row">
		<div class="col-md-12">
			<div class="flex-caption">
				
				
				
			</div>
				
			</div>
		</div></div>
		
</li>

<?php endforeach; 
wp_reset_postdata();?>
</ul>
</div>
</div>

<!-- slideshow  -->



<!-- Blog posts -->
<div class="home-blog"><div class="container-fluid" style='padding: 0 85px;'><div class="row">
	<div class="col-md-12"> 
		<div class="sec-title">
			<h2><?php _e( 'From the Blog', 'cartel' ); ?></h2>	
			<span> <?php _e( 'Latest news and articles from our blog', 'cartel' ); ?> </span>
		</div>
	</div>

<?php
$args = array( 'posts_per_page' => 3);
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	<div class="col-sm-4 home-post" >
		<div class="homepost-content" style='min-height:500px;max-height:500px !important;'>
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
	
</div>
<?php endforeach; 
wp_reset_postdata();?>
</div></div></div>
<!-- Blog posts -->




<?php get_footer(); ?>
