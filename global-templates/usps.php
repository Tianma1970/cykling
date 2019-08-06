<?php

$ck_usps = new WP_Query([
    'post_type'         => 'ck_usp',
    'posts_per_page'    => -1,
    'order_by'          => 'title',
    'order'             => 'asc'
]);

    //do we get anu usps?

if($ck_usps->have_posts()) {
    //success
    ?>
    <div class="wrapper" id ="wrapper-ck-usps">
    
        <div id="usps-wrapper" class="container">
            <div class="usp col-6 md-6 xs-12 offset-3">
                <h1 class="text-center"><?php _e('Why travelling by cycle', 'cycling'); ?></h1>
            </div>
                    <div class="row">

                        <!--Loop over the ck_usp items-->
                        <?php
                        while($ck_usps->have_posts()){
                            $ck_usps->the_post();
                            get_template_part('loop-templates/content',     'usp'); ?>

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

