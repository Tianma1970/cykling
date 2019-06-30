
<?php get_header(); ?>

<!-- This is a single bikeride cpt -->
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<div class="row">
    <div class="col-md-9">
        <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
    </div>
    <div class="col-md-3">
        <?php get_sidebar(); ?>
    </div>
</div>
<hr>

    



<?php get_footer();

