<?php /* */ if(is_page(12)) { get_header('portfolio'); } else { get_header(); } wp_head(); ?>

			<main role="main" class="site-content">

				 <?php

				 if( have_rows('portfolio_section') ): while ( have_rows('portfolio_section') ) : the_row();

					 $portfolioSection = get_sub_field('section_title');
					 $images = get_sub_field('prod_gallery');

					 echo '<div class="block cf" id="portfolio_gallery_block">'.
					 				'<div class="block_title cf" id="gallery_block_title">'.$portfolioSection.'</div>'.
									'<div class="gallery_block_gallery" id="'.$portfolioSection.'">';

						 if( $images ):foreach( $images as $image ):
							 $full_image_url= $image['url'];

							 echo '<div class="gallery_block_gallery_img" data-image-src="'.$full_image_url.'"></div>';

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
