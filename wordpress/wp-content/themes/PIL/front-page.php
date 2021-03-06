<?php

/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */



// var_dump($embed);


// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');


// EMBED A VIDEO / IMAGE

$embed = get_field('embed_a_video');
$image1 = get_field('home_image_1');
$picture1 = $image1['sizes']['large'];


?>



<div id="home-first-part">

	<div id="home-title">
		<h1 id="home-titre"><?php the_field('home-page-title'); ?></h1>

		<p id="titre"><?php the_field('titre'); ?></p>
		<?php if ($embed) {
			echo $embed;
		} else {
			echo '<img src="' . $picture1 . '"class="img-fluid" id="picture1">';
		} ?>

        <a href="#here">
		<div class="scroll-down">
			<img src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.svg" id="scroll-arrow" alt="arrow-down">
		</div>
	</div>
	</a>

	<div id="home-polygons-container">
		<div id="home-polygons">
			<img class="home-polygons-svg" src="<?php echo get_template_directory_uri(); ?>/img/polygons.svg" alt="polygons">
		</div>
	</div>

	<!-- INTRODUCTION ACF -->
 <div id="here"></div>

	<h3 id="intro-text"><?php the_field('introduction'); ?></h3>


	<div id="container-intro-1">
		<h4 id="home-intro-1"><?php the_field('titre-liste-1'); ?></h4>
		<?php if (have_rows('liste-1')); ?>

		<ul class="list-group" id="list-group-1">

			<?php while (have_rows('liste-1')) : the_row(); ?>

				<li class="list-group-item">

					<?php the_sub_field('items-1'); ?>
				</li>

			<?php endwhile; ?>

		</ul>
	</div>

	<div id="container-intro-2">
		<h4 id="home-intro-2"><?php the_field('titre-liste-2'); ?></h4>
		<?php if (have_rows('liste-2')); ?>

		<ul class="list-group" id="list-group-2">

			<?php while (have_rows('liste-2')) : the_row(); ?>

				<li class="list-group-item">

					<?php the_sub_field('items-2'); ?>
				</li>

			<?php endwhile; ?>

		</ul>
	</div>


	<!-- <div class="row" id="home-cluster">
		<div class="col" id="home-cluster-titre"><?php the_field('introduction'); ?>
			<h3>Le plus grand cluster d???entreprises wallon d??di?? ?? l???audiovisuel,
				aux m??tiers du digital, au gaming et ?? l???AR/VR.</h3>
		</div>

		<div class="col" id="home-cluster-liste-1">
			<h4 id="home-cluster-liste-1-titre">Installation
				?? la pointe</h4>
			<ul>Liste 1</ul>
		</div>

		<div class="col" id="home-cluster-liste-2">
			<h4 id="home-cluster-liste-2-titre">Plus qu'un lieu de travail</h4>
			<ul>Liste 2</ul>
		</div>

	</div> -->



	<div id="home-scrolling-text-container">
		<p id="home-scrolling-text">30<img class="home-scrolling-text-add" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add"> entreprises <span style="color: #4B4B4B"> /</span> 400<img class="home-scrolling-text-add" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add"> personnes <span style="color: #4B4B4B"> /</span> 35<img class="home-scrolling-text-add" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add"></p>
		</p>
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
		<p id="home-sectors-subtitle">Une entreprise du P??le peut vous aider!</p>

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

</div> <!-- end first part div -->


<div id="home-formations">

	<div id="home-formations-circle-container">
		<div id="home-formations-circle">
		</div>
	</div>

	<?php
	$image2 = get_field('home-formations-image');
	$picture2 = $image2['sizes']['large'];
	?>

	<?php
	echo '<img src="' . $picture2 . '"class="img-fluid" id="home-formations-image">';
	?>


	<h1 id="home-formations-titre">Formations audiovisuel</h1>
	<p id="home-formations-subtitle">Vous souhaitez vous former ?? un m??tier ou une comp??tence en p??nurie en Wallonie ?</p>
	<p id="home-formations-text">Rendez-vous sur le site de l???ACA, notre projet d??di??
		?? la formation dans l???audiovisuel pour obtenir toutes les informations n??cessaires !
		Chaque ann??e, plusieurs formations sont organis??es en partenariat avec Technifutur,
		des entreprises du P??le et l???ACA.</p>

	<div class="home-formations-lists-container">
		<div class="home-formations-list" id="home-formations-list-1">
			<ul id="home-formations-list-ul-1">
				<li><img class="home-formation-list-plus" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add">D??veloppeur web par Becode</li>
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


	<a href="#" class="home-formations-btn">
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
			<li class="home-entreprise">D??rives</li>
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
