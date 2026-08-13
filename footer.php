<?php
/**
 * The template for displaying the footer
 *
 * @package CT_Custom
 */

?>

	</div><!-- #content -->

	<div class="reach-us-wrap">
		<div class="reach-us">
			<h2><?php esc_html_e( 'Reach Us', 'ct-custom' ); ?></h2>
			<p class="reach-us-address"><?php echo nl2br( esc_html( get_theme_mod( 'ct_custom_address', "Coalition Skills Test\n535 La Plata Street\n4200 Argentina" ) ) ); ?></p>
			<p class="reach-us-contact">
				Phone: <?php echo esc_html( get_theme_mod( 'ct_custom_phone', '385.154.11.28.38' ) ); ?><br>
				Fax: <?php echo esc_html( get_theme_mod( 'ct_custom_fax', '385.154.35.66.78' ) ); ?>
			</p>
			<div class="reach-us-social">
				<?php
				$ct_social_icons = array(
					'facebook'  => 'dashicons-facebook-alt',
					'twitter'   => 'dashicons-twitter',
					'linkedin'  => 'dashicons-linkedin',
					'pinterest' => 'dashicons-pinterest',
				);
				foreach ( $ct_social_icons as $ct_social => $ct_icon_class ) :
					$ct_url = get_theme_mod( 'ct_custom_social_' . $ct_social, '#' );
					?>
					<a href="<?php echo esc_url( $ct_url ); ?>" class="social-<?php echo esc_attr( $ct_social ); ?>" aria-label="<?php echo esc_attr( ucfirst( $ct_social ) ); ?>">
						<span class="dashicons <?php echo esc_attr( $ct_icon_class ); ?>" aria-hidden="true"></span>
					</a>
					<?php
				endforeach;
				?>
			</div>
		</div><!-- .reach-us -->
	</div><!-- .reach-us-wrap -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ct-custom' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'ct-custom' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ct-custom' ), 'ct-custom', '<a href="https://coalitiontechnologies.com/">Coalition Technologies</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>