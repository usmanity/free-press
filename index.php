<?php get_header(); ?>

<div class="container main-page">
    <!-- START WORDPRESS LOOP -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post">
            <a href="<?php echo esc_url( get_permalink()); ?>" class="title-link">
                <h1 class="title">
                    <?php the_title(); ?>
                </h1>
            </a>
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
