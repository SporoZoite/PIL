<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="container-fluid" id="wrapper-footer">

<div class="footer-horizontal-divider">
<span class="footer-horizontal-line"></span>
</div>

<div class="row" id="footer-row">

<div class="col" id="footer-first-part">
  <div class="row" id="footer-heading">
	Le Pôle Image
	<br>
	de Liège
  </div>
  <div class="row" id="footer-adress">
	<div id="footer-adress-1">
	info@lepole.be
	</div>
	<div id="footer-adress-2">
	Rue de Mulhouse, 36
	</div>
	<div id="footer-adress-3">
	4020 Liège, Belgique
	</div>
  </div>
</div>

<div class="col" id="footer-phone-part">
	<span class="footer-circle">
  <div class="footer-phone">
    +32 4 239 69 01
  </div>
</span>
</div>

<div class="col" id="footer-vertical-divider">
<span class="footer-vertical-line"></span>
</div>

<div class="col" id="nav-footer-col">
	  <div id="nav-footer">
           <?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container'       => false,
						'menu_class'      => 'nav-footer',
						'fallback_cb'     => '',
						'depth'           => 2,
						'menu'            => 4,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
       </div>

	   <div id="nav-c">
	   Le Pôle Image © 2021.
	   <br>
       Politique de confidentialité
	   </div>

</div>

<div class="col">
</div>

<div class="col" id="footer-infos">
	<div id="footer-infos-container">
	  <div id="design-by">
	  <p class= "footer-info">Design by <strong>savoirfaire.digital</strong>
			</p>
	  </div>
	  <div id="coding-by">
	  <p class="footer-info">Coding by  <strong>becode.org</strong>
	  </p>
	  </div>
	  </div>
</div>

    </div>
</div>


</div><!-- wrapper end -->


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

