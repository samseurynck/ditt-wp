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
										<a href="" id="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/dittbags-logo.svg" alt="Ditt Bags Logo" class="logo-img"></a>
							    </div>
							    <div class="nav_block_right cf">
							      <div class="nav_block_right_options">
							      </div>
							    </div>
							  </div>
							</nav>

	<main role="main" class="over_main">

		<div class="over_header">
			<?php
				if( have_rows('contact_details', 15) ): while ( have_rows('contact_details', 15) ) : the_row();
					$detail = get_sub_field('detail', 15);
						echo '<p>'.$detail.'</p>';
					endwhile;
				 endif;
				?>
		</div>

	 <div class="over_bg_block" id="over_bg_block_left">
		 <div class="bg_topContent" id="bg_block_left_topContent"></div>
		 <div class="bg_middleContent" id="bg_block_left_middleContent"><p>DITT is under construction.</p></div>
		 <div class="bg_bottomContent" id="bg_block_left_bottomContent">
		 </div>
	 </div>

		<div class="over_bg_block" id="over_bg_block_right">
			<div class="bg_topContent" id="bg_block_left_topContent">
			<?php
				if( have_rows('contact_details', 15) ): while ( have_rows('contact_details', 15) ) : the_row();
					$detail = get_sub_field('detail', 15);
						echo '<p>'.$detail.'</p>';
					endwhile;
				 endif;
				?>
			</div>
			<div class="bg_middleContent" id="bg_block_right_middleContent"><p><?php the_field('right_paragraph'); ?></p></div>
			<div class="bg_bottomContent" id="bg_block_left_bottomContent"><?php the_field('credits', 15); ?></div>
		</div>

		<div class="over_footer">
				<?php the_field('credits', 15); ?>
		</div>

	</main>
