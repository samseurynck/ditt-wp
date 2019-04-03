<?php get_header(); ?>

	<main role="main">

		<div class="over_block">
			<p><?php the_field('over_text_1'); ?></p>
			<p><?php the_field('over_text_2'); ?></p>
		</div>

	 <div class="over_bg_block" id="over_bg_block_left">
		 <div class="bg_topContent" id="bg_block_left_topContent"></div>
		 <div class="bg_bottomContent" id="bg_block_left_bottomContent">
		 </div>
	 </div>

		<div class="over_bg_block" id="over_bg_block_right">
			<div class="bg_topContent" id="bg_block_left_topContent">
			<?php
				if( have_rows('contact_details') ): while ( have_rows('contact_details') ) : the_row();
					$detail = get_sub_field('detail');
						echo '<p>'.$detail.'</p>';
					endwhile;
				 endif;
				?>
			</div>
			<div class="bg_bottomContent" id="bg_block_left_bottomContent"><?php the_field('credits'); ?></div>
		</div>
	</main>


<!-- <?php //get_footer(); ?> -->
