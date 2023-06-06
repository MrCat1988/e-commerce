// $("#categoriesTitle").on("click",function(){
//     if(window.matchMedia("(max-width:768px)").matches){
//         $("#categoriesTitle").after($("#categories").slideToggle("fast"));
//     }else{
//         $("#header").after($("#categories").slideToggle("fast"));
//     }
// })


$("#categoryValue li a").on("click",function(){
    let categoryId = $(this).attr("categoryId");
    let categoryRoute = $(this).attr("route");
    let dataRequest = new FormData();
    dataRequest.append("categoryId", categoryId);
    let subcategoryList = document.getElementById("subCategoryList");
    subcategoryList.innerHTML = '';
    $.ajax({
        url: 'ajax/products.ajax.php',
        method: "POST",
        data: dataRequest,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(data) {
            data.forEach(element => {
                let liElement = document.createElement("li");
                let aElement = document.createElement("a");
                aElement.appendChild(document.createTextNode(element.subcategory));
                aElement.href = element.route;
                liElement.appendChild(aElement);
                subcategoryList.appendChild(liElement);

            });
        }
    });



})