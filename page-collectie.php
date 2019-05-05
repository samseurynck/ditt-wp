<?php // get_header(); ?>

<?php /* */ if(is_page(2)) { get_header('collectie'); } else { get_header(); } wp_head(); ?>


	<main role="main" class="site-content">

		<?php if (have_rows('pSect')): ?>
		    <?php while (have_rows('pSect')) : ?>
		        <?php the_row(); ?>
		        <?php
							$productSectionTitle = get_sub_field('pSecTitle');
							$sectionId = preg_replace('/\W+/','',strtolower(strip_tags($productSectionTitle)));
							?>
						<span class="nav_span" id="<?php echo $sectionId; ?>">
		        	<div class="block_title cf" id="collectie_block_title"><?php echo $productSectionTitle; ?></div>
						</span>

		        <?php if (have_rows('prods')) : ?>
		            <?php while (have_rows('prods')): ?>
		                <?php the_row(); ?>
		                <?php $products = get_sub_field('prods'); ?>
		                <div class="block" id="item_block">
		                    <?php if (have_rows('indivProd')): ?>
		                        <?php while (have_rows('indivProd')): the_row();

		                                $individualProduct = get_sub_field('indivProd');
		                                $images            = get_sub_field('images');
																		$firstImage = $images[0];
																		$orderDetailsTitle = get_sub_field('orderDetsTit');
																		$orderDetailsText = get_sub_field('orderDetsTxt');

																		$imgStringArray = '';
																		$loopCount = 0;
																		$len = count($images);

																		foreach ($images as $image):
																			if ($i == $len - 1) {
																				$imgStringArray .= $image['url'];
																	    } else {
																				$imgStringArray .= $image['url'].', ';
																			}
																			$loopCount++;
																		endforeach;

																		$html .=	'<div>'.
																								'<h1>Title</h1>'.
																							'</div>';


																	echo '<div class="item_block_left" data-image-src="" data-image-array="'.$imgStringArray.'"></div>';

																		$productName = get_sub_field('product_name');
		                                $productType = get_sub_field('product_type');
		                            ?>


		                            <div class="item_block_right">
		                                <div class="item_block_right_header cf">
																			<li id="product_title"><?php echo $productName; ?></li>
																			<li id="product_subtitle"><?php echo $productType; ?></li>
		                                    <!-- <ul class="item_block_right_header_list">
		                                        <li id="product_title"><?php echo $productName; ?></li>
		                                        <li id="product_subtitle"><?php echo $productType; ?></li>
		                                    </ul> -->
		                                	<div class="item_block_right_viewoptions"><span class="showhide" id="showOptions">show</span><span class="showhide" id="hideOptions">hide</span> details</div>
																		</div>

			                            <div class="item_block_right_details item_block_right_details_hide cf">
			                                <div class="item_block_right_details_specs">
			                                    <h5 class="item_block_right_details_specstitle">Lorem Ipsum</h5>
			                                        <ul class="item_block_right_details_specslist">

			                                            <?php if (have_rows('detailList')): ?>
			                                                <?php while (have_rows('detailList')): ?>
			                                                    <?php the_row(); ?>
			                                                        <?php
			                                                            $bijzonderheden = get_sub_field('bijzonderheden');
			                                                        ?>
			                                                        <li><?php echo $bijzonderheden; ?></li>
			                                                <?php endwhile; ?>
			                                            <?php endif; ?>

			                                        </ul>
			                                    </div>
			                                <div class="item_block_right_details_kleuren cf">
			                                    <p id="item_block_right_details_kleuren_title">Kleuren</p>

			                                    <?php if (have_rows('colOps')): ?>
			                                        <?php while (have_rows('colOps')): ?>
			                                            <?php the_row(); ?>
			                                            <?php $colorPick = get_sub_field('cPick'); ?>
			                                            <div id="item_block_right_details_kleuren_swatches" style="background-color:<?php echo $colorPick; ?>"></div>
			                                        <?php endwhile; ?>
			                                    <?php endif; ?>
			                                </div>
																				<div class="item_block_right_details_ordering">
																						<h5 class="item_block_right_details_orderingtitle"><?php echo $orderDetailsTitle; ?></h5>
																						<p class="item_block_right_details_orderingp"><?php echo $orderDetailsText; ?></p>
																				</div>
																			</div>
			                            </div>
		                        <?php endwhile; ?>
		                    <?php endif; ?>
		                </div>
		            <?php endwhile; ?>
		        <?php endif; ?>
		    <?php endwhile; ?>
		<?php endif; ?>

<!-- </div>
</div> -->



	</main>

<?php get_footer(); ?>
