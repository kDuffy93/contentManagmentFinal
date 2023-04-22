<?php
/**
 * Template Name: trip Single Page Template
 * Template Post Type: post, trip
 */
get_header();
?>
<!-- adding Content using advnaced custom fields -->
<main >
    <section class='tripSingle'>
        <div >
            <?php the_post_thumbnail(); ?>
        </div>
        <div>
            <h1> <?php the_field('title'); ?></h1>
            <div><p><b>When?</b> <?php the_field('trip_start_date'); ?>  To  <?php the_field('trip_end_date'); ?></p></div>
            <p> <?php the_content(); ?></p>
        </div>
    </section>
</main>
<?php
get_footer();
?>

