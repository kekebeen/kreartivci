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
      
      <?php 
        //$paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        $args = array("post_type" => 'post',"posts_per_page" => 5,'paged' => $paged);
        $loop = new WP_Query($args);
      ?>

      <div class="article-list">
        <div class="row">
          <h1 class="blog-title">Novosti</h1>
          <?php while($loop->have_posts()): $loop->the_post(); ?>
            <div class="article col-12">
              <a data-pjax href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
              <?php if(has_post_thumbnail()): ?>
                <div class="post-cover">
                  <?php the_post_thumbnail('blog-cover'); ?>
                </div>
              <?php endif ?>
              <p><?php the_excerpt(); ?></p>
            </div><!-- featured article -->
            
          <?php endwhile ?>
        </div><!--row -->
         <?php if ($loop->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
          <nav class="prev-next-posts">
            <div class="prev-posts-link">
              <?php echo get_next_posts_link( 'Stariji Postovi', $loop->max_num_pages ); // display older posts link ?>
            </div>
            <div class="next-posts-link">
              <?php echo get_previous_posts_link( 'Noviji Postovi' ); // display newer posts link ?>
            </div>
          </nav>
        <?php } ?>
        <?php wp_reset_query() ?>
      </div><!-- article list -->
    </div><!-- inner -->
    <?php include('partials/footer.php') ?>
      
  </div><!-- main-->


<?php get_footer(); ?>
