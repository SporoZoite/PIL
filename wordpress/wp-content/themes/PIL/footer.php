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


<div class="row">
<div class="col"></div>
      <div class="col">
<div id="footer-heading">
	Le Pôle Image <br> de Liège
</div>
<div id="footer-adress">
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

      <div class="col">
<div class="footer-phone">
+32 4 239 69 01
</div>
	</div>

	<div class="col"></div>

      <div class="col">

	  <div id="nav-footer">
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
       </div>

	   <div id="nav-c">
	   Le Pôle Image © 2021.
	   <br>
       Politique de confidentialité
	   </div>

	</div>

	<div class="col"></div>

      <div class="col">
	  <div id="design-by">
	  Design by <strong>savoirfaire.digital</strong>
	  </div>
	  <div id="coding-by">
	  Coding by  <strong>becode.org</strong>
	  </div>
	</div>

	<div class="col"></div>

    </div>
  </div>




</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

