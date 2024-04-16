<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sukses Jinyoung Indonesia</title>
    <meta name="description" content="Menyediakan produk berkualitas tinggi, sehingga meningkatkan pengalaman bermain golf bagi pelanggan, dan berkomitmen terhadap kelestarian lingkungan">
    <meta name="keywords" content="sarung tangan, produsen sarung tangan, distributor sarung tangan, sarung tangan karet, sarung tangan latex, sarung tangan nitrile, sarung tangan medis, sarung tangan pembersih, sarung tangan kerja, pakaian pelindung, peralatan keselamatan, perlindungan tangan, industri sarung tangan, perlindungan kesehatan, merek sarung tangan, pemasok sarung tangan, pilihan sarung tangan, sarung tangan industri, sarung tangan medis, perlindungan tangan, keamanan kerja, pakaian kerja, perlindungan kerja, perlindungan personal, perusahaan sarung tangan, pengrajin sarung tangan, eksportir sarung tangan, impor sarung tangan, kualitas sarung tangan, inovasi sarung tangan, perlindungan lingkungan, perlindungan kesehatan, kenyamanan sarung tangan">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/style.css') }}?v1.8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css">
    <link rel="shortcut icon" href="{{ URL::asset('template/img/SJI.svg') }}">
    <link rel="stylesheet" href="{{ URL::asset('template/aos/aos.css')}}" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script src="https://kit.fontawesome.com/6d3db1e240.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
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
        particlesJS("vision-mission", {
            "particles": {
                "number": {
                    "value": 290,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#2246f8"
                },
                "shape": {
                    "type": "triangle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 10
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 50,
                        "height": 50
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 0.8,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#2246f8",
                    "opacity": 0.1,
                    "width": 0.8
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": true,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": true,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "window",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 140,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 100,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 100,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });
    </script>
    <script>
        $(document).ready(function(){
            $('.slick1').slick({
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
                $(".slick1").slick("slickPrev");
            });

            $(".next-btn").click(function () {
                $(".slick1").slick("slickNext");
            });
            $(".prev-btn").addClass("slick-disabled");
            $(".slick1").on("afterChange", function () {
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

        var navbar = document.getElementById("fixed-header");
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
