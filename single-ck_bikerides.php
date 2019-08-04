
<?php get_header(); ?>

<?php //get_template_part('global-templates/hero'); ?>

<!-- This is a single bikeride cpt -->
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="bikeride col-md-12 lg-12">
        <div class="row">
            <div class="col-md-9">
                <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>

                    <div class="length">
                        <?php the_terms(
                                get_the_ID(), 'ck_bikeride_caregory',
                                __('Category: ', 'cykling')); ?><br>
                        
                        <?php the_terms(
                                get_the_ID(), 'ck_bikeride_location',
                                __('Location: ', 'cykling')); ?><br>
                        
                        <?php the_terms(
                                get_the_ID(), 'ck_bikeride_country',
                                __('Country: ', 'cykling')); ?><br>

                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                <!--The animator-->
                <div class="container">
                    <div class="datas col-md-9">
                        <div class="data mt-9 mt-1">
                            <input type="radio" name="data"         value="<?php the_field('km'); ?>"><label>km</label>
                            <input type="radio" name="data"         value="<?php the_field('elevation'); ?>"><label>elev (m)</label>
                            <input type="radio" name="data"         value=""><label>set 0</label>
                        </div>
                        <div class="column c-3">


  	                    <div class="lc col-md-9">
  	                        <div class="numbers n-1000">
  		                        <div>0</div>
  		                        <div>1</div>  
  		                        <div>2</div>
  		                        <div>3</div>
  		                        <div>4</div>
  		                        <div>5</div>
  		                        <div>6</div>
  		                        <div>7</div>
  		                        <div>8</div>
  		                        <div>9</div>
                            </div>

  	                        <div class="numbers n-100">
  		                        <div>0</div>
  		                        <div>1</div>
  		                        <div>2</div>
  		                        <div>3</div>
  		                        <div>4</div>
  		                        <div>5</div>
  		                        <div>6</div>
  		                        <div>7</div>
  		                        <div>8</div>
  		                        <div>9</div>
  	                        </div>

                            <div class="numbers n-10">
  		                        <div>0</div>
  		                        <div>1</div>
  		                        <div>2</div>
  		                        <div>3</div>
  		                        <div>4</div>
  		                        <div>5</div>
  		                        <div>6</div>
  		                        <div>7</div>
  		                        <div>8</div>
  		                        <div>9</div>
  	                        </div>

                            <div class="numbers n-1">
  		                        <div>0</div>
  		                        <div>1</div>
  		                        <div>2</div>
  		                        <div>3</div>
  		                        <div>4</div>
  		                        <div>5</div>
  		                        <div>6</div>
  		                        <div>7</div>
  		                        <div>8</div>
  		                        <div>9</div>
  	                        </div>
                    </div>
                    
                
                </div>

                    
            </div>
        
        </div>
    </div>
                    <div class="col-md-3 mt-3">
                        <?php get_sidebar(); ?>
                    </div><hr>


    



<?php get_footer();

