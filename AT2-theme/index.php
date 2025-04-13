<div class="all">
    <?php get_header(); ?>
    <div class="header">
        <?php
        if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
            <div class="custom-header-widget">
                <?php dynamic_sidebar( 'custom-header-widget' ); ?>
            </div>
             
        <?php endif; ?>
    </div>
    <div class="main">
        <p class="main-text">the x-men are a group founded by professor charles xavier as a response to the emergence of naturally occurring superhumans known as mutants among the rest of human society.</p>
        <?php
        if ( is_active_sidebar( 'more-widgets' ) ) : ?>
            <div class="more-widgets">
                <?php dynamic_sidebar( 'more-widgets' ); ?>
            </div>
             
        <?php endif; ?>
    </div>
    <?php get_footer(); ?>
</div>