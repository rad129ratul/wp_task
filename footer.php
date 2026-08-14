<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CT_Custom
 */

?>
	<?php if ( ! is_front_page() ) : ?>
	<div class="reach-us-wrap">
		<div class="reach-us">
			<h2 class="section-heading"><?php esc_html_e( 'Reach Us', 'ct-custom' ); ?></h2>
			<div class="reach-us-content">
				<p class="reach-us-address"><?php echo nl2br( esc_html( get_theme_mod( 'ct_custom_address', "Coalition Skills Test\n535 La Plata Street\n4200 Argentina" ) ) ); ?></p>
				<p class="reach-us-contact">
					Phone: <?php echo esc_html( get_theme_mod( 'ct_custom_phone', '385.154.11.28.38' ) ); ?><br>
					Fax: <?php echo esc_html( get_theme_mod( 'ct_custom_fax', '385.154.35.66.78' ) ); ?>
				</p>
				<div class="reach-us-social">
					<a href="#" class="social-facebook"><span class="dashicons dashicons-facebook-alt"></span></a>
					<a href="#" class="social-twitter"><span class="dashicons dashicons-twitter"></span></a>
					<a href="#" class="social-linkedin"><span class="dashicons dashicons-linkedin"></span></a>
					<a href="#" class="social-pinterest"><span class="dashicons dashicons-pinterest"></span></a>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>

	</div><!-- #content -->
	</div><!-- .content-and-reach-us -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.
		</div>
	</footer>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>