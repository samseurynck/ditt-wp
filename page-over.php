<?php get_header(); ?>

	<main role="main" class="over_main">

		<div class="over_header">
			<?php
				if( have_rows('contact_details') ): while ( have_rows('contact_details') ) : the_row();
					$detail = get_sub_field('detail');
						echo '<p>'.$detail.'</p>';
					endwhile;
				 endif;
				?>
		</div>

	 <div class="over_bg_block" id="over_bg_block_left">
		 <div class="bg_topContent" id="bg_block_left_topContent"></div>
		 <div class="bg_middleContent" id="bg_block_left_middleContent"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
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
			<div class="bg_middleContent" id="bg_block_right_middleContent"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
			<div class="bg_bottomContent" id="bg_block_left_bottomContent"><?php the_field('credits'); ?></div>
		</div>

		<div class="over_footer">
				<?php the_field('credits'); ?>
		</div>

	</main>
