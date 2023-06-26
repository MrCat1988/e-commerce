let observer = new IntersectionObserver((entries, observer) => {
    console.log(entries);
},{
    rootMargin: '0px 0px 0px 0px',
    threshold: 1.0
});




$(document).ready(function(){
    let products;
    let categoryIdRequest = $('.products').attr("categoryId");
    let subcategoryIdRequest = $('.products').attr("subCategoryId");
    let limit = '';
    let offset = '';
    let productsRequest = new FormData();
    productsRequest.append('categoryIdRequest',categoryIdRequest);
    productsRequest.append('subcategoryIdRequest',subcategoryIdRequest);
    productsRequest.append('limit',limit);
    productsRequest.append('offset',offset);
    loadProducts(productsRequest);


});

function loadProducts(productsRequest){
    let productsContainer = $('.products');
    let html = '';
    $.ajax({
            url: 'ajax/products.ajax.php',
            method: "POST",
            data: productsRequest,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(data) {
                data.forEach(element => {
                    // console.log(element);
                    console.log(element.title);
                    details = JSON.parse(element.details);
                    // console.log(details);
                    var keys = Object.keys(details);
                    for (let i = 0; i < keys.length; i++) {
                        var innerKeys = Object.keys(details[keys[i]]);
                        console.log(keys[i]);
                        // console.log(details[keys[i]]);
                        var innerDetails = details[keys[i]];
                        for (let x = 0; x < innerKeys.length; x++) {
                            console.log(innerKeys[x]);
                            console.log(innerDetails[innerKeys[x]]);

                        }
                        
                    }
                    // console.log(keys.length);




                    
            //         html += `
            //         <div class="px-5 py-3 col-sm-6 col-lg-4">
            //             <div class="product position-relative">
            //                 <a href="${element.route}" idproduct="${element.idproduct}">
            //                     <img id="product-image" class="img-fluid" src="http://localhost/e-commerce/back-end/${element.cover_img}" alt="">
            //                 </a>
            //                 <div class="ribbon position-absolute top-0">
            //                     <p>${element.new == 1 ? 'NEW' :''}</p>
            //                 </div>
        
            //                 <div id="sizes" class="sizes position-absolute bottom-0 px-3 w-100 d-none">
            //                     <p class="text-center mb-0 py-1">Selecciona tu talla</p>
            //                     <ul class="d-flex justify-content-evenly">
            //                         <li><a class="text-decoration-none text-black" href="XS">XS</a></li>
            //                         <li><a class="text-decoration-none text-black" href="S">S</a></li>
            //                         <li><a class="text-decoration-none text-black" href="M">M</a></li>
            //                         <li><a class="text-decoration-none text-black" href="L">L</a></li>
            //                         <li><a class="text-decoration-none text-black" href="XL">XL</a></li>
            //                     </ul>
            //                 </div>
            //             </div>
            //             <div class="price-info d-flex justify-content-between">    
            //                     <p class="description">Vestido negro</p>
            //                     <small class="price">35.00 USD</small>
            //                 </div>
            //                 <div class="discount-info d-flex justify-content-end">
            //                     <p class="discount px-2 my-0 transparent"> 0 </p>
            //                     <p class="normal-price text-decoration-line-through my-0 transparent"> 0</p>
            //                 </div>
            //             </div>
            //         </div>

            //         `;
                })
            // productsContainer.append(html);

            }
    });
}