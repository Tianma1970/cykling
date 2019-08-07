<?php
get_header(); ?>

<?php get_template_part('nav'); 


$ck_bikerides = new WP_Query([
    'post_type'         => 'ck_bikerides',
    //'posts_per_page'    => -1,
    'order_by'          => 'title',
    'order'             => 'desc',
    'paged'             => get_query_var('paged')
    ]);
    
    //do we get anu usps?

if($ck_bikerides->have_posts()) { 
    //success
    ?>
    <div class="wrapper mt-3" id ="wrapper-ck-bikerides">
    
        <div class="container">
            <div class="usp col-md-4 offset-4">
                <h1 class="text-center"><?php _e('All Bikerides', 'cycling');    ?></h1>
            </div>

            <div id="side-wrapper" class="row">
            
                <!--Loop over the ck_usp items-->
                <?php
                while($ck_bikerides->have_posts()){
                    $ck_bikerides->the_post();
                    get_template_part('loop-templates/content', 'bikerides'); ?>

                <?php
                }
                echo paginate_links();
                ?>
                <div class="pagination-links d-flex justify-content-between mt-4">
                    
                    <div class="previous-post">
                        <?php previous_posts_link('&laquo; %link', __('Previous Post', 'cykling')); ?>
                    </div>
                    <div class="next-post">
                        <?php next_posts_link('&raquo; %link', __('Next Post', 'cykling'), $ck_bikerides->max_num_pages); ?>
                    </div>    
                </div>
                
                <?php
                //don't forget to reset postdata
                wp_reset_postdata();
                ?>
            
            </div>
        
        </div>
    
    </div>

    

<?php
}
 get_footer(); ?>