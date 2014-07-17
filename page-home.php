<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header(); ?>

  <div class="container">
   
      	<div class="royal-slider-container">
			<?php echo get_royalslider(1); ?>
		</div>
		
   
  </div> <!-- end .container-->

<div class="container home-three">
	<div class="row">
		<div class="col-md-8">
			<!-- Use options to allow user to enter main home content text -->
			<?php echo of_get_option('main_home'); ?>
					</div>
		<div class="col-md-4">
			<?php dynamic_sidebar('Home Sidebar'); ?>
		</div>
	</div> <!-- end .row-->
</div> <!-- end .container-->

<?php get_footer(); ?>
