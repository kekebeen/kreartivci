<?php
    //$paged = (get_query_var('page')) ? get_query_var('page') : 1;
    $args = array( 'post_type' => 'novosti',
                    'post_status' => 'publish',
                    'posts_per_page' =>'2',
                    'cache_results' => false,
                    'no_found_rows' => true);
    //$loop = new WP_Query( $args );
    query_posts($args);
?>
<section id="novosti" class="novosti-section">
    <h1>Novosti</h1>

    <div class="row">
        <?php
            if(have_posts() ):
            while(have_posts() ): the_post();
        ?>
        <article class="column column-50 novost">
            <div class="novost-image">
                <?php the_post_thumbnail('novosti-thumbnail'); ?>
            </div><!-- novost image -->
            <div class="novost-body">
                <div class="novost-date"><?php the_time('F j, Y'); ?></div>
                <h4 class="novost-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <div class="novost-author">Napisano od kreArtivci</p></div>
            </div><!-- novost body -->
        </article><!-- article -->
        <?php endwhile ?>
        <?php else: ?>
            <div style="width:100%;padding-top:100px;padding-bottom:50px;text-align:center;border:1px solid rgba(0,0,0,0.1);">
                <h3>Trenutno nema aktivnih novosti ...</h3>
            </div>
        <?php endif ?>
        <?php wp_reset_query(); ?>
    </div><!-- row -->
    
</section><!-- novosti section -->
