    <!-- <div class="row"> -->
        <div class="col-md-4">

            <div class="usp">

            <?php
            //add support for featured images later
            if(has_post_thumbnail()): ?>
            <?php echo the_post_thumbnail( 'post-thumbnail', [
                'class' => 'card-img-top img-fluid mt-3',
            ]);
            ?>
            <?php endif; ?>
                <h1><?php the_title(); ?></h1>
            <?php if(get_field('km')) { ?>
                <p><i>Length:&nbsp;</i><?php the_field('km'); ?>km</p>
                <?php
            }
            ?>
             
                <?php
                the_excerpt();
                ?>

            </div>

        </div>
    <!-- </div> -->