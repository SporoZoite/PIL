<?php
/**
 * Template Name: Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="contact-part">
<div id="contact-container">
<div class="row" id="contact-row">
	<div class="col" id="contact-col-1" style="width: 29.5rem;
    flex: 0 0 29.5rem;max-width: 29.5rem;">
      <h2 class= "contact-title">Contact</h2>
	  <div class="contact-adress">
	  <p class="contact-text">
		  Rue de Mulhouse, 36
		  <br>
		  4020 Liège Belgique
	  </p>
	  <a href="">
      <button id="contact-btn">
	   Itinéraire
           <img id="contact-pointer" src="<?php echo get_template_directory_uri(); ?>/img/marker-map.svg" alt="pointer">
      </button>
      </a>
	  </div>
	</div>
	<div class="col"style="width: 0.063rem;
    flex: 0 0 0.063rem;max-width: 0.063rem;" id="contact-vertical-divider">
<span class="contact-vertical-line"></span>
</div>

	<div class="col" id="contact-col-2" style="width: 81.75rem;
    flex: 0 0 81.75rem;max-width: 81.75rem;">
      <h2 class="contact-mail">
		  info@lepole.be
</h2>
	  <div class="contact-phone">
	  <img id="contact-add" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add">
      <h2 class="contact-phone-number">
		  32 4 239 69 01
</h2>
      </div>

	  <div class="contact-map">
	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23906.18178591372!2d5.562535538794178!3d50.64000776927387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f0abf7d8c7d3%3A0xcafe05be0243b139!2sLe%20P%C3%B4le%20Image%20de%20Li%C3%A8ge!5e0!3m2!1sfr!2snl!4v1633538861046!5m2!1sfr!2snl"
		width="1324" height="624" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	  <img id="contact-big-pointer" src="<?php echo get_template_directory_uri(); ?>/img/marker-map.svg" alt="pointer">
	  </div>
    </div>

</div>
</div>
</div>

<div class="contact-horizontal-divider">
<span class="contact-horizontal-line"></span>
</div>


<?php
get_footer();
