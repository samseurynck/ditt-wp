<?php /* */ if(is_page(12)) { get_header('portfolio'); } else { get_header(); } wp_head(); ?>

			<main role="main" class="site-content">

				 <?php

				 if( have_rows('portfolio_section') ): while ( have_rows('portfolio_section') ) : the_row();

					 $portfolioSection = get_sub_field('section_title');
					 // this takes the title of the section and converts it to lowercase, no spaces, to become a valid ID
					 $sectionId = preg_replace('/\W+/','',strtolower(strip_tags($portfolioSection)));
					 $images = get_sub_field('prod_gallery');

					 echo '<div class="block cf" id="portfolio_gallery_block">'.
					 				'<span class="nav_span" id="'.$sectionId.'">'.
					 					'<div class="block_title cf" id="gallery_block_title">'.$portfolioSection.'</div>'.
									'</span>'.
									'<div class="gallery_block_gallery" id="">';

						 if( $images ):foreach( $images as $image ):
							 $full_image_url= $image['url'];
							 // grabs image height and width and applies hor or vert accordingly
							 list($width, $height) = getimagesize($full_image_url);
									if ($width > $height) {
									    echo '<div class="gallery_block_gallery_img hor" data-image-src="'.$full_image_url.'"></div>';
									} else {
									    echo '<div class="gallery_block_gallery_img vert" data-image-src="'.$full_image_url.'"></div>';
									}



							 endforeach;
							 endif;

							 echo '</div>'.
							 			'</div>';

					 endwhile;
					 else :
					 endif;
			 ?>

			</main>


 <?php get_footer(); ?>
