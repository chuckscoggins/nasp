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
		
		<meta name="description" content="The National Association of Safety Professionals is a non-profit membership organization providing training, consultative services, and third-party certifications that validate knowledge, skills and abilities in the area of workplace safety.">
		<meta name="classification" content="NASP initially offered workplace safety in-house training on a contract basis to business and industry, train-the-trainer courses for safety professionals, specialized training for those responsible for safety in the workplace, and consultative services to business and industry. Independent study courses were developed to allow those who could not attend classroom courses to still receive NASP training. NASP now provides classroom training in business and industrial facilities and in contract facilities across the US. NASP consultants provide mock OSHA inspections, development of safety plans and programs, and other consulting services across the US.">
		<meta name="keywords" content="petroleum safety, petroleum safety specialist, petroleum safety manager, petroleum safety administrator, workplace safety training, safety training, safety manager trainer, safety manager training, safety auditor, safety professional training, safety technician, HAZMAT, HAZWOPER training specialist, accident investigation technician, safety inspection technician, safety management specialist, advanced safety professional, certified safety training specialist, certified safety planning specialist, certified safety manager, certified safety administrator, master safety administrator, licensed safety professional, specialized safety occupations, certified safety professional, safety certifications, online certified safety professional courses, national association of safety professionals, safety courses and certifications, safety training certificate, environmental health and safety">
		<meta name="language" content="English">
		<meta name="copyright" content="NASP">
		<meta name="distribution" content="Global">
		<meta name="zipcode" content="28150">
		<meta name="country" content="USA">

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
							<?php wp_nav_menu( array('menu' => 'Secondary Menu')); ?>
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
		
