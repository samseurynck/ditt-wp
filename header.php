<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<!-- <link href="//www.google-analytics.com" rel="dns-prefetch"> -->
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="i<?php echo get_template_directory_uri(); ?>/mg/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#98838a">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body class="site" <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

						<div class="container">

							<!-- nav -->
							<nav class="nav home_nav" role="navigation">
							  <div class=" cf" id="nav_block">
							    <div class="nav_block_left cf">
										<a href="<?php echo get_home_url(); ?>" id="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/dittbags-logo.svg" alt="Ditt Bags Logo" class="logo-img"></a>
										 <?php html5blank_nav(); ?>
							    </div>
							    <div class="nav_block_right cf">
							      <div class="nav_block_right_options">
							         <a href="<?php echo get_page_link(15); ?>">info.</a><!--<span>nl</span><span>/</span><span>en</span> -->
							      </div>
							    </div>
							  </div>
							</nav>

					<!-- /nav -->

			<!-- </header> -->
			<!-- /header -->
