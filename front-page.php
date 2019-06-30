<?php

get_header();

/**
 * The template for displayng the frontpage
 */



//Hero
?>
    <?php get_template_part('global-templates/hero'); ?> 
<div class="row">
    <div class="col-md-9">
        <?php get_template_part('global-templates/usps'); ?>
 
        <?php get_template_part('global-templates/bikerides'); ?>

    </div>

    <div class="col-md-3">
        <?php get_sidebar(); ?>
    </div>
</div>
 



<?php
get_footer();