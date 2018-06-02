<?php get_header(); ?>

<div class="container">
    <!-- START WORDPRESS LOOP -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post">
            <?php the_content(); ?>
        </div>
    <?php endwhile; else : ?>
        <p>
            <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
        </p>
    <?php endif; ?>
    <!-- ↑ END THE LOOP -->
</div>

<?php get_footer(); ?>
