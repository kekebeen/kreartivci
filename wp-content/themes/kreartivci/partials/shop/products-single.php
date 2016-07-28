<div class="modal-form" id="product-modal">
    <div class="box">
        <div class="modal-close">
            <a href="javascript:void(0);" onClick="modalClose()" id="modal-close"><img src="<?php bloginfo('template_url')?>/images/x.png" alt="close.png"></a>
        </div>
        <div class="product-form">
            <?php echo do_shortcode('[contact-form-7 id="71" title="Product Form"]'); ?>
        </div><!-- product-form -->
        <div class="product-form-footer">
            <p>&copy; 2016 kreartivci - made with <small>&#10084;</small>
        </div>
    </div><!-- box -->
</div><!-- modal window -->


<div class="bcs clearfix">
    <a href="/">Početna</a>
    &nbsp;/&nbsp;
    <a href="/">Artikli</a>
    &nbsp;/&nbsp;
    <a href="javascript:void(0)"><?php the_title() ?></a>

    <a href="javascript:void(0);" id="modal-trigger" onclick="openModal()" class="pull-right btn btn-small">Pošalji upit</a>
</div><!-- bcs -->

<div class="product-single" id="item-<?php the_ID(); ?>">
    <div class="row">
        <div class="col-6 product-images">
            <div class="owl-carousel" id="owl">
            <?php
                foreach( get_cfc_meta( 'slika-artikla' ) as $key => $value ){ ?>
                    <?php $photo_obj = get_cfc_field( 'slika-artikla','slika', false, $key );  ?>
                    <div class="gallery-element">
                        <a href="<?php echo $photo_obj['url'] ?>" data-lightbox="<?php echo $photo_obj['title'] ?>"><img src="<?php echo $photo_obj['sizes']['featured-single-thumb']; ?>" height="<?php echo $photo_obj['sizes']['featured-single-thumb-height']; ?>" width="<?php echo $photo_obj['sizes']['featured-single-thumb-height']; ?>"/></a>
                    </div>
            <?php } ?>
            </div><!-- owl-carousel -->
           
        </div><!-- product-images -->
        <div class="col-6 product-desc">
            <h2 class="product-title"><?php the_title() ?></h2>
            <div class="product-offer">
                <div class="price"><?php echo the_cfc_field('cijena','cijena') ?></div>
            </div><!-- product offer -->
            <div class="product-details">
                <p>
                    <?php if ($post->post_content == "" ): ?>
                    <br>
                    Trenutno Nema Detaljnijih Informacija..
                    <div style="height:30px"></div>
                    <?php endif ?>
                    <?php echo $post->post_content ?>
                </p>
            </div><!-- product-details -->
        </div><!-- product-desc-->
    </div><!-- row -->
</div><!-- product-single -->