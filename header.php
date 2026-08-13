<?php
/**
 * The header for our theme
 *
 * @package CT_Custom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ct-custom' ); ?></a>

	<div class="top-bar">
		<div class="top-bar-phone">
			<?php esc_html_e( 'Call Us Now!', 'ct-custom' ); ?>
			<?php $ct_phone = get_theme_mod( 'ct_custom_phone', '385.154.11.28.35' ); ?>
			<?php if ( $ct_phone ) : ?>
				<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $ct_phone ) ); ?>"><?php echo esc_html( $ct_phone ); ?></a>
			<?php endif; ?>
		</div>
		<div class="top-bar-links">
			<a href="<?php echo esc_url( wp_login_url() ); ?>"><?php esc_html_e( 'Login', 'ct-custom' ); ?></a>
			<a href="<?php echo esc_url( wp_registration_url() ); ?>"><?php esc_html_e( 'Signup', 'ct-custom' ); ?></a>
		</div>
	</div><!-- .top-bar -->

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			$ct_logo_url = get_theme_mod( 'ct_custom_logo' );
			if ( $ct_logo_url ) :
				?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link">
					<img src="<?php echo esc_url( $ct_logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				</a>
				<?php
			else :
				the_custom_logo();
			endif;
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$ct_custom_description = get_bloginfo( 'description', 'display' );
			if ( $ct_custom_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $ct_custom_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ct-custom' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">