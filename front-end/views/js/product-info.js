box = document.getElementById("product-info-box");

window.addEventListener('resize', function(event) {
    // console.log(window.screen.width);
    console.log(document.body.clientWidth);

    if(document.body.clientWidth <= 992){
        box.classList.add("fixed-bottom");
    }else{
        box.classList.remove("fixed-bottom");
    }
}, true);


if(document.body.clientWidth < 990){
    box.classList.add("fixed-bottom");
}else{
    box.classList.remove("fixed-bottom");
}

    


