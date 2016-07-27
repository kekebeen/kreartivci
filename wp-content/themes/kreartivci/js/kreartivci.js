var modalForm = document.getElementById('product-modal');
var body = document.getElementsByTagName('body')[0];

$(document).ready(function() {
    $(".inner").pjax('a[data-pjax]');
    $('.menu-toggle').click(function(){
        $('#nav').slideToggle();
    });
});


function openModal(e){
    
    modalForm.classList.add('show');
    body.classList.add('modal-opened');

}

function modalClose(e){
    
    modalForm.classList.remove('show');
    body.classList.remove('modal-opened');

}