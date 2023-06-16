// =========================================================================
// =======              PRODUCT HOVER SHOW SIZE DIV             ============
// =========================================================================
$(".product").on('mouseover', function(){
    $(this).children()[2].classList.remove('d-none');

});
$(".product").on('mouseleave', function(){
    $(this).children()[2].classList.add('d-none');

});
