$(document).ready(function(){
    let categoryIdRequest = $('.products').attr("categoryId");
    let subcategoryIdRequest = $('.products').attr("subCategoryId");
    let limit = '';
    let offset = '';
    let productsRequest = new FormData();
    productsRequest.append('categoryIdRequest',categoryIdRequest);
    productsRequest.append('subcategoryIdRequest',subcategoryIdRequest);
    productsRequest.append('limit',limit);
    productsRequest.append('offset',offset);
    $.ajax({
            url: 'ajax/products.ajax.php',
            method: "POST",
            data: productsRequest,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(data) {
                console.log(data);
            }
    });



});