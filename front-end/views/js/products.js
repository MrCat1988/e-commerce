// =========================================================================
// =======              PRODUCT HOVER SHOW SIZE DIV             ============
// =========================================================================
$(".product").on('mouseover', function(){
    $(this).children()[2].classList.remove('d-none');
    // console.log('Im hovered');
    
});
$(".product").on('mouseleave', function(){
    $(this).children()[2].classList.add('d-none');
    // console.log('Im un-hovered');
});

