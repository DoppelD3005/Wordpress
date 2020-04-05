<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header>
		      <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #fafa78f6;">
		        <a href="index.html">
		          <img src="img/wappen-farbe.gif" alt="Logo" height="60">
		        </a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		          <span class="navbar-toggler-icon"></span>
		        </button>
		        <div class="collapse navbar-collapse" id="navbarSupportedContent">
		          <ul class="navbar-nav mr-auto">
		            <li class="nav-item active">
		              <a class="nav-link font-weight-bold" href="#">Startseite <span class="sr-only">(current)</span></a>
		            <li class="nav-item dropdown">
		              <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                Bürgerhaus
		              </a>
		              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		                <a class="dropdown-item" href="#">Allgemein</a>
		                <a class="dropdown-item" href="#">Vermietung</a>
		                  <div class="dropdown-divider"></div>
		                <a class="dropdown-item" href="#">sonstiges</a>
		              </div>
		            </li>
		            <li class="nav-item dropdown">
		              <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                Der Verein
		              </a>
		              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		                <a class="dropdown-item" href="#">Der Vorstand</a>
		                <a class="dropdown-item" href="#">Holzer Schützenzüge</a>
		                <a class="dropdown-item" href="#">Die Chronik</a>
		                <div class="dropdown-divider"></div>
		                <a class="dropdown-item" href="#">Bilder Galerie</a>
		              </div>
		            </li>
		
		            <li class="nav-item dropdown">
		              <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                Über
		              </a>
		              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		                <a class="dropdown-item" href="#">Kontakt</a>
		                <a class="dropdown-item" href="#">Datenschutz</a>
		                <div class="dropdown-divider"></div>
		                <a class="dropdown-item" href="#">Impressum</a>
		              </div>
		            </li>
		          </ul>
		        </div>
		      </nav>
		    </header>

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
