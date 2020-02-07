function menu() {

    $('.menu-btn').click(function(){
        $('.mobile-menu').addClass('open');
    });
    
    $('.mobile-menu ul li').click(function(){
        var currLocation = $(this).attr('data-loc');
        if($(window).width() > 992) {
            $('.site').animate({ scrollTop: $($('#' + currLocation)).offset().top + $('.site').scrollTop() }, 1000);
        } else {
            $('html, body').animate({ scrollTop: $($('#' + currLocation)).offset().top }, 1000);
        }
        $('.mobile-menu ul li').removeClass('active');
        $(this).addClass('active');
        $('.mobile-menu').removeClass('open');
    });

    $('.site, .close-btn').click(function(){
        $('.mobile-menu').removeClass('open');
        $('.mobile-menu ul li').removeClass('active');
    });
}



function carousel() {
    $('.content-carousel').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        draggable: true,
        prevArrow: $('button.prev'),
        nextArrow: $('button.next'),
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            }
        ]


    });
}

$(document).ready(function(){
    menu(),
    carousel();
});