jQuery(document).ready(function($) {
    
    /*pjax*/
    $('.inner').pjax('a[data-pjax]');

    $('.menu-toggle').click(function () {
      $('#nav').slideToggle();
    });

});
