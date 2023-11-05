<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Rendu_Wordpress
 */

get_header();
?>

<main id="primary" class="site-main single-revetements">


    <?php while (have_posts()) : the_post(); ?>

        <div class="thumbnail-revetements">
            <?php the_post_thumbnail('thumbnail-revetements-img'); ?>
        </div>

        <div class="content-revetements">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>

            <div class="stats">
                <h2>Statistiques</h2>
                <p>Rapidité: <b><?php the_field('rapidite'); ?></b></p>
                <p>Contrôle: <b><?php the_field('controle'); ?></b></p>
                <p>Adhérence: <b><?php the_field('adherence'); ?></b></p>
                <p>Epaisseur:
                    <span class="badge-revetements badge-value-<?= str_replace(".", "-", explode(':', get_field('epaisseur'))[0]); ?>">
                        <?= explode(':', get_field('epaisseur'))[1]; ?>
                    </span>
                </p>
            </div>
        </div>

    <?php endwhile; ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
