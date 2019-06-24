<?php

//get_header();

/**
 * Hero Setup
 */

 if( ! defined('ABSPATH')) {
     exit; //EXIT if accessed directly
    }
    ?>

    <div class="jumbotron jumbotron-fluid text-dark mt-3" style="background-image: url(<?php the_field('hero_image'); ?>);">
        <div class="row">
            <div class="hero-wrapper ml-5" id="hero">
                <h1>
                <?php the_field('hero_title'); ?>
                </h1>
                <h4>
                <?php the_field('hero_subtitle'); ?>
                </h4>

            </div>
        </div>
    </div>

    <?php

    //get_footer();