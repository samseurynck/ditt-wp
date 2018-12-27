<?php // get_header(); ?>

<?php /* */ if(is_page(2)) { get_header('collectie'); } else { get_header(); } wp_head(); ?>


	<main role="main" class="site-content">

		<!-- <div class="block_title cf" id="collectie_block_title">Tassen</div>

		<div class="block cf" id="item_block">
	    <div class="item_block_left cf">
				img img img make this a backstretch slideshow that autoplays when item is selected
	    </div>
	    <div class="item_block_right cf">
	      <div class="item_block_right_header cf">
	        <ul class="item_block_right_header_list">
	          <li id="product_title">SANNE</li>
	          <li id="product_subtitle">leren backpack XL</li>
	        </ul>
	        <div class="item_block_right_viewoptions">bestellen opties</div>
	      </div>
	      <div class="item_block_right_details cf">
					<div class="item_block_right_details_specs">
		        <h5 class="item_block_right_details_specstitle">Lorem Ipsum</h5>
		        <ul class="item_block_right_details_specslist">
		          <li>lorem ipsum</li>
		          <li>lorem ipsum</li>
		          <li>lorem ipsum</li>
		        </ul>
					</div>
					<div class="item_block_right_details_kleuren">
						<p id="item_block_right_details_kleuren_title">Kleuren</p>
						<div id="item_block_right_details_kleuren_swatches">,.,.,.,.,.,.,</div>
					</div>
					<div class="item_block_right_details_ordering">
		        <h5 class="item_block_right_details_orderingtitle">Lorem Ipsum</h5>
		        <p class="item_block_right_details_orderingp">
		          All products created through DITT Bags are custom made. Details such as color, size and detailing will be discussed upon the beginning of a new project. To order a bag and begin a new project, send an inquiry to  inquiries@dittbags.com
		        </p>
					</div>
	      </div>
	    </div>
		</div> -->

		<?php

		if( have_rows('pSect') ): while ( have_rows('pSect') ) : the_row();
			$productSectionTitle = get_sub_field('pSecTitle');
			echo '<div class="block_title cf" id="collectie_block_title">'.$productSectionTitle.'</div>';

				if( have_rows('prods') ): while ( have_rows('prods') ) : the_row();
					$products = get_sub_field('prods');
					echo  '<div class="block cf" id="item_block">';

						if( have_rows('indivProd') ): while ( have_rows('indivProd') ) : the_row();
							$individualProduct = get_sub_field('indivProd');
							$images = get_sub_field('images');

								if( $images ):foreach( $images as $image ):
									$full_image_url= $image['url'];
									echo '<div class="item_block_left bstretchMe cf" data-img-src="'.$full_image_url.'"></div>';

								endforeach;
								endif;

								$productName = get_sub_field('product_name');
								$productType = get_sub_field('product_type');


								echo '<div class="item_block_right cf">'.
									      '<div class="item_block_right_header cf">'.
									        '<ul class="item_block_right_header_list">'.
									          '<li id="product_title">'.$productName.'</li>'.
									          '<li id="product_subtitle">'.$productType.'</li>'.
									        '</ul>'.
													'<div class="item_block_right_viewoptions">bestellen opties</div>'.
									      '</div>'.
												'<div class="item_block_right_details cf">'.
													'<div class="item_block_right_details_specs">'.
										       '<h5 class="item_block_right_details_specstitle">Lorem Ipsum</h5>'.
										        '<ul class="item_block_right_details_specslist">';

									if( have_rows('detailList') ): while ( have_rows('detailList') ) : the_row();
										$bijzonderheden = get_sub_field('bijzonderheden');
										$message = "working!?";
										echo '<li>'.$bijzonderheden.'</li>';

									endwhile;
									endif;

									echo  '</ul>'.
												'</div>'.
													'<div class="item_block_right_details_kleuren cf">'.
														'<p id="item_block_right_details_kleuren_title">Kleuren</p>';

									if( have_rows('colOps') ): while ( have_rows('colOps') ) : the_row();
										$colorPick = get_sub_field('cPick');
										echo	'<div id="item_block_right_details_kleuren_swatches" style="background-color:'.$colorPick.';"></div>';

									endwhile;
									endif;

									echo '</div>'.
													'<div class="item_block_right_details_ordering">'.
														'<h5 class="item_block_right_details_orderingtitle">Lorem Ipsum</h5>'.
														'<p class="item_block_right_details_orderingp">'.
															'All products created through DITT Bags are custom made. Details such as color, size and detailing will be discussed upon the beginning of a new project. To order a bag and begin a new project, send an inquiry to  inquiries@dittbags.com'.
														'</p>'.
													'</div>'.
												'</div>';

						endwhile;
						endif;

						echo '</div>'. //KEEP
								 '</div>'; //KEEP


				endwhile;
				endif;

				echo '</div>'; //KEEP

		endwhile;
		endif;

			echo '</div>'.
					 '</div>';

	?>

<!-- </div>
</div> -->



	</main>

<?php get_footer(); ?>
