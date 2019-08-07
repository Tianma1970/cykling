<?php

get_header();

/**
 * The template for displayng the frontpage
 */



?>
    <?php get_template_part('nav'); ?>
<!--Hero-->
    <?php get_template_part('global-templates/hero'); ?> 
<!-- <div class="slider">
    <div class="row">
        <div class="col-md"> -->
<!--Usps-->
            <?php get_template_part('global-templates/usps'); 
            //The slider
            ?>

                <!-- <div class="row">
                    <div class="col-md-9 mt-3">
                            <h1 class="text-center">Some impressions</h1>
                                <div id="slider">
                                <ul class="slides mt-5">
                                    <li class="slide"><img src="../images/Kavlinge.jpeg" height="400" width="680"></li>
                                    <li class="slide"><img src="" height="400" width="680"></li>
                                    <li class="slide"><img src="" height="400" width="680"></li>
                                    <li class="slide"><img src="" height="400" width="680"></li>
                                    <li class="slide"><img src="" height="400" width="680"></li>
                                </ul>

                            </div>
                    </div>

                    <div class="col-md-3 mt-3">
                        <?php get_sidebar(); ?>
                    </div>
                </div> -->

    
            <?php get_template_part('global-templates/bikerides'); ?>

        </div>


    </div>
</div>
 



<?php
get_footer();