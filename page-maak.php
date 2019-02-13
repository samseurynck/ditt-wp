<?php // get_header(); ?>

<?php /* */ if(is_page(9)) { get_header('maak'); } else { get_header(); } wp_head(); ?>


      <main role="main" class="site-content">
        <div class="block cf" id="maak_announcement_block">
          <!-- <div class="maak_announcement_img"></div> -->

          <?php
            $heroImage = get_field('hero_image');

              if( $heroImage ):
                echo '<div class="maak_announcement_img" data-image-src="'.$heroImage.'"></div>';
              endif;
            ?>

          <div class="maak_announcement_text">
            <h1>
              MAAK DITT
            </h1>
            <p>
              Houd je van leer, leren tassen en wil je zelf je tas maken? Neem alvast contact op, dit wordt namelijk binnenkort mogelijk!
            </p>
          </div>
        </div>
      </main>

<?php get_footer(); ?>
