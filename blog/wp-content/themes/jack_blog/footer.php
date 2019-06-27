<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 */

?>

		<div><!-- #content -->

		
			
		<footer id="colophon" class="site-footer" role="contentinfo">
			
			<div class="wrap">
				<H5> <center> Gallery </center> </H5>
				<p>	
				</p>
				<?php
				//get_template_part( 'template-parts/footer/footer', 'widgets' );
				echo do_shortcode( '[smartslider3 slider=2]' ); ?>
				<p>
				</p>
				<?php
				if ( has_nav_menu( 'social' ) ) :
				?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'social',
									'menu_class'     => 'social-links-menu',
									'depth'          => 1,
									'link_before'    => '<span class="screen-reader-text">',
									'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
								)
							);
						?>
					</nav><!-- .social-navigation -->
				<?php
				endif;
				?>
				 Copyright &copy; <?php echo date('Y');?> <a href="<?php bloginfo('url'); ?>" title=" <?php bloginfo('name'); ?>"> <?php bloginfo('name'); ?>
				
			</div><!-- .wrap -->
				
		</footer><!-- #colophon -->
			
		
	</div><!-- .site-content-contain -->

	
<?php wp_footer(); ?>

