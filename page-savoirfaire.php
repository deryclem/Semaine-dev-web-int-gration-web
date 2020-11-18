<?php get_header(); ?>

<body>

  <h1 class="h1_flex">À propos</h1>
  <div id="underline_flex"></div>
  <br/>
  <div id="presentation">
    <p id="intro_text"><?php $intro = get_field('intro'); echo $intro; ?></p>
  </div>

  <!-- Flickity HTML init -->
  <div class="gallery js-flickity"
    data-flickity-options='{ "wrapAround": true }'>
    <div class="gallery-cell"><img src="images/carousel_1.png"</div>
    <div class="gallery-cell"></div>
    <div class="gallery-cell"></div>
  </div>

<section class="wrap">

<div class="maçonnerie">
  <div class="carrousel_droit">
    <img src="<?php $image2 = get_field('image2'); echo $image2; ?>"  alt="carroussel"> <!--carroussel-->
  </div>
  <img src="<?php echo get_template_directory_uri();?>/images/cadre_droit.svg" class="absolute">
  <div id="image1">
  </div>
  <div class="texte">
    <h2 class="h2_flex"><?php $titre2 = get_field('titre2'); echo $titre2; ?></h2>
    <h3 class="h3_flex"><?php $stitre2 = get_field('stitre2'); echo $stitre2; ?></h3> <!--sous-titre ex : gérant de la maçonnerie-->
    <p class="para"><?php $texte2 = get_field('text2'); echo $texte2; ?></p>
</div>
</div>
</section>



  </body>

<?php get_footer(); ?>
