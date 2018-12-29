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
		                <div class="block cf" id="item_block">
		                    <?php if (have_rows('indivProd')): ?>
		                        <?php while (have_rows('indivProd')): ?>
		                            <?php the_row(); ?>
		                            <!-- <?php
		                                $individualProduct = get_sub_field('indivProd');
		                                $images            = get_sub_field('images');
		                            ?> -->

		                            <!-- <?php if ($images): ?>
		                                <?php foreach ($images as $image): ?>
		                                    <?php $full_image_url = $image['url']; ?>
		                                        <div class="item_block_left bstretchMe cf" data-img-src="<?php echo $full_image_url; ?>"></div>
		                                <?php endforeach; ?>
		                            <?php endif; ?> -->

		                            <?php
		                                $productName = get_sub_field('product_name');
		                                $productType = get_sub_field('product_type');
		                            ?>


		                            <div class="item_block_right cf">
		                                <div class="item_block_right_header cf">
		                                    <ul class="item_block_right_header_list">
		                                        <li id="product_title"><?php echo $productName; ?></li>
		                                        <li id="product_subtitle"><?php $productType; ?></li>
		                                    </ul>
		                                	<div class="item_block_right_viewoptions">bestellen opties</div>
																		</div>

			                            <div class="item_block_right_details cf">
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
				                                    <h5 class="item_block_right_details_orderingtitle">Lorem Ipsum</h5>
				                                    <p class="item_block_right_details_orderingp">
				                                        All products created through DITT Bags are custom made. Details such as color, size and detailing will be discussed upon the beginning of a new project. To order a bag and begin a new project, send an inquiry to  inquiries@dittbags.com
				                                    </p>
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
