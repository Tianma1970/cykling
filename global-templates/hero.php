<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('.jumbotron').css('display', 'none'),
                $('.jumbotron').fadeIn(5000);
            })
        </script>
        
<?php
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