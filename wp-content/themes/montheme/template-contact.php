<?php
/**
 * Template Name: Template Contact
 */
?>

<?php

get_header();


?>
<div id="formulaireContact">
    <form action="#" method="POST" class="comment-form">
        <?php wp_nonce_field('faire-don', 'cagnotte-verif'); ?>

        <p>
            <label for="don">Prénom</label>
            <br>
            <input id="don" type="text" name="don"  />
        </p>
        <p>
            <label for="don">Nom</label>
            <br>
            <input id="don" type="text" name="don"  />
        </p>
        <p>
            <label for="don">email</label>
            <br>
            <input id="don" type="text" name="don"  />
        </p>
        <p>
            <label for="don">Description du projet</label>
            <br>
            <textarea id="don" type="text" name="don"  >
        </p>
        <p>
            <input id="submit" type="submit" name="cagnote-don-envoi" id="submit" class="submit" value="Envoyer" />
        </p>
    </form>
</div>
<?php

get_footer();