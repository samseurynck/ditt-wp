<?php get_header(); ?>

	<main role="main" class="site-content">
		<div class="block cf" id="collection_block">
			<div class="collection_block_content cf">
				<div class="homepage_block_title" id="collection_block_title"><h1>COLLECTIE</h1></div>

			 <?php

					 // $collectieImages = get_field('collectie_images');
					 $collectieImages = get_field('collectie_images');


					 if( $collectieImages ):foreach( $collectieImages as $collectieImages ):
						 $full_image_url= $collectieImages['url'];

					 $html =  '<div class="img_wrap">'.
						 						'<div class="collection_block_content_item bstretchMe" data-image-src="'.$full_image_url.'"></div>'.
											'</div';

					 echo $html;

				 endforeach;
				 endif;
				 ?>

		 </div> <!-- end collection_block_content -->
	  </div> <!-- end collection_block -->
		<div class="block cf" id="portfolio_block">
		 <div class="portfolio_block_content cf">

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

					 	<a href="<?php echo get_site_url(); ?>/portfolio/#<?php echo $sectionId; ?>">
							<div class="img_wrap">
								<div class="portfolio_block_content_title"><?php echo $portfolioSection; ?></div>
								<div class="portfolio_block_content_item bstretchMe" data-image-src="<?php echo $firstImage['url']; ?>"></div>
							</div>
					 </a>

					 <?php endwhile; ?>
				 <?php endif; ?>

				 <div class="homepage_block_title" id="portfolio_block_title"><h1>PORTFOLIO</h1></div>
			 </div> <!--close portfolio_block_content -->

		</div> <!-- close portfolio_block -->

		<div class="block cf" id="maak_block">
		 <div class="homepage_block_title" id="maak_block_title"><h1>MAAK</h1></div>
		 <div class="maak_block_content">
			 <div class="maak_block_content_top"></div>
			 <p>Houd je van leer, leren tassen en wil je zelf je tas maken? Neem alvast contact op, dit wordt namelijk binnenkort mogelijk!</p>
			 <div class="maak_block_content_bottom" id="maak-link"><h3><a href="<?php echo get_template_directory_uri(); ?> /maak"> Binnenkort beschikbaar</a></h3></div>
		 </div>
		</div>

	</main>

<?php get_footer(); ?>
