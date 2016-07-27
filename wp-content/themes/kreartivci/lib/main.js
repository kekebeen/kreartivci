jQuery(document).ready(function($) {
    

    $(window).scroll(function(){

      var wScroll = $(this).scrollTop(),
          productContainer = $('.articles-list');
      
      if(wScroll > productContainer.offset().top - ($(window).height() / 1.65 )){
        $('.articles-list .row figure').each(function(i){

          setTimeout(function(){
            $('.articles-list .row figure').eq(i).addClass('show');
          }, (700 * (Math.exp(i * 0.14))) - 700);

        });

      }/* animate product grid on viewport enter*/

    });

    /*gallery on click*/
    $('figure a').click(function(){
      var target = $(this).data('target');
      $('.port-'+target).addClass('item_open');
      $('html, body').animate({
         scrollTop: parseInt($("#products").offset().top)
      }, 400);

    });
    /*gallery close*/
    $('.close').click(function(){
      $('.port').removeClass('item_open');
    });

    /*pjax*/
    $('.inner').pjax('a[data-pjax]');


    $('.menu-toggle').click(function () {
      $('#nav').css('display','block');
    });

});
