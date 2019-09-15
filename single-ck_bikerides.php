<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
		
<?php get_header(); ?>

<?php get_template_part('nav'); ?>


<!-- This is a single bikeride cpt -->
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="bikeride col-md-12 lg-12">
        <div class="row">
            <div class="col-md-8 col-sm-8 single">
                <h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					
					<p>written by:<i> &nbsp;<?php the_author(); ?>, the biker 🚴🏼‍♀️</i></p>

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
						
						<?php the_terms(
                                get_the_ID(), 'ck_bikeride_year',
                                __('Cycled in: ', 'cykling')); ?><br>

                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                <!--The animator-->
                <div class="container">
                    <div class="datas col-md-9 xs-6">
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
			</div>
	<div class="col-md-12">
		<div class="pagination-links d-flex justify-content-around mt-3">
    		<div class="previous-post">
    		    <button class="btn btn-outline-secondary"><?php 	previous_post_link('&laquo;	 %link', __('Previous Bikeride', 	'cykling')); ?></button>
    		</div>
    		<div class="next-post">
    		    <button class="btn btn-outline-secondary"><?php 	next_post_link('%link &raquo;', __('Next Bikeride', 		'cykling')); ?></button>
    		</div>    
		</div>
	</div>
					


    



<?php get_footer();

