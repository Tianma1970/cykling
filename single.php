<?php get_header(); ?>

<?php //get_template_part('global-templates/hero'); ?>
<!-- This is a single bikeride cpt -->

<article>
    <h1><?php the_title(); ?></h1>

    <?php if(has_post_thumbnail()) : ?>
        <div class="featured-image-wrapper">
            <?php the_post_thumbnail('featured-image', ['class' => 'img-fluid d-block mx-auto']); ?>
        </div>
    <?php endif; ?>

    <p class="text-muted">
        <em>
            <?php
            printf(
                __('Post created in %s', 'cykling'),
                get_the_date()
                

            );
            ?>
        </em>
    </p>
    <?php the_content(); ?>
</article>

<?php get_footer();

