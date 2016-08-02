<?php get_header(); ?>
  
    <?php include('partials/home/udruzenje-nav.php'); ?>
	<div id="main">
        <?php include('partials/home/hero.php'); ?>
        <div class="inner">
            <div class="row">
                <article class="column novost">
                <?php if (have_posts() ): while(have_posts() ): the_post(); ?>
                    <div class="novost-single-body">
                        <h3 class="novost-single-title"><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                </article>
            </div>
            <?php endwhile;endif; ?>
        </div><!-- inner -->
        <?php include('partials/home/footer.php'); ?>
    </div><!-- main content div -->
    
<?php get_footer(); ?>
