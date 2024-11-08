
    
        $('#event_one').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay: true,
            nav: false,
            dots: false,
            speed: 1500,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: false,
                    loop: false
                }
            }
        });

    $('#event_two').owlCarousel({
    loop: true,
    margin: 10, 
    rtl:true,
    responsiveClass: true,
    autoplay: true,
    nav: false,
    dots: false,
    speed: 500,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 3,
            nav: false
        },
        1000: {
            items: 3,
            nav: false,
            loop: false
        }
    }
});

        $('#event_three').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay: true,
            nav: false,
            dots: false,
            speed: 1500,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: false,
                    loop: false
                }
            }
        });


    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay: true,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

        $('.slick_vertical_upcoming_event').slick({
            dots: true,
            infinite: false,
            autoplaySpeed: 2000,
            speed: 1500,
            slidesToShow: 4,
            slidesToScroll: 4,
            autoplay: true,
            verticalSwiping: true,
            vertical: true,
            prevArrow: false,
            nextArrow: false,
            responsive: [
                {
                    breakpoint: 1920,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },

            ]
        });
        
