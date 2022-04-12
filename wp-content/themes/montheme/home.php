<?php

get_header();

// Afichage de la page actus

// Les paramètres de la requête WP_QUery
$args = array(
    // Sélection de pages (au lieu de posts)
    'post_type' => 'page',
    // Sélection d'une page par son slug
    'pagename' => 'actus',
);

// Exécution de la requête WP_Query
$query = new WP_Query( $args );

// Affichage du résultat de la requête WP_Query sans la boucle
if ( $query->have_posts() ):
    $query->the_post();
    ?>
    <article>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
    </article>
    <?php
endif;

// Restauration des paramètres originaux de la requête de l'utilisateur
wp_reset_postdata();

// Affichage de la liste des articles avec la boucle
if ( have_posts() ):
    while (have_posts()):
        the_post();
        ?>
        <article>
            <?php // Notez que le titre est dans un lien clickable ?>
            <h2><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div><?php the_content(); ?></div>
        </article>

        <?php
    endwhile;
endif;

get_footer();