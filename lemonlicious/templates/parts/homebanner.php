<?php
// Flavours of Banner
  // Original
  $origional_cta_title = get_field('origional_cta_title');
  $origional_button_text = get_field('origional_button_text');
  $origional_button_url = get_field('origional_button_url');
  $origional_banner_image = get_field('origional_banner_image');
  // Sugarless
  $sugarless_cta_title = get_field('sugarless_cta_title');
  $sugarless_button_text = get_field('sugarless_button_text');
  $sugarless_button_url = get_field('sugarless_button_url');
  $sugarless_banner_image = get_field('sugarless_banner_image');
  // Ginger
  $ginger_cta_title = get_field('ginger_cta_title');
  $ginger_button_text = get_field('ginger_button_text');
  $ginger_button_url = get_field('ginger_button_url');
  $ginger_banner_image = get_field('ginger_banner_image');
  // Cranberry
  $cranberry_cta_title = get_field('cranberry_cta_title');
  $cranberry_button_text = get_field('cranberry_button_text');
  $cranberry_button_url = get_field('cranberry_button_url');
  $cranberry_banner_image = get_field('cranberry_banner_image');

?>
<section id="Hbanner">
      <!-- Swiper -->
  <div class="swiper-container homeswipe">
    <div class="swiper-wrapper">
    
    <!-- 1st -->
      <div class="swiper-slide lime">
        <div class="wrapper">
          <div class="banner">
              <div class="content">
                <h1><?= $origional_cta_title;?></h1>
                <div class="btn">
                    <a href="<?=$origional_button_url;?>"><?= $origional_button_text?></a>
                    <div class="fill"></div>
                </div>
              </div>
              <div class="shapes">
                  <img src="<?=$origional_banner_image;?>" alt="">
              </div>
          </div>
        </div>
      </div>

      <!-- 2nd -->
      <div class="swiper-slide blue">
        <div class="wrapper">
        <div class="banner">
            <div class="content">
                <h1><?= $sugarless_cta_title;?></h1>
                <div class="btn">
                    <a href="<?=$sugarless_button_url;?>"><?= $origional_button_text?></a>
                    <div class="fill"></div>
                </div>
            </div>
              <div class="shapes">
                  <img src="<?=$sugarless_banner_image;?>" alt="">
              </div>
        </div>
        </div>
      </div>

      <!-- 3rd -->
      <div class="swiper-slide orange">
        <div class="wrapper">
        <div class="banner">
            <div class="content">
                <h1><?= $ginger_cta_title;?></h1>
                <div class="btn">
                    <a href="<?=$ginger_button_url;?>"><?= $origional_button_text?></a>
                    <div class="fill"></div>
                </div>
            </div>
              <div class="shapes">
                  <img src="<?=$ginger_banner_image;?>" alt="">
              </div>
        </div>
        </div>
      </div>

      <!-- 4th -->
      <div class="swiper-slide rasberry">
        <div class="wrapper">
        <div class="banner">
            <div class="content">
                <h1><?= $cranberry_cta_title;?></h1>
                <div class="btn">
                    <a href="<?=$cranberry_button_url;?>"><?= $origional_button_text?></a>
                    <div class="fill"></div>
                </div>
            </div>
              <div class="shapes">
                  <img src="<?=$cranberry_banner_image;?>" alt="">
              </div>
        </div>
      </div>
        </div>
  </div>

    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-black"></div>
    <div class="swiper-button-prev swiper-button-black"></div>
  </div>

</section>
