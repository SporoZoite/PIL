<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */


// EMBED A VIDEO

$embed = get_field('embed_a_video');
// var_dump($embed);


// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="home-first-part">

<h1 id="home-titre"><?php the_field('home-page-title'); ?></h1>

<?= $embed; ?>

<div id="arrow-down">
	<img src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.svg" alt="arrow-down">
</div>

<div id ="home-polygons">
</div>

<div class="home-image-container" id="home-image-container">
	<!-- <?php echo $embed; ?> -->
    <img src="#" class="img-fluid" alt="Responsive home-image">
       <div class="btn-container" id="home-video-btn-container">
	    <button class="btn" id="home-video-btn">
		<p id="home-video-btn-text"> Voir la vidéo</p>
        </button>
        <p id="home-video-btn-showreel">SHOWREEL 21</p>
       </div>
</div>

<div class="row" id="home-cluster">
<div class="col" id="home-cluster-titre">
<h3>Le plus grand cluster d’entreprises wallon dédié à l’audiovisuel,
aux métiers du digital, au gaming et à l’AR/VR.</h3>
</div>

<div class="col" id="home-cluster-liste-1">
<h4 id="home-cluster-liste-1-titre">Installation
à la pointe</h4>
<ul>Liste 1</ul>
</div>

<div class="col" id="home-cluster-liste-2">
<h4 id="home-cluster-liste-2-titre">Plus qu'un lieu de travail</h4>
<ul>Liste 2</ul>
</div>

</div>



<div id="home-scrolling-text-container">
<img class="home-scrolling-text-add" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add">
<img class="home-scrolling-text-add" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add">
<img class="home-scrolling-text-add" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add">
<p id="home-scrolling-text">30+ entreprises / 400+ personnes / 35+</p>
</div>

<div id="home-big-circle-container">
<div class="home-big-circle"></div>
</div>

<div id="home-big-ellipse-container">
<div id="home-big-ellipse">
<img class="home-big-ellipse-picto" src="<?php echo get_template_directory_uri(); ?>/img/ellipse.svg" alt="ellipse">
</div>
</div>


<div id="home-sectors">
<h1 id="home-sectors-title">Vous avez un projet </h1>
<h1 id="home-sectors-title-yellow">audiovisuel ou digital?</h1>
<p id="home-sectors-subtitle">Une entreprise du Pôle peut vous aider!</p>

<div class="home-cards-container">

	<div class="home-card">
	<div class="home-card-img">
	<img class="home-card-picto" src="<?php echo get_template_directory_uri(); ?>/img/enveloppe.svg" alt="enveloppe">
	</div>
	<div class="home-card-text">
	<h4 class="home-card-title">Image</h4>
	<p class="home-card-number">(14)</p>
	</div>
	</div>

	<div class="home-card">
	<div class="home-card-img">
	<img class="home-card-picto" src="<?php echo get_template_directory_uri(); ?>/img/ellipses.svg" alt="ellipses">
	</div>
	<div class="home-card-text">
	<h4 class="home-card-title">Ar/Vr</h4>
	<p class="home-card-number">(5)</p>
	</div>
	</div>

	<div class="home-card">
	<div class="home-card-img">
	<img class="home-card-picto" src="<?php echo get_template_directory_uri(); ?>/img/son.svg" alt="son">
	</div>
	<div class="home-card-text">
	<h4 class="home-card-title">Son</h4>
	<p class="home-card-number">(8)</p>
	</div>
	</div>

	<div class="home-card">
	<div class="home-card-img">
	<img class="home-card-picto" src="<?php echo get_template_directory_uri(); ?>/img/arrow-right.svg" alt="arrow-right">
	</div>
	<div class="home-card-text">
	<h4 class="home-card-title">Digital</h4>
	<p class="home-card-number">(25)</p>
	</div>
	</div>

	<div class="home-card">
	<div class="home-card-img" id="picto-rounds">
	<img class="home-card-picto" src="<?php echo get_template_directory_uri(); ?>/img/circles.svg" alt="circles">
	</div>
	<div class="home-card-text">
	<h4 class="home-card-title">Digital</h4>
	<p class="home-card-number">(25)</p>
	</div>
	</div>

	<div class="home-btn-card">
		<button onclick="location.href = '/entreprises/';" id="home-btn-card-btn">
	      <img class="home-btn-card-picto" src="<?php echo get_template_directory_uri(); ?>/img/arrow-right.svg" alt="arrow-right">
	      <p class="home-btn-card-text">Voir toutes les entreprises</p>
	    </button>
	</div>
</div>
</div>

</div> 	<!-- end first part div -->

<img src="" id="home-formations-image">

<div id="home-formations">



<h1 id="home-formations-titre">Formations audiovisuel</h1>
<p id="home-formations-subtitle">Vous souhaitez vous former à un métier ou une compétence en pénurie en Wallonie ?</p>
<p id="home-formations-text">Rendez-vous sur le site de l’ACA, notre projet dédié
	 à la formation dans l’audiovisuel pour obtenir toutes les informations nécessaires !
	 Chaque année, plusieurs formations sont organisées en partenariat avec Technifutur,
	des entreprises du Pôle et l’ACA.</p>

<div class="home-formations-lists-container">
  <div class="home-formations-list" id="home-formations-list-1">
   <ul>List 1</ul>
  </div>
  <div class="home-formations-list" id="home-formations-list-2">
   <ul>List 2</ul>
  </div>
</div>

<a href="">
<button id="home-formations-btn">
	Voir le site ACA
<img id="home-formations-add" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add">
</button>
</a>

<div id="home-formations-circle">

</div>

</div><!-- end home-formations part -->

<div id="home-entreprises">
<h4 id="home-entreprises-titre">Les entreprises</h4>
<div class="row" id="home-entreprises-list-container">

<div class="col" id="home-entreprises-list-col-1">
<li class="home-entreprise">ACA</li>
<li class="home-entreprise">Aftertouch</li>
<li class="home-entreprise">Barco</li>
<li class="home-entreprise">Cluster TWIST</li>
<li class="home-entreprise">Cynaptek</li>
<li class="home-entreprise">D6D Design Studio</li>
<li class="home-entreprise">Defimedia</li>
</div>

<div class="col" id="home-entreprises-list-col-2">
<li class="home-entreprise">Dérives</li>
<li class="home-entreprise">Eye-Lite Corporation Group</li>
<li class="home-entreprise">Gambit Financial Solutions</li>
<li class="home-entreprise">Instele / Connect-on</li>
<li class="home-entreprise">Le Clap!</li>
<li class="home-entreprise">M.Constant Consulting Group</li>
<li class="home-entreprise">Mikros</li>

</div>

<div class="col" id="home-entreprises-list-col-3">
<li class="home-entreprise">Rayon9</li>
<li class="home-entreprise">Sage</li>
<li class="home-entreprise">Signal Flow</li>
<li class="home-entreprise">SonicPil</li>
<li class="home-entreprise">StudioMilo</li>
<li class="home-entreprise">t-heater</li>
<li class="home-entreprise">Tapptic</li>

</div>

<div class="col" id="home-entreprises-list-col-4">
<li class="home-entreprise">Technifutur</li>
<li class="home-entreprise">TSF.be</li>
<li class="home-entreprise">Wallimage Entreprises</li>
<li class="home-entreprise">Wallonie Image Production</li>
<li class="home-entreprise">Waooh!</li>
<li class="home-entreprise">Wasabi</li>
<li class="home-entreprise">Mikros</li>
</div>

</div>

</div>



<?php
get_footer();
