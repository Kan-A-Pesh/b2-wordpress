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

<main id="primary" class="site-main single-bois">

    <?php while (have_posts()) : the_post(); ?>

        <div class="thumbnail-bois">
            <?php the_post_thumbnail('thumbnail-bois-img-cover'); ?>
            <?php the_post_thumbnail('thumbnail-bois-img'); ?>
        </div>

        <div class="content-bois">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>

    <?php endwhile; ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
