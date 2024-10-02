<?php
/* Template Name: Introduction Page */
get_header();
?>

<section>
    <h1>Welcome to the Event!</h1>
    <p>Join us for a fun workshop where you can play quiz games, collect puzzles, and exchange them for gifts.</p>
    <a href="<?php echo site_url('/quiz'); ?>" class="cta-btn">Start the Quiz Game</a>
    <a href="<?php echo site_url('/puzzle-collection'); ?>" class="cta-btn">Go to Puzzle Collection</a>
</section>

<?php get_footer(); ?>
