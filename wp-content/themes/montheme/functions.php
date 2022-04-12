<?php

/**
 * composer
 */

// chargement de l'autoloading de composer
// require get_template_directory().'/vendor/autoload.php';
$autoloadphp = get_template_directory().'/vendor/autoload.php';
if(file_exists($autoloadphp))
        require $autoloadphp;


/**
 * sécurité
 */

// désactive l'édition de fichier dans l'admin
define( 'DISALLOW_FILE_EDIT', true );

/**
 * localisation
 */

// choix du fuseau horaire
date_default_timezone_set( 'Europe/Paris' );
// choix du réglage régional
setlocale( LC_ALL, 'fr', 'fr_FR', 'fr_FR.utf8', 'fr_FR.ISO_8859-1' );

/**
 * CSS
 */

// cette fonction se charge d'intégrer les feuilles de style du thème
function my_theme_enqueue_styles() {
    
    // wp_enqueue_style( 'my-theme-main', get_stylesheet_directory_uri().'/css/main.css', 
    // chargement de Bootstrap
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
   
    // chargement d'un fichier CSS
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'my-theme-main', get_stylesheet_directory_uri(), ['bootstrap'] );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/**
 * JS
 */

// cette fonction se charge d'intégrer les scripts JS du thème
function my_theme_enqueue_script() {
    // chargement de Bootstrap
    wp_enqueue_script( 'my-theme-main', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js');
    // chargement d'un fichier JS
    wp_enqueue_script( 'my-theme-main', get_stylesheet_directory_uri());
    wp_enqueue_script( 'my-theme-main', get_stylesheet_directory_uri(), ['bootstrap'] );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_script' );

/**
 * fonctionnalités du thème
 */

// activation de la fonctionnalité des balises HTML5
add_theme_support( 'html5' );
// activation de la fonctionnalité du titre du site
add_theme_support( 'title-tag' );
// activation de la fonctionnalité des vignettes
add_theme_support( 'post-thumbnails' );

//navBar
function wpb_custom_new_menu() {
  register_nav_menu('monMenu', 'Mon menu' );
}
add_action( 'init', 'wpb_custom_new_menu' );


// Formulaire avec traitement donné
function traitement_formulaire_don_cagnotte() {

	if (isset($_POST['cagnote-don-envoi']) && isset($_POST['cagnotte-verif'])) {

		if (wp_verify_nonce($_POST['cagnotte-verif'], 'faire-don')) {

			$don = intval($_POST['don']);

			if ($don < 0) {

				$url = add_query_arg('erreur', 'radin', wp_get_referer());

				wp_safe_redirect($url);
				exit();

			} 

			else if ($don > 10000) {

				$url = add_query_arg('erreur', 'trop', wp_get_referer());

				wp_safe_redirect($url);
				exit();

			}

			else {

				$cagnotte_actuelle = intval(get_option('valeur_cagnotte', 0));
				$nouvelle_cagnotte = $cagnotte_actuelle + $don;

				update_option('valeur_cagnotte', $nouvelle_cagnotte);

			}

		}

	}
}
add_action('template_redirect', 'traitement_formulaire_don_cagnotte');