<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
	<div id="header">

	<!-- ******************* The Navbar Area ******************* -->

	<div id="wrapper-navbar">

	<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>


		<nav id="main-nav" class="navbar navbar-expand-md navbar-dark " aria-labelledby="main-nav-label">




					<!-- Your site title as branding in the menu -->

                  <div class="header-logo-container">
					  <a href="<?php echo home_url();?>">
					  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Pôle Image Logo">
                      </a>
				  </div>

					<!-- end custom logo -->


				<button class="navbar-toggler ml-auto custom-toggler " type="button" data-toggle="collapse"
				data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
				aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation',
				'understrap' ); ?>">
					<span class="navbar-toggler-icon">
					</span>
				</button>

				<div id="navbarNavDropdown" class="collapse navbar-collapse justify-content-stretch">

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container'       => false,
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>

				<ul id="menu-contact" class="navbar-nav ml-auto">
				<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28 nav-item">
						Contact
						<a id="contact-button" title="Contact" href="/contact/" class="nav-link">
						<img id='arrow-contact' src="<?php echo get_template_directory_uri(); ?>/img/arrow-conctact.svg" alt="arrow">
						</a>
			</li>
			</ul>
				</div>


		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
	</div><!-- #header end -->

	<div class="left-nav">
		<div class="social-networks-container">
	            <?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container'       => false,
						'menu_class'      => 'left-navbar-nav',
						'fallback_cb'     => '',
						'depth'           => 2,
						'menu'            => 3,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
		</div>
	</div>

