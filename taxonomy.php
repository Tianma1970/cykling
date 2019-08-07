
<?php get_header(); ?>

<?php get_template_part('nav'); ?>

<?php if(have_posts()) {
    //success
}
?>
<div class="wrapper" id="wrapper-ck-bikerides">
    <div class="container">
        <h1><?php __('All Bikerides', 'cykling'); ?></h1>
            <div class="row">
                <!--loop over the ck_bikerides items-->
                <?php while(have_posts()) {
                    the_post();
                    get_template_part('loop-templates/content', 'bikerides'); 

                    //don't forget to reset postdata
                    //wp_reset_postdata();
                }
                ?>  
            </div>
    </div>
</div>
    



<?php get_footer();

