<!--Custom header image-->
<?php if(get_header_image()) : ?>
    <div id="site-header">
        <img src="<?php header_image(); ?>" class="img-fluid" width="<?php echo absint(get_custom_header()->width); ?>">
        <h1><?php the_field('hero_title'); ?></h1>
        <p><?php the_field('hero_subtitle'); ?></p>
        
    </div>
<?php endif; 