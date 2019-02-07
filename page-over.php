<?php get_header(); ?>

	<main role="main">
		<!-- <div class="over_block">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</p>
		</div>

	 <div class="over_bg_block" id="over_bg_block_left">
		 <div class="bg_topContent" id="bg_block_left_topContent"></div>
		 <div class="bg_bottomContent" id="bg_block_left_bottomContent"></div>
	 </div>

		<div class="over_bg_block" id="over_bg_block_right">
			<div class="bg_topContent" id="bg_block_left_topContent">
				custom bags &amp accessories </br>
				handmade in Utrecht, NL </br></br>+31616074969
			</div>
			<div class="bg_bottomContent" id="bg_block_left_bottomContent">
				Op deze kun je ook mijn portfolio inzien. Alle tassen en accessoires worden volledig handgemaakt in het DITT atelier te Utrecht. </br>Site design and development by Samantha Griffith.
			</div>
		</div> -->

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
