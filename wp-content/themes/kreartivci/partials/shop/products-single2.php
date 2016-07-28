
<div class="bcs">
    <a href="#">Pocetna</a>
    &nbsp;/&nbsp;
    <a href="#">Artikli</a>
    &nbsp;/&nbsp;
    <a href="#"><?php the_title() ?></a>
</div><!-- bcs -->

<div class="product-single" id="item-<?php the_ID(); ?>">
    <div class="row">
    <div class="flex-container">
        <div class="description">
            <h2><?php the_title(); ?></h2>
            <h5>ID - <?php the_ID(); ?></h5>
            <div class="price">
                <?php echo the_cfc_field('cijena', 'cijena'); ?>
            </div>
            <div class="description-body">
                <p>
                    <?php if ($post->post_content == "" ): ?>
                    <br>
                    Trenutno Nema Detaljnijih Informacija..
                    <div style="height:150px"></div>
                    <?php endif ?>
                    <?php the_content(); ?>
                </p> 
            </div><!-- description-body -->
        </div><!-- description -->

        <div class="thumbnail_preview">
            <?php foreach( get_cfc_meta( 'slika' ) as $key => $value ): ?>
                <?php $photo_obj = get_cfc_field( 'slika-artikla','slika', false, $key );  ?>
                <div class="gallery-element">
                    <a href ="<?php echo $photo_obj['url'] ?>" data-lightbox="<?php echo get_the_ID() ?> "><img src="<?php echo $photo_obj['url']; ?>" height="<?php echo $photo_obj['height']; ?>" width="<?php echo $photo_obj['width']; ?>"/>
                </div>
            <?php endforeach ?>
        </div>

    <div>


    <?php if (get_post_meta($post->ID, 'Allow Comments', true)) {the_comments();} ?>
    </div><!--comments-->
    
</div><!-- flex container -->

</div><!-- row -->