<!-- <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-expand-xs navbar-dark bg-dark">
	<div class="container">
		
		<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>


	</div><!-- /.container -->
<!--</nav> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
		<?php
			if (has_nav_menu('main-menu')) {
				wp_nav_menu([
					'theme_location' => 'main-menu',
					'container_class' => 'collapse navbar-collapse', // wrapping div class
					'container_id' => 'navbarNav', // wrapping div id
					'menu_class' => 'navbar-nav ml-auto', // ul class
					'walker' => new bs4Navwalker(),
				]);
			}
		?>
    
  </div>
</nav>