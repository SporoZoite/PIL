<?php

/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<div id="home-first-part">

	<h1 id="home-titre"><?php the_field('home-page-title'); ?></h1>

	<div id="arrow-down">
		<img src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.svg" alt="arrow-down">
	</div>

	<div id="home-polygons">
	</div>

	<div class="home-image-container" id="home-image-container">
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

	<div id="home-cercle-1">
	</div>

	<div id="home-ellipse-verticale-1">
	</div>

	<div id="home-ellipse-horizontale-1">
	</div>

	<div id="home-scrolling-text-container">
		<img class="home-scrolling-text-add" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add">
		<img class="home-scrolling-text-add" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add">
		<img class="home-scrolling-text-add" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add">
		<p id="home-scrolling-text">30+ entreprises / 400+ personnes / 35+</p>
	</div>

	<h1 id="home-titre-2">Vous avez un projet </h1>
	<h1 id="home-titre-2-yellow">audiovisuel ou digital?</h1>
	<p id="home-titre-2-subtitle">Une entreprise du Pôle peut vous aider!</p>

	<div class="home-cards-container">

		<div class="home-card">
			<img class="home-card-picto" src="<?php echo get_template_directory_uri(); ?>/img/enveloppe.svg" alt="enveloppe">
			<h4 class="home-card-title">Image</h4>
			<p class="home-card-number">(14)</p>
		</div>

		<div class="home-card">
			<img class="home-card-picto" src="<?php echo get_template_directory_uri(); ?>/img/ellipses.svg" alt="ellipses">
			<h4 class="home-card-title">Ar/Vr</h4>
			<p class="home-card-number">(5)</p>
		</div>

		<div class="home-card">
			<img class="home-card-picto" src="<?php echo get_template_directory_uri(); ?>/img/son.svg" alt="son">
			<h4 class="home-card-title">Son</h4>
			<p class="home-card-number">(8)</p>
		</div>

		<div class="home-card">
			<img class="home-card-picto" src="<?php echo get_template_directory_uri(); ?>/img/arrow-left.svg" alt="arrow-left">
			<h4 class="home-card-title">Digital</h4>
			<p class="home-card-number">(25)</p>
		</div>

		<div class="home-card">
			<img class="home-card-picto" src="<?php echo get_template_directory_uri(); ?>/img/circles.svg" alt="circles">
			<h4 class="home-card-title">Digital</h4>
			<p class="home-card-number">(25)</p>
		</div>

		<div class="home-btn-card">
			<button id="home-card-btn">
				<img class="home-card-picto" src="<?php echo get_template_directory_uri(); ?>/img/arrow-left.svg" alt="arrow-left">
				<p class="home-card-number">(25)</p>
			</button>
		</div>
	</div>

</div> <!-- end first part div -->


<div id="home-formations">

	<img src="<?php echo get_template_directory_uri(); ?>/img/Mask Group 89@2x.jpg" id="home-formations-image">

	<h1 id="home-formations-titre">Formations audiovisuel</h1>
	<p id="home-formations-subtitle">Vous souhaitez vous former à un métier ou une compétence en pénurie en Wallonie ?</p>
	<p id="home-formations-text">Rendez-vous sur le site de l’ACA, notre projet dédié
		à la formation dans l’audiovisuel pour obtenir toutes les informations nécessaires !
		Chaque année, plusieurs formations sont organisées en partenariat avec Technifutur,
		des entreprises du Pôle et l’ACA.</p>

	<div class="home-formations-lists-container">
		<div class="home-formations-list" id="home-formations-list-1">
			<ul id="home-formations-list-ul-1">
				<li><img class="home-formation-list-plus" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add">Développeur web par Becode</li>
				<li><img class="home-formation-list-plus" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add">Animateur 3D / 2D</li>
				<li><img class="home-formation-list-plus" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add">Storyboarding</li>
				<li><img class="home-formation-list-plus" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add">Assistant de production</li>
			</ul>
		</div>
		<div class="home-formations-list" id="home-formations-list-2">
			<ul id="home-formations-list-ul-2">
				<li><img class="home-formation-list-plus" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add">Salles de montage son/image</li>
				<li><img class="home-formation-list-plus" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add">Motion Design</li>
				<li><img class="home-formation-list-plus" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add">Pro Tools</li>
			</ul>
		</div>
	</div>


	<a href="#">
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
			<ul>
				ACA
				Aftertouch
				Barco
				Cluster TWIST
				Cynaptek
				D6D Design Studio
				Defimedia
			</ul>
		</div>

		<div class="col" id="home-entreprises-list-col-2">
			Dérives
			Eye-Lite Corporation Group
			Gambit Financial Solutions
			Instele / Connect-on
			Le Clap!
			M.Constant Consulting Group
			Mikros

		</div>

		<div class="col" id="home-entreprises-list-col-3">
			Rayon9
			Sage
			Signal Flow
			SonicPil
			StudioMilo
			t-heater
			Tapptic

		</div>

		<div class="col" id="home-entreprises-list-col-4">
			Technifutur
			TSF.be
			Wallimage Entreprises
			Wallonie Image Production
			Waooh!
			Wasabi
			Mikros
		</div>

	</div>

</div>

<div id="home-divider"></div>

<?php
get_footer();
