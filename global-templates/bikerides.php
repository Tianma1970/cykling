<?php


$ck_bikerides = new WP_Query([
    'post_type'         => 'ck_bikerides',
    'posts_per_page'    => 3,
    'order_by'          => 'title',
    'order'             => 'asc'
]);

    //do we get anu usps?

if($ck_bikerides->have_posts()) {
    //success
    ?>
    <div class="wrapper mt-5" id ="wrapper-ck-bikerides">
    
        <div class="container">
        
            <h1><?php _e('My bikerides', 'cycling'); ?></h1>

            <div id="side-wrapper" class="row">
            
                <!--Loop over the ck_usp items-->
                <?php
                while($ck_bikerides->have_posts()){
                    $ck_bikerides->the_post();
                    get_template_part('loop-templates/content', 'bikerides'); ?>

                <?php
                }
                //don't forget to reset postdata
                wp_reset_postdata();
                ?>
            
            </div>
        
        </div>
    
    </div>
<?php
}

