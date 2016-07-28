<?php get_header(); ?>

  <?php include('partials/shop/nav.php') ?>

  <div id="main">

    <section class="hero">
      <div class="hero-inner">
        <div class="hero-text">
          <span>KreArtivci</span><br>
          <span>live</span><br>
          <span>love</span><br>
          <span>art</span>
        </div>
      </div><!-- hero inner bg -->
    </section><!-- hero container -->

    <div class="inner">
      <section id="contact">
        <div class="section-title">
          <h1>Kontaktirajte Nas</h1>
        </div><!-- section title -->

        <div class="flex-row">
          <div class="contact">
            <?php echo do_shortcode('[contact-form-7 id="70" title="Contact Page Form"]'); ?>
          </div><!-- contact -->
          
          <div class="contact-description">
            <b>Sve sto mašta može zamisliti mi možemo uraditi.</b><br/>
            <b>Tu smo da obične stvari pretvorimo u nešto unikatno i lijepo.</b><br/>
            <b>KreArtivci su tu javite nam se.</b><br/>

            <div class="google-map" id="map">
              
            </div><!-- google map-->
            
          </div><!-- contact-description -->

        </div><!-- flex row -->
      </section> <!-- contact section -->
    
    </div><!-- inner -->
      <?php include('partials/shop/footer.php') ?>
    
  </div><!-- hero section -->





<?php get_footer(); ?>
  
