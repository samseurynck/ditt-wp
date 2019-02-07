<?php get_header(); ?>

	<main role="main" class="site-content">

		<!-- <div class="catalog_content">
			<figure class="catalog_content_banner">
				<img class="banner_image" src="" alt="">
				<figcaption class="banner_title"></figcaption>
			</figure>
		</div> -->

		<div class="catalog_content">

				<?php if( have_rows('banner') ): ?>

					<?php while( have_rows('banner') ): the_row();

						// vars
						$bannerImage = get_sub_field('banner_image');
						$bannerName = get_sub_field('banner_name');

						?>

						<figure class="catalog_content_banner">

							<!-- img_wrap provides a container with a background, creating the monochrome effect  -->
							<div class="img_wrap">
								<?php if( $bannerImage ): ?>
									<img class="banner_image" src="<?php echo $bannerImage; ?>" alt="">
								<?php endif; ?>
							</div>

							<?php if( $bannerName ): ?>
								<figcaption class="banner_title"><?php echo $bannerName; ?></figcaption>
							<?php endif; ?>

						</figure>

					<?php endwhile; ?>

				<?php endif; ?>
		</div>

	</main>

<?php get_footer(); ?>
