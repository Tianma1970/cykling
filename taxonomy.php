
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
                <h2>Bike rides of the Category &nbsp;<?php the_terms(
                    get_the_ID(), 'ck_bikeride_caregory'); ?></h2>
            </div>
        </div>
            <div class="row">
                <!--loop over the ck_bikerides items-->
                <?php while(have_posts()) {
                    the_post();
                    get_template_part('loop-templates/content', 'bikerides'); 

                    //don't forget to reset postdata
                    //wp_reset_postdata();
                }; ?>
                <button class="btn btn-outline-secondary col-md-2 mt-4 offset-4">
                  <?php  
                    echo paginate_links([
                        'total' => $ck_bikerides->max_num_pages
                    ]) ?>
                </button>
                <?php
            }
                ?>  
            </div>
    </div>
</div>
    



<?php get_footer();

