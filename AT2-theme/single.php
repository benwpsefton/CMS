<?php get_header(); ?>

<?php
    while(have_posts()) {
        the_post();?>
        <div>
            <h1> <?php the_title() ?> </h1>
            <div class="content">
                <?php the_content() ?>
            </div>
        </div>
    <?php }
?>

<?php get_footer(); ?>

