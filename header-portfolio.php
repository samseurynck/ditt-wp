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
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<!-- <header class="header clear" role="banner"> -->

					<!-- logo -->
					<!-- <div class="logo">
						<a href="<?php echo home_url(); ?>"> -->
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div> -->
					<!-- /logo -->



						<div class="container">

							<!-- nav -->
							<nav class="nav blue_nav" role="navigation">
							  <div class=" cf" id="nav_block">
							    <div class="nav_block_left cf">
										<a href="<?php echo get_home_url(); ?>" id="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/dittbags-logo-w.svg" alt="Ditt Bags Logo" class="logo-img"></a>
										 <?php html5blank_nav(); ?>
							    </div>
							    <div class="nav_block_right cf">
										<ul class="nav_block_right_submenu">

											<?php
											if( have_rows('portfolio_section') ): while ( have_rows('portfolio_section') ) : the_row();

												$title = get_sub_field('section_title');
												// this takes the title of the section and converts it to lowercase, no spaces, to become a valid ID
												$titleId = preg_replace('/\W+/','',strtolower(strip_tags($title)));

													echo '<li><a href="#'.$titleId.'">'.$title.'</a></li>';

												endwhile;
											 endif;
											?>

										</ul>
							      <div class="nav_block_right_options">
											<a href="<?php echo get_page_link(15); ?>">over</a><span>nl</span><span>/</span><span>en</span>
							      </div>
							    </div>
							  </div>
							</nav>

					<!-- /nav -->

			<!-- </header> -->
			<!-- /header -->
