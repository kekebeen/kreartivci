<?php get_header(); ?>

  <?php include('partials/nav.php') ?>

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
    
    <article class="post-preview">
      <?php if (have_posts() ): while(have_posts() ): the_post(); ?>
      <h2><?php the_title( ); ?></h2>
      <p><?php the_content( ); ?></p>

    </article><!-- article -->
      <?php endwhile; endif ?>

      <?php wp_reset_query(); ?>

    </div><!-- inner -->
      <?php include('partials/footer.php') ?>

<?php get_footer(); ?>
