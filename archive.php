<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rendu_Wordpress
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php if (have_posts()) : ?>

        <header class="page-header">
            <h1 class="page-title">
                <?php post_type_archive_title(); ?>
            </h1>
        </header><!-- .page-header -->

        <div class="archive-wrapper">
            <?php while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <article>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <h2><?php the_title(); ?></h2>
                    </article>
                </a>
            <?php endwhile; ?>
        </div>

    <?php
        the_posts_navigation();
    else :
        get_template_part('template-parts/content', 'none');
    endif;
    ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
