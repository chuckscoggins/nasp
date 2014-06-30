<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<!-- To Do: repoint favicon -->
		<link rel="icon" href="http://naspweb.com/favicon.ico">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>
		
		<!-- Font Awesome -->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		
		
		<script type="text/javascript">
		
		$(document).ready(function () { //doc ready
		
			//Hide the giant menu on page load
			$('#const-training-menu').hide();
			
			//Positions the menu when it does appear
			var $trWidth = jQuery("#menu-item-183"),
				trposition = $trWidth.position(),
				trStart = $trWidth.height,
				$trpos = $("#const-training-menu").insertAfter($trWidth);

				$trpos.css({
					position : 'absolute',
					top : trposition.top + 40,
					left: trposition.left,
				});

			//show menu when li is hovered
			$('#menu-item-183, #const-training-menu').hover(function () {
			    $('#const-training-menu').show();
			}, function () {
			setTimeout(function() {
			        $('#const-training-menu').hide();
			}, 1000);
			});

/*			//keeps giant menu visible when the menu is hovered
			$('#const-training-menu').hover(function () {
			    $('#const-training-menu').show();
			}, function () {
			    $('#const-training-menu').hide();
			});
*/
		}); // end doc ready
	
		//todo: make script universal instead of specific to one li and one menu.
		//todo: fix hover bug when switching between li hover to menu hover
	
		</script>

	</head>

	<body <?php body_class(); ?>>

    <header class="header">

      <nav role="navigation">
        <div class="navbar navbar-inverse">
          <div class="container">
            <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage">
	              <img id="main-logo" src="<?php bloginfo('template_directory'); ?>-child/library/images/NASP-logo.png" alt="<?php bloginfo( 'name' ) ?>">
              </a>

            </div>

            <div class="navbar-collapse collapse navbar-responsive-collapse">
				<!-- Search Bar -->
				<div class="searchbar-container">
					<div class="searchbar-container-inner">
						<button class="chat-button btn btn-default"><i class="fa fa-comment"></i> Chat</button>
						<div class="header-search"><?php get_search_form(); ?></div>
					</div>
					<?php bones_main_nav(); ?>
				</div>
				<!-- end Search Bar -->
            </div>
          </div>
        </div> 
        
      </nav>

        	<!-- Second Navigation Bar -->
				<div id="second-navigation-container">
					<div id="second-navigation-container-inner" class="row">
						<nav class="wrap clearfix">
							<?php wp_nav_menu( array('menu' => 'Secondary Menu' )); ?>
						</nav>
							<div style="clear:both">&nbsp;</div>
					</div>
				</div>
				
			<!-- Third Navigation Bar -->
				<div id="third-navigation-container">
					<div id="third-navigation-container-inner" class="row">
						<nav class="wrap clearfix">
							<?php wp_nav_menu( array('menu' => 'Third Menu' )); ?>
						</nav>
							<div style="clear:both"></div>
					</div>
				</div>

		</header> <?php // end header ?>
		
		
		<div id="const-training-menu">
				Submenu Info Here
		</div>
