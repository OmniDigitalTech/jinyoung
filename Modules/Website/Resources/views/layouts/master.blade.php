<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jinyoung</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css">
    <link rel="shortcut icon" href="{{ URL::asset('template/img/SJI.svg') }}">
    <link rel="stylesheet" href="{{ URL::asset('template/aos/aos.css')}}" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script src="https://kit.fontawesome.com/6d3db1e240.js" crossorigin="anonymous"></script>
</head>
<body class="antialiased">
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{ URL::asset('template/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('template/aos/aos.js')}}"></script>
    <script src="{{ URL::asset('template/js/aos/animation-aos.init.js')}}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.slick-slide').slick({
                autoplay: true,
                rows: 2,
                dots: false,
                arrows: true,
                infinite: true,
                autoplaySpeed: 2000,
                slidesToShow: 4,
                slidesToScroll: 4,
                responsive: [
                            {
                                breakpoint: 1024,
                                settings: {
                                    slidesToShow: 4,
                                    slidesToScroll: 4,
                                }
                            },
                            {
                                breakpoint: 600,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 3
                                }
                            },
                            {
                                breakpoint: 480,
                                settings: {
                                    row : 3,
                                    slidesToShow: 2,
                                    slidesToScroll: 2
                                }
                            }
                        ]
            });
            $(".prev-btn").click(function () {
                $(".slick-slide").slick("slickPrev");
            });

            $(".next-btn").click(function () {
                $(".slick-slide").slick("slickNext");
            });
            $(".prev-btn").addClass("slick-disabled");
            $(".slick-slide").on("afterChange", function () {
                if ($(".slick-prev").hasClass("slick-disabled")) {
                    $(".prev-btn").addClass("slick-disabled");
                } else {
                    $(".prev-btn").removeClass("slick-disabled");
                }
                if ($(".slick-next").hasClass("slick-disabled")) {
                    $(".next-btn").addClass("slick-disabled");
                } else {
                    $(".next-btn").removeClass("slick-disabled");
                }
            });
        });
    </script>
    <script>
        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("navbarSupportedContent");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
</body>
</html>
