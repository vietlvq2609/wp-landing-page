<?php
/* Template Name: Quiz Page */
get_header();
?>

<section>
    <h1>Quiz Game</h1>
    <?php
    // Fetch the quiz plugin data here
    echo do_shortcode('[quiz_plugin_shortcode]');
    ?>
</section>

<?php get_footer(); ?>
