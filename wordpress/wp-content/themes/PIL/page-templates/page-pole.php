<?php
/**
 * Template Name: Le Pôle
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

<div id="pole-first-part">
<div id="pole-big-ellipse-container">
		<div id="pole-big-ellipse">
			<img class="pole-big-ellipse-picto" src="<?php echo get_template_directory_uri(); ?>/img/ellipse.svg" alt="ellipse">
		</div>
	</div>

<h1 id="pole-title">Le <span style="color: #FFC33B">grand cluster</span> dédié aux industries créatives</h1>
<p id="pole-intro"> Installé dans une ancienne fabrique de tabac totalement
	 rénovée, le Pôle est devenu le plus grand cluster d’entreprises wallon
	  dédié à l’audiovisuel, aux métiers du digital ainsi qu’au gaming et à
	   l’AR/VR.</p>

</div>

<div id="pole-video-container">
<img id="pole-video-temporary" src="<?php echo get_template_directory_uri(); ?>/img/Mask Group 98@2x.jpeg" alt="temp-img">
</div>

<div id="pole-second-part">
<div id="pole-circle-container">
		<div id="pole-circle">
		</div>
	</div>

<div id="pole-scrolling-text-container">
		<p id="pole-scrolling-text">
			30<img class="pole-scrolling-text-add" src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add"> entreprises / 400<img class="pole-scrolling-text-add"src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add"> personnes / 35<img class="pole-scrolling-text-add"src="<?php echo get_template_directory_uri(); ?>/img/add.svg" alt="add"></p>
</div>

<div id="pole-team-container">
	<h2 id="pole-team-title">Notre équipe</h2>

	<div class="pole-team-photos-container">

		<div class="pole-team-photo-row">

		<div class="pole-team-photo-card">
		<img class="pole-team-photo" src="<?php echo get_template_directory_uri(); ?>/img/caroline.png" alt="add">
			<div class="pole-team-photo-hover">
			<p class="pole-team-photo-name">Caroline</p>
			   <div class="pole-team-photo-foot">
				<p class="pole-team-photo-role">Rôle/sous-rôle</p>
				<p class="pole-team-photo-email">caroline@lepole.be</p>
			   </div>
			</div>
		</div>

		<div class="pole-team-photo-card">
		<img class="pole-team-photo" src="<?php echo get_template_directory_uri(); ?>/img/yuvraj.png" alt="add">
			<div class="pole-team-photo-hover">
			<p class="pole-team-photo-name">Yuvraj</p>
			   <div class="pole-team-photo-foot">
				<p class="pole-team-photo-role">Rôle/sous-rôle</p>
				<p class="pole-team-photo-email">yuvraj@lepole.be</p>
			   </div>
			</div>
		</div>

		<div class="pole-team-photo-card">
		<img class="pole-team-photo" src="<?php echo get_template_directory_uri(); ?>/img/andrea.png" alt="add">
			<div class="pole-team-photo-hover">
			<p class="pole-team-photo-name">Andrea</p>
			   <div class="pole-team-photo-foot">
				<p class="pole-team-photo-role">Rôle/sous-rôle</p>
				<p class="pole-team-photo-email">andrea@lepole.be</p>
			   </div>
			</div>
		</div>

		</div>

		<div class="pole-team-photo-row">

		<div class="pole-team-photo-card">
		<img class="pole-team-photo" src="<?php echo get_template_directory_uri(); ?>/img/J.png" alt="add">
			<div class="pole-team-photo-hover">
			<p class="pole-team-photo-name">J</p>
			   <div class="pole-team-photo-foot">
				<p class="pole-team-photo-role">Rôle/sous-rôle</p>
				<p class="pole-team-photo-email">j@lepole.be</p>
			   </div>
			</div>
		</div>

		<div class="pole-team-photo-card">
		<img class="pole-team-photo" src="<?php echo get_template_directory_uri(); ?>/img/alex.png" alt="add">
			<div class="pole-team-photo-hover">
			<p class="pole-team-photo-name">Alex</p>
			   <div class="pole-team-photo-foot">
				<p class="pole-team-photo-role">Rôle/sous-rôle</p>
				<p class="pole-team-photo-email">alex@lepole.be</p>
			   </div>
			</div>
		</div>


		<div class="pole-team-photo-card">
		<img class="pole-team-photo" src="<?php echo get_template_directory_uri(); ?>/img/yellow.png" alt="add">
			<div class="pole-team-photo-hover">
			<p class="pole-team-photo-name">Ester</p>
			   <div class="pole-team-photo-foot">
				<p class="pole-team-photo-role">Administratif/accueil</p>
				<p class="pole-team-photo-email">ester@lepole.be</p>
			   </div>
			</div>
		</div>

		</div>

	</div>
</div>
</div>

<div id="pole-actu-container">

<div class="row" id="pole-actu-row">

<div class= "col" style="width: 28.276rem;
    flex: 0 0 28.276rem;max-width: 28.276rem;height: 27.125rem;" id="pole-actu-col-1">
	<div id="pole-actu-title-btn">
       <h2 id="pole-actu-title">Actualités</h2>
       <a href="">
       <button id="pole-fb-btn">
	   Suivez-nous
           <img id="pole-fb" src="<?php echo get_template_directory_uri(); ?>/img/f.svg" alt="fb">
       </button>
       </a>
	</div>
	<div id="pole-actu-arrows">
	<img class="pole-arrow-right" src="<?php echo get_template_directory_uri(); ?>/img/arrow-conctact.svg" alt="arrow right">
	<img class="pole-arrow-right" src="<?php echo get_template_directory_uri(); ?>/img/arrow-conctact.svg" alt="arrow right">
	</div>
</div>

<div class="col" id="pole-actu-cards-container">
	<div class="pole-actu-card">

		<div class="pole-actu-card-top">
			<p class="pole-actu-card-date">14 juillet 2021</p>
			<img class="pole-arrow-right" src="<?php echo get_template_directory_uri(); ?>/img/arrow-right.svg" alt="arrow-card">
		</div>

		<div class="pole-actu-card-horizontal-divider">
         <span class="pole-actu-card-horizontal-line"></span>
        </div>

		<div class="pole-actu-card-text">
			<p class="pole-actu-text">BeCode.org vous donne rendez-vous le 22 juillet
				 au Pôle pour leurs portes ouvertes ! … </p>
		</div>
	</div>


	<div class="pole-actu-card">

		<div class="pole-actu-card-top">
			<p class="pole-actu-card-date">9 juillet 2021</p>
			<img class="pole-arrow-right" src="<?php echo get_template_directory_uri(); ?>/img/arrow-right.svg" alt="arrow-card">
		</div>

		<div class="pole-actu-card-horizontal-divider">
         <span class="pole-actu-card-horizontal-line"></span>
        </div>

		<div class="pole-actu-card-text">
			<p class="pole-actu-text">Plus d’informations sur le premier incubateur wallon
				 dédié aux jeux vidéo, Wild bishop, installé au Pôle ! …</p>
		</div>
	</div>


	<div class="pole-actu-card">

		<div class="pole-actu-card-top">
			<p class="pole-actu-card-date">14 juillet 2021</p>
			<img class="pole-arrow-right" src="<?php echo get_template_directory_uri(); ?>/img/arrow-right.svg" alt="arrow-card">
		</div>

		<div class="pole-actu-card-horizontal-divider">
         <span class="pole-actu-card-horizontal-line"></span>
        </div>

		<div class="pole-actu-card-text">
			<p class="pole-actu-text">BeCode.org vous donne rendez-vous le 22 juillet
				 au Pôle pour leurs portes ouvertes ! … </p>
		</div>
	</div>
</div>

</div>

</div>

<div id="pole-last-part">

<img id="pole-desk-img" src="<?php echo get_template_directory_uri(); ?>
/img/Mask Group 93@2x.jpeg" alt="bureau-img">

<div id="pole-desk-title-container">
	<p id="pole-desk-subtitle">Vous êtes intéressés par</p>
	<h1 id="pole-desk-title">Un <span style="color: #FFC33B">bureau</span>, une <span style="color: #FFC33B">location ponctuelle</span> d'un de nos espaces
		ou un moyen de <span style="color: #FFC33B">production</span>?</h1>
</div>

<div id ="pole-desk-circle-up">
<img id="pole-desk-arrow-up" src="<?php echo get_template_directory_uri(); ?>
/img/arrow-right.svg" alt="bureau-img">
</div>

</div>

<div id="test-svg">booh</div>

<?php
get_footer();
