<?php
/**
 * Template Name: About Page Template
 * Template Post Type: page
 */
get_header();
?>
<!-- adding Content using advnaced custom fields -->
<main>
<section class="masthead" style="background-image: url('<?php the_field('masthead_image'); ?>')">
<div>
    <h1>
    <?php the_field('tagline'); ?>
    </h1>
</div>
</section>
<section class="acf-row-one">
<div>
    <h2>
    <?php the_field('row_one_title'); ?>
    </h2>
    <?php the_field('row_one_content'); ?>
</div>
<div>
    <img src='<?php the_field('row_one_image'); ?>' alt='<?php the_field('image_alt_name'); ?>'>
</div>
</main>
<?php
get_footer();
?>

