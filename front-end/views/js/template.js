// // Template
// $.ajax({
//     url: 'ajax/template.ajax.php',
//     success: function(data) {
//         data = JSON.parse(data);
//         $(".topBar").css({"background": data.topBarBgColor, "color": data.topBarTextColor});
//         data.topBarShow == 0 ? $(".topBar").css({"display": "none"}) : $(".topBar").css({"display": "block"});
//         $(".mainHeader").css({"background": data.mainBarBgColor});
//         $("#top a, .socialNetwork").css({"color": data.mainBarTextColor});
//         $(".socialNetwork, #top .register ul li a").hover(function(){
//             $(this).css({"color": data.hoverColor, "transition": "0.5s ease"});
//         }, function(){
//             $(this).css({"color": data.mainBarTextColor, "transition": "0.5s ease"});
//         });
//     }
// });

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))