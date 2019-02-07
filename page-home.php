<?php get_header(); ?>

	<main role="main" class="site-content">
		<div class="block cf" id="collection_block">
		 <div class="homepage_block_title" id="collection_block_title"><h1>COLLECTIE</h1></div>
		 <div class="collection_block_content cf">
			 <!-- <div class="collection_block_content_item"></div>
			 <div class="collection_block_content_item"></div>
			 <div class="collection_block_content_item"></div> -->

			 <?php

					 // $collectieImages = get_field('collectie_images');
					 $collectieImages = get_field('collectie_images');


					 if( $collectieImages ):
					 foreach( $collectieImages as $collectieImages ):
						 $full_image_url= $collectieImages['url'];

					 $html = '<div class="collection_block_content_item bstretchMe" data-image-src="'.$full_image_url.'"></div>';

					 echo $html;

				 endforeach;
				 endif;
				 ?>

		 </div>
		</div>
		<div class="block cf" id="portfolio_block">
		 <div class="portfolio_block_content cf">
			 <!-- <div class="portfolio_block_content_item"></div>
			 <div class="portfolio_block_content_item"></div>
			 <div class="portfolio_block_content_item"></div> -->


			<?php

			if( have_rows('portfolio_section' , 12) ): while ( have_rows('portfolio_section' , 12) ) : the_row();

				$portfolioSection = get_sub_field('section_title' , 12);
				// this takes the title of the section and converts it to lowercase, no spaces, to become a valid ID
				$sectionId = preg_replace('/\W+/','',strtolower(strip_tags($portfolioSection)));
				$images = get_sub_field('prod_gallery' , 12);
				$firstImage = $images[0];

					if( $images ):foreach( $images as $image ):
						// $full_image_url= $image['url'];
						// grabs image height and width and applies hor or vert accordingly
						// list($width, $height) = getimagesize($full_image_url);

							echo '<a href="'.get_site_url();'./#'.$sectionId.'>
										<div class="portfolio_block_content_item bstretchMe" data-image-src="'.$firstImage['url'].'"></div>
										</a>';

						endforeach;
						endif;
				endwhile;
				// else :
				endif;
		?>

			</div>
			<div class="homepage_block_title" id="portfolio_block_title"><h1>PORTFOLIO</h1></div>
		</div>

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
