
<?php get_header(); ?>

<!-- This is a single bikeride cpt -->
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="bikeride">
        <div class="row">
            <div class="col-md">
                <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    <div class="length">
                        <?php the_terms(
                                get_the_ID(), 'ck_bikeride_caregory',
                                __('Category: ', 'cykling')); ?><br>
                        
                        <?php the_terms(
                                get_the_ID(), 'ck_bikeride_location',
                                __('Location: ', 'cykling')); ?><br>
                        
                        <?php the_terms(
                                get_the_ID(), 'ck_bikeride_country',
                                __('Country: ', 'cykling')); ?><br>

                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    
<hr>

    



<?php get_footer();

