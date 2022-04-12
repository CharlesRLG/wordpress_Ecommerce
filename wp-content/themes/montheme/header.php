<?php
/**
 * The header for our theme.
 *
 * @package Botega_Scratch_Theme
 *
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
  
<?php
wp_nav_menu( array( 
    'theme_location' => 'Mon Theme' ) ); 
  
?>
</header>
<main>

