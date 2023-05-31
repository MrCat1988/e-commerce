// $("#categoriesTitle").on("click",function(){
//     if(window.matchMedia("(max-width:768px)").matches){
//         $("#categoriesTitle").after($("#categories").slideToggle("fast"));
//     }else{
//         $("#header").after($("#categories").slideToggle("fast"));
//     }
// })


$("#categoryValue li a").on("click",function(){
    let categoryId = $(this).attr("categoryId");
    console.log(categoryId);
    let dataRequest = new FormData();
    dataRequest = ("categoryId", categoryId);

    $.ajax({
        url: 'ajax/products.ajax.php',
        method: "POST",
        data: dataRequest,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(data) {
            console.log(data);
        }
    });



})