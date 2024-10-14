$(document).ready(function(){

    $(".circle" ).animate({
        width: '75vh',
        height: '75vh'
    },1000);

    $(".magictrick" ).fadeIn(875);

    $(".cardarticle").mouseenter(function(){

        $(this).css("border-width", "2px")
       
    });    

    $(".cardarticle").mouseleave(function(){

        $(this).css("border-width", "1px")
       
    }); 
 

    $(".stilealert" ).animate({
        width: '12.5vh',
    },1000);
});

