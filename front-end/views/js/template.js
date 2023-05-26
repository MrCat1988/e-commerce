// Template
$.ajax({
    url: 'ajax/template.ajax.php',
    success: function(data) {
        data = JSON.parse(data);
        $(".topBar").css({"background": data.topBarBgColor, "color": data.topBarTextColor});
        $(".mainHeader").css({"background": data.mainBarBgColor});
        $("#top a, .socialNetwork").css({"color": data.mainBarTextColor});
        $(".socialNetwork").hover(function(){
            $(this).css({"color": data.hoverColor, "transition": "0.5s ease"});
        }, function(){
            $(this).css({"color": data.mainBarTextColor, "transition": "0.5s ease"});
        });
        console.log(data.hoverColor);
    }
});