<?php get_header(); ?>

	<main role="main" class="over_main">

		<div class="over_bg_block" id="over_bg_block_left">
			<div class="bg_topContent" id="bg_block_left_topContent"></div>
			<div class="bg_middleContent" id="bg_block_left_middleContent"><p class="fourOfourText" id="fourOfour">404<p></div>
			<div class="bg_bottomContent" id="bg_block_left_bottomContent">
			</div>
		</div>

		 <div class="over_bg_block" id="over_bg_block_right">
			 <div class="bg_topContent" id="bg_block_left_topContent"></div>
			 <div class="bg_middleContent" id="bg_block_right_middleContent"><p class="fourOfourText">Content not found!</p></div>
			 <div class="bg_bottomContent" id="bg_block_left_bottomContent"><?php the_field('credits'); ?></div>
		 </div>

	</main>


<!-- <?php //get_footer(); ?> -->
