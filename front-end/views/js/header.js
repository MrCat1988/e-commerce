// Scrolled effect, change background nav color
document.addEventListener("scroll", ()=>{
    const header = document.querySelector("header");
    if(window.scrollY > 0){
        header.classList.add('scrolled');
    }else{
        header.classList.remove('scrolled');
    }
})

// LOAD SUBCATEGORIES FROM 1ST ELEMENT OF CATEGORIES
$("#categories-button").on("click",function(){
    // alert("Loading categories");
})

// LOAD SUBCATEGORIES LIST
$("#categoryValue li a").on("click",function(){
    let categoryId = $(this).attr("categoryId");
    console.log(categoryId);
    // let categoryRoute = $(this).attr("route");
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



// ADD SELECTED CLASS TO HEADER CENTER MENU
let idCategoryActual = $("#products").attr("categoryId");
if(idCategoryActual != null){
    let menuItems = document.querySelectorAll(".idCategoryFromHeader");
    menuItems.forEach((item) => {
        item.attributes[2].value === idCategoryActual ? item.classList.add("selected") : item.classList.remove("selected");
    });
}