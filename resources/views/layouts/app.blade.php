<!doctype html>
<html lang="en">

<head>
    <title>Home - blackoakexperience</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
        
    <link rel="stylesheet" href="{{asset('public/front_assets/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&family=Pacifico&family=Syne:wght@400..800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oregano:ital@0;1&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nanum+Myeongjo&family=Pacifico&family=Syne:wght@400..800&display=swap"
        rel="stylesheet">

    <!-- owl -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Slick Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
</head>

<body>
    
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    

<!-- Bootstrap JavaScript Libraries -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<!-- Owl -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- Slick Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




<script>
    $('#event_one').owlCarousel({
        loop: true
        , margin: 10
        , responsiveClass: true
        , autoplay: true
        , nav: false
        , dots: false
        , speed: 1500
        , responsive: {
            0: {
                items: 1
                , nav: false
            }
            , 600: {
                items: 3
                , nav: false
            }
            , 1000: {
                items: 3
                , nav: false
                , loop: false
            }
        }
    });

</script>

<script>
    $('#event_two').owlCarousel({
        loop: true
        , margin: 10
        , rtl: true
        , responsiveClass: true
        , autoplay: true
        , nav: false
        , dots: false
        , speed: 500
        , responsive: {
            0: {
                items: 1
                , nav: false
            }
            , 600: {
                items: 3
                , nav: false
            }
            , 1000: {
                items: 3
                , nav: false
                , loop: false
            }
        }
    });

</script>

<script>
    $('#event_three').owlCarousel({
        loop: true
        , margin: 10
        , responsiveClass: true
        , autoplay: true
        , nav: false
        , dots: false
        , speed: 1500
        , responsive: {
            0: {
                items: 1
                , nav: false
            }
            , 600: {
                items: 3
                , nav: false
            }
            , 1000: {
                items: 3
                , nav: false
                , loop: false
            }
        }
    });

</script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true
        , margin: 10
        , autoplay: true
        , nav: true
        , responsive: {
            0: {
                items: 1
            }
            , 600: {
                items: 3
            }
            , 1000: {
                items: 5
            }
        }
    })

</script>

<!-- Slick Script -->
<script>
    $('.slick_vertical_upcoming_event').slick({
        dots: true
        , infinite: false
        , autoplaySpeed: 2000
        , speed: 1500
        , slidesToShow: 4
        , slidesToScroll: 4
        , autoplay: true
        , verticalSwiping: true
        , vertical: true
        , prevArrow: false
        , nextArrow: false
        , responsive: [{
                breakpoint: 1920
                , settings: {
                    slidesToShow: 2
                    , slidesToScroll: 1
                    , infinite: true
                    , dots: false
                }
            }
            , {
                breakpoint: 991
                , settings: {
                    slidesToShow: 1
                    , slidesToScroll: 1
                }
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

</script>


</body>
</html>
