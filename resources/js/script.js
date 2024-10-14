//Evento navbar

let navbar = document.querySelector('#navbar');

window.addEventListener('scroll', ()=>{
    if(window.scrollY > 0){
        navbar.classList.add('scrolledNavbar')
    }else{
        navbar.classList.remove('scrolledNavbar')
    }
});

//Evento bottone torna su

    jQuery(document).ready(function() {
    
    let btn = $('#button');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
        btn.addClass('show');
        } else {
        btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });

    });

