$("#categoriesTitle").on("click",function(){
    if(window.matchMedia("(max-width:768px)").matches){
        $("#categoriesTitle").after($("#categories").slideToggle("fast"));
    }else{
        $("#header").after($("#categories").slideToggle("fast"));
    }
})