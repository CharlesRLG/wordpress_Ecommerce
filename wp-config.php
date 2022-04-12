<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpressEcommerce' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'Admin978' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'ueJEB2vx]]or*Xz!' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_L,QKgJ|-iz77ZXiLBAhXI[w&NjSX7S[)C6B|)B]W|_(/oQKw!X;QE2fl#n=*R6c' );
define( 'SECURE_AUTH_KEY',  'BsZdwLY$](cM,=Kku}M-kpYY,t`fTTt>{N;5/zd-h6l/xIw]J:f_(6aWEQ)<gg_W' );
define( 'LOGGED_IN_KEY',    'hm7pb#2|R=RP|H[.`RRE AxqK{rjJb4f_tyFCSD6d%mHJM`(Qe,riaeGv-$ym1s}' );
define( 'NONCE_KEY',        '7,us7;`^*LT];DBF)vI4tYt^[)-T!r|$txN>_cu2d0jS C2HD!2Ig5q/=sGH!PO7' );
define( 'AUTH_SALT',        '~d}I?y.Xz*kQ,i*.W^kKSuA487.z~YPEJ2tx(4[PSc`/:N@d_2Pi0&&p(1PRoNkb' );
define( 'SECURE_AUTH_SALT', 'yusgUJLe^ o4L.wGk]A=x7nP SC^wOycPs>.F*|~Yrb8fu -vtR[oV&dl`4%e,o=' );
define( 'LOGGED_IN_SALT',   'q38bEADEWOS@K`E};6-WDV)SyHKJgZnkLM;ZFuVKbo%<L4UcVVYjw@Hf3SaM@f~n' );
define( 'NONCE_SALT',       'y$</-3N`d#a6YYcgjb]z5Pg+5eX^ySYF@/.Kh=B@rGs90(&J-r!vq8|q@22wFQQK' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
