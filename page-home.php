<?php get_header(); ?>

	<main role="main" class="site-content">

		<!-- COLLECTION BLOCK -->
		<div class="block" id="collection_block">
			<div class="collection_block_content">
				<a class="homepage_block_content_link" href="<?php echo get_site_url(); ?>/collectie">
					<div class="homepage_block_title" id="collection_block_title"><h1>COLLECTIE</h1></div>
				</a>

				<?php

				// check for rows (parent repeater) // loop through rows (parent repeater)
				if( have_rows('pSect' , 2) ): while( have_rows('pSect' , 2) ): the_row();

					// get_sub_field('pSecTitle' , 2);
					$productSection = get_sub_field('pSecTitle' , 2);
					// this takes the title of the section and converts it to lowercase, no spaces, to become a valid ID
					$sectionId = preg_replace('/\W+/','',strtolower(strip_tags($productSection)));

					?>

					<a class="img_wrap_link" href="<?php echo get_site_url(); ?>/collectie/#<?php echo $sectionId; ?>">
						<div class="img_wrap">

							<?php

							// check for rows (sub repeater) // loop through rows (sub repeater)
							if( have_rows('prods' , 2) ): while( have_rows('prods' , 2) ): the_row();

								// check for rows (sub repeater) // loop through rows (sub repeater)
								if( have_rows('indivProd' , 2) ): while( have_rows('indivProd' , 2) ): the_row();

								// get_sub_field('images' , 2);
								get_sub_field('prods' , 2);
								get_sub_field('indivProd' , 2);
								$images = get_sub_field('images' , 2);
								$firstImage = $images[0];

								?>
										<div class="content_title" id="collection_block_content_title"><?php echo $productSection; ?></div>
				 						<div class="collection_block_content_item" data-image-src="<?php echo $firstImage['url']; ?>"></div>

										<?php endwhile; //while( get_sub_field('indivProd') ):?>
									<?php endif; //if( get_sub_field('indivProd') ): ?>
								<?php endwhile; //while( get_sub_field('prods') ):?>
							<?php endif; //if( get_sub_field('prods') ): ?>
							</div>
						</a>
					<?php endwhile; // while( has_sub_field('pSect') ): ?>
				<?php endif; // if( get_field('pSect') ): ?>

		 </div> <!-- end collection_block_content -->
	  </div> <!-- end collection_block -->

		<!-- PORTFOLIO BLOCK -->
		<div class="block" id="portfolio_block">
		 <div class="portfolio_block_content">

			 <!-- check for rows (parent repeater)  // loop through rows (parent repeater) -->
			 <!-- the '12' is the Portfolio pg ID, which is where you're grabbing the portfolio_section repeater from -->

			 	<?php if( have_rows('portfolio_section' , 12) ): while( have_rows('portfolio_section' , 12) ): the_row();
			 	 get_sub_field('prod_gallery' , 12);
				 $images = get_sub_field('prod_gallery' , 12);
				 $firstImage = $images[0];
				 $portfolioSection = get_sub_field('section_title' , 12);
		     // this takes the title of the section and converts it to lowercase, no spaces, to become a valid ID
		     $sectionId = preg_replace('/\W+/','',strtolower(strip_tags($portfolioSection)));
				 ?>

				  <!-- PORTFOLIO BLOCK IMAGES -->
				 	<a class="img_wrap_link" href="<?php echo get_site_url(); ?>/portfolio/#<?php echo $sectionId; ?>">
						<div class="img_wrap">
							<div class="content_title" id="portfolio_block_content_title"><?php echo $portfolioSection; ?></div>
							<div class="portfolio_block_content_item bstretchMe" data-image-src="<?php echo $firstImage['url']; ?>"></div>
						</div>
				 </a>
				 <?php endwhile; ?>
			 <?php endif; ?>

			 	 <!-- PORTFOLIO BLOCK TITLE -->
				 <a class="homepage_block_content_link" href="<?php echo get_site_url(); ?>/portfolio">
				 	<div class="homepage_block_title" id="portfolio_block_title"><h1>PORTFOLIO</h1></div>
				 </a>
			 </div> <!--close portfolio_block_content -->
		</div> <!-- close portfolio_block -->

		<!-- MAAK BLOCK -->
		<div class="block" id="maak_block">
			<a class="homepage_block_content_link" href="<?php echo get_site_url(); ?>/maak">
		 		<div class="homepage_block_title" id="maak_block_title"><h1>MAAK</h1></div>
	 		</a>
		 <div class="maak_block_content">
			 <div class="maak_block_content_top"></div>
			 <p>Houd je van leer, leren tassen en wil je zelf je tas maken? Neem alvast contact op, dit wordt namelijk binnenkort mogelijk!</p>
			 <div class="maak_block_content_bottom" id="maak-link"><h3><a href="<?php echo get_template_directory_uri(); ?> /maak"> Binnenkort beschikbaar</a></h3></div>
		 </div>
		</div>

	</main>

<?php get_footer(); ?>
