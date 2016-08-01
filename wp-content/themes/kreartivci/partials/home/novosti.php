<?php
    //$paged = (get_query_var('page')) ? get_query_var('page') : 1;
    $args = array( 'post_type' => 'novosti','posts_per_page' =>'2');
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
        <article class="column novost">
            <div class="novost-image">
                <?php the_post_thumbnail('novosti-thumbnail'); ?>
            </div><!-- novost image -->
            <div class="novost-body">
                <div class="novost-date"><?php the_date(); ?></div>
                <h4 class="novost-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <div class="novost-author">Napisano od <?php the_author(); ?></p></div>
            </div><!-- novost body -->
        </article><!-- article -->

        <?php endwhile ?>
        <?php endif ?>
        <?php wp_reset_query(); ?>
    </div><!-- row -->
</section><!-- novosti section -->