<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Free Press</title>
</head>
<body>
    <?php get_header(); ?>

    <!-- START WORDPRESS LOOP -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; else : ?>
        <p>
            <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
        </p>
    <?php endif; ?>
    <!-- ↑ END THE LOOP -->

    <?php get_footer(); ?>
</body>
</html>