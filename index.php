<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package d-dola
 */

get_header();
?>

	 <main>
     <?php get_template_part('template-parts/hero-section') ?>
     <?php get_template_part('template-parts/trust-section') ?>
     <?php get_template_part('template-parts/benefits-section') ?>
     <?php get_template_part('template-parts/example-section') ?>
     <?php get_template_part('template-parts/why-section') ?>
     <?php get_template_part('template-parts/quote-section') ?>
     <?php get_template_part('template-parts/map-section') ?>
     <?php get_template_part('template-parts/contact-section') ?>
    </main>

<?php
get_footer();
