
<?php get_header(); ?>

<?php get_template_part('nav'); ?>
<?php
$ourCurrentPage = get_query_var('paged');

$ck_bikerides = new WP_Query([
    'post_type'         => 'ck_bikerides',
    //'posts_per_page'    =>  -1,
    'order_by'          => 'title',
    'order'             => 'desc',
    'paged'             => $ourCurrentPage
    ]); ?>

<?php if(have_posts()) {
    //success

?>
<div class="wrapper" id="wrapper-ck-bikerides">
    <div class="container">
        <div class="usp col-md-6 offset-3">
            <div class="categories mt-3">
                <h1><?php __('All Bikerides', 'cykling'); ?></h1>
                <h2>Bike rides ridden in &nbsp;<?php the_terms(
                    get_the_ID(), 'ck_bikeride_year'); ?></h2>
            </div>
        </div>
            <div class="row">
                <!--loop over the ck_bikerides items-->
                <?php while(have_posts()) {
                    the_post();
                    get_template_part('loop-templates/content', 'bikerides'); 

                    //don't forget to reset postdata
                    
                }; ?>
            </div>

            <?php 
            $next_posts_link = get_next_posts_link(__('Next Page &raquo;', 'cykling'), $ck_bikerides->max_num_pages);
            $previous_posts_link = get_previous_posts_link(__('&laquo; Previous Page  ','cykling'));

            if($next_posts_link || $previous_posts_link): ?>
            
                <div class="usp row">
                    <div class="col-md-8 offset-2">
                        <!--<button class="btn btn-info col-md-2 mt-4">-->
                          <?php  
                            // echo paginate_links([
                            //     'total' => $ck_bikerides->max_num_pages
                            // ])
                             previous_posts_link(__('&laquo; Previous Page  ',        'mybasictheme')); ?>
                            </div>
                        <!--</button>-->
                            
				        <!--<button class="btn btn-info col-md-2">-->	
				        	<?php next_posts_link(__('Next Page &raquo;', 'mybasictheme'), $ck_bikerides->max_num_pages);
                                ?>
                        <!--</button>-->
                    </div>
                </div>
            <?php endif; ?>
                
                <?php
                wp_reset_postdata();
            } 
                ?>  
    </div>
</div>
    



<?php get_footer();

