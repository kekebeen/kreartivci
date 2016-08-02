      <?php
      $paged = (get_query_var('page')) ? get_query_var('page') : 1;
      $args = array( 'post_type' => 'artikli');
      //$loop = new WP_Query( $args );
      query_posts($args);
      ?>

      <section id="products">
        <div class="section-title">
          <h1>Trenutno Aktivno</h1>
        </div><!-- section title -->

        <div class="grid-fluid articles-list">
          <div class="row">
                <?php
                if(have_posts() ):
                while(have_posts() ) : the_post();
                ?>
                <div class="col-3">
                  <div class="product-item">
                
                    <figure class="snip1321">
                      <?php the_post_thumbnail('featured-thumb'); ?>
                      <figcaption>
                        <a class="btn btn-outlined" data-pjax href="<?php the_permalink(); ?>">Detaljno</h1></a>
                      </figcaption>
                    </figure>

                    <div class="product-item-title">
                     <a href="#<?php the_ID(); ?>" data-pjax data-target="<?php the_ID() ?> ">
                        <?php the_title(); ?>
                      </a> 
                    </div>
                    <div class="product-item-price"><strong><?php echo the_cfc_field('cijena', 'cijena'); ?></strong></div>
                    <div class="product-item-tags"><?php the_tags(); ?></div>

                  </div><!-- product item-->

                </div><!-- item div -->
                <?php echo previous_posts_link(); ?>
              <?php endwhile; else:  ?>
                <div class="alert" style="height:300px;
                                    display:flex;
                                    justify-content:center;
                                    align-items:center"><h3>Trenutno nema aktivnih proizvoda</h3></div>
                <?php endif ?>

              <?php wp_reset_query(); ?>
          </div><!-- row -->
        </div><!-- grid articles list -->
      </section><!-- section -->
