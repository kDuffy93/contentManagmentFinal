<?php
/**
 * Template Name: Trip Page Template
 * Template Post Type: page
 */
get_header();
?>
<!-- adding Content using advnaced custom fields -->
<main>
    <section class="trip-masthead" style="background-image: url(<?php the_field('masthead_image'); ?>)">
        <h1><?php the_field('tagline') ?></h1>
    </section>
<section class="trips-container">
    <?php the_field('tripshortcode'); ?>
</section>
</main>
<?php
get_footer();
?>