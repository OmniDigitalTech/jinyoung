@extends('website::layouts.master')

@section('content')
    <header>
        <nav class="navbar nav-head">
            <div class="container-fluid">
                <a class="navbar-brand">PT Jinyoung Sukses Indonesia</a>
                <form class="d-flex" role="search">
                    <button class="btn btn-primary me-2">
                        <a class="text-white text-decoration-none" href="{{ route('login') }}">Login</a>
                    </button>
                    <div class="dropdown me-2">
                        <button class="btn btn-secondary" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                                <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286zm1.634-.736L5.5 3.956h-.049l-.679 2.022z"/>
                                <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm7.138 9.995q.289.451.63.846c-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6 6 0 0 1-.415-.492 2 2 0 0 1-.94.31"/>
                            </svg>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">lang</a></li>
                            <li><a class="dropdown-item" href="#">lang</a></li>
                            <li><a class="dropdown-item" href="#">lang</a></li>
                        </ul>
                    </div>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                    </button>
                </form>
            </div>
        </nav>
    </header>

    <div class="d-flex justify-content-center py-2 bg-nav collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link fw-bold" aria-current="page">HOME</a></li>
            <li class="nav-item"><a href="#" class="nav-link fw-bold">ABOUT</a></li>
            <li class="nav-item"><a href="#" class="nav-link fw-bold">PRODUCT</a></li>
            <li class="nav-item"><a href="#" class="nav-link fw-bold">CONTACT</a></li>
        </ul>
    </div>

    <section>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active"> <img src="http://bootstraplily.com/demo/detto-ui-kit/img/intro-one/slider-one.jpg" class="d-block w-100" alt="...">
                    <div class="background-overlay"></div>
                    <div class="carousel-caption">
                        <p class="h1 mb-1 font-weight-normal">WELCOME</p>
                        <p class="h1">PT. SUKSES JINYOUNG INDONESIA</p>
                        <p class="h5 mb-5 pt-3 pb-3"><em>ABOUT SPORT GLOVES</em></p>
                    </div>
                </div>
                <div class="carousel-item"> <img src="http://bootstraplily.com/demo/detto-ui-kit/img/intro-one/slider-two.jpg" class="d-block w-100" alt="...">
                    <div class="background-overlay"></div>
                    <div class="carousel-caption">
                        <p class="h1 mb-1 font-weight-normal">WELCOME</p>
                        <p class="h3">PT. SUKSES JINYOUNG INDONESIA</p>
                        <p class="h5 mb-5 pb-3"><em>ABOUT SPORT GLOVES</em></p>
                    </div>
                </div>
                <div class="carousel-item"> <img src="http://bootstraplily.com/demo/detto-ui-kit/img/intro-one/slider-three.jpg" class="d-block w-100" alt="...">
                    <div class="background-overlay"></div>
                    <div class="carousel-caption">
                        <p class="h1 mb-1 font-weight-normal">WELCOME</p>
                        <p class="h3">PT. SUKSES JINYOUNG INDONESIA</p>
                        <p class="h5 mb-5 pb-3"><em>ABOUT SPORT GLOVES</em></p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section>
        <div class="embed-responsive embed-responsive-16by9 p-4">
            <iframe class="embed-responsive-item w-100" height="450" src="https://www.youtube.com/embed/fR7ZSxfj1j4" allowfullscreen></iframe>
        </div>
    </section>

    <section>
        <div class="curved">
            <div class="curved-svg">
                <div class="container">
                    <div class="row pt-5">
                        <div class="col-md-12 pt-5 pb-5"></div>
                        <div class="col-md-12 pt-5 pb-5"></div>
                        <div class="col-md-12 pt-5 pb-5"></div>
                        <div class="col-md-12 pt-5 pb-5">
                            <div class="main-timeline_one pt-5">
                                <div class="timeline_one pb-5">
                                    <div class="timeline_one-content">
                                        <h1 class="display-2 fw-bold text-primary">VISION</h1>
                                        <p class="description lead fw-normal">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dolor in, maiores natus ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dolor in, maiores natus.
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline_one">
                                    <div href="#" class="timeline_one-content">
                                        <h1 class="display-2 fw-bold">MISSION</h1>
                                        <p class="description lead fw-normal">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dolor in, maiores natus ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dolor in, maiores natus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 pt-5 pb-5"></div>
                        <div class="col-md-12 pt-5 pb-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-header">
                <h2>HISTORY</h2>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline">
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <div class="timeline-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">2024 Production</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dolor in, maiores natus ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dolor in, maiores natus.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <div class="timeline-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">2024 Production</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dolor in, maiores natus ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dolor in, maiores natus.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <div class="timeline-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">2024 Production</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dolor in, maiores natus ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dolor in, maiores natus.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <div class="timeline-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">2024 Production</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dolor in, maiores natus ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dolor in, maiores natus.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <div class="timeline-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">2024 Production</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dolor in, maiores natus ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dolor in, maiores natus.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <div class="timeline-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">2024 Production</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dolor in, maiores natus ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dolor in, maiores natus.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <div class="timeline-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">2024 Production</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dolor in, maiores natus ipsum dolor sit amet, consectetur adipisicing elit. Alias animi dolor in, maiores natus.
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work-porcess-area">
        <div class="container pt-5 pb-5">
            <div class="section-header">
                <h2>VALUE</h2>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
            </div>
            <div class="process-info">
                <div class="row">
                    <div class="col-md-3">
                        <div class="single-process first text-center">
                            <i class="fas fa-search"></i>
                            <h4>Discover</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-process text-center">
                            <i class="fas fa-cog"></i>
                            <h4>Discover</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-process thard text-center">
                            <i class="fas fa-globe"></i>
                            <h4>Discover</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-process last text-center">
                            <i class="fas fa-sync-alt"></i>
                            <h4>Discover</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pt-5 pb-5">
            <div class="section-header">
                <h2>PRODUCTION PROCESS FLOW</h2>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
            </div>
            <div class="row row-equal-height justify-content-center flex-nowrap" >
                <div class="col-md-3 p_column text-center">
                    <a class="text-decoration-none text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <h3 class="fw-bold">STEP 1</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                    </a>
                </div>
                <div class="col-md-3 p_column text-center ">
                    <h3 class="fw-bold">STEP 2</h3>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
                </div>
                <div class="col-md-3 p_column text-center ">
                    <h3 class="fw-bold">STEP 3</h3>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                </div>
                <div class="col-md-3 p_column text-center ">
                    <h3 class="fw-bold">STEP 4</h3>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                </div>
            </div>
            <div class="row row-equal-height justify-content-center flex-nowrap" >
                <div class="col-md-3 p_column text-center">
                    <h3 class="fw-bold">STEP 1</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                </div>
                <div class="col-md-3 p_column text-center ">
                    <h3 class="fw-bold">STEP 2</h3>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
                </div>
                <div class="col-md-3 p_column text-center ">
                    <h3 class="fw-bold">STEP 3</h3>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                </div>
                <div class="col-md-3 p_column text-center ">
                    <h3 class="fw-bold">STEP 4</h3>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
{{--                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>--}}
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="product-grid">
                            <div class="product-image">
                            </div>
                            <div class="product-content product-image">
                                <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">
                            </div>
                        </div>
                    </div>
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                        <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="section-header pt-4">
            <h2>BEST PRODUCT</h2>
            <p>Lorem Ipsum is simply dummy text of the printing.</p>
        </div>
        <div class="row p-5 pt-0 pb-2">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
{{--                        <a href="#" class="image">--}}
{{--                            <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">--}}
{{--                        </a>--}}
{{--                        <span class="product-discount-label">-23%</span>--}}
{{--                        <ul class="product-links">--}}
{{--                            <li><a href="#"><i class="fa fa-search"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-random"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <a href="" class="add-to-cart">Add to Cart</a>--}}
                    </div>
                    <div class="product-content product-image">
                        <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">
{{--                        <h3 class="title"><a href="#">Women's Blouse Top</a></h3>--}}
{{--                        <div class="price">$53.55 <span>$68.88</span></div>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
{{--                        <a href="#" class="image">--}}
{{--                            <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">--}}
{{--                        </a>--}}
{{--                        <span class="product-discount-label">-23%</span>--}}
{{--                        <ul class="product-links">--}}
{{--                            <li><a href="#"><i class="fa fa-search"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-random"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <a href="" class="add-to-cart">Add to Cart</a>--}}
                    </div>
                    <div class="product-content product-image">
                        <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">
{{--                        <h3 class="title"><a href="#">Women's Blouse Top</a></h3>--}}
{{--                        <div class="price">$53.55 <span>$68.88</span></div>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
{{--                        <a href="#" class="image">--}}
{{--                            <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">--}}
{{--                        </a>--}}
{{--                        <span class="product-discount-label">-23%</span>--}}
{{--                        <ul class="product-links">--}}
{{--                            <li><a href="#"><i class="fa fa-search"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-random"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <a href="" class="add-to-cart">Add to Cart</a>--}}
                    </div>
                    <div class="product-content product-image">
                        <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">
{{--                        <h3 class="title"><a href="#">Women's Blouse Top</a></h3>--}}
{{--                        <div class="price">$53.55 <span>$68.88</span></div>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
{{--                        <a href="#" class="image">--}}
{{--                            <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">--}}
{{--                        </a>--}}
{{--                        <span class="product-discount-label">-23%</span>--}}
{{--                        <ul class="product-links">--}}
{{--                            <li><a href="#"><i class="fa fa-search"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-random"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <a href="" class="add-to-cart">Add to Cart</a>--}}
                    </div>
                    <div class="product-content product-image">
                        <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">
{{--                        <h3 class="title"><a href="#">Women's Blouse Top</a></h3>--}}
{{--                        <div class="price">$53.55 <span>$68.88</span></div>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-5 pt-3">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
{{--                        <a href="#" class="image">--}}
{{--                            <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">--}}
{{--                        </a>--}}
{{--                        <span class="product-discount-label">-23%</span>--}}
{{--                        <ul class="product-links">--}}
{{--                            <li><a href="#"><i class="fa fa-search"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-random"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <a href="" class="add-to-cart">Add to Cart</a>--}}
                    </div>
                    <div class="product-content product-image">
                        <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">
{{--                        <h3 class="title"><a href="#">Women's Blouse Top</a></h3>--}}
{{--                        <div class="price">$53.55 <span>$68.88</span></div>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
{{--                        <a href="#" class="image">--}}
{{--                            <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">--}}
{{--                        </a>--}}
{{--                        <span class="product-discount-label">-23%</span>--}}
{{--                        <ul class="product-links">--}}
{{--                            <li><a href="#"><i class="fa fa-search"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-random"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <a href="" class="add-to-cart">Add to Cart</a>--}}
                    </div>
                    <div class="product-content product-image">
                        <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">
{{--                        <h3 class="title"><a href="#">Women's Blouse Top</a></h3>--}}
{{--                        <div class="price">$53.55 <span>$68.88</span></div>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
{{--                        <a href="#" class="image">--}}
{{--                            <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">--}}
{{--                        </a>--}}
{{--                        <span class="product-discount-label">-23%</span>--}}
{{--                        <ul class="product-links">--}}
{{--                            <li><a href="#"><i class="fa fa-search"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-random"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <a href="" class="add-to-cart">Add to Cart</a>--}}
                    </div>
                    <div class="product-content product-image">
                        <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">
{{--                        <h3 class="title"><a href="#">Women's Blouse Top</a></h3>--}}
{{--                        <div class="price">$53.55 <span>$68.88</span></div>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
{{--                        <a href="#" class="image">--}}
{{--                            <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">--}}
{{--                        </a>--}}
{{--                        <span class="product-discount-label">-23%</span>--}}
{{--                        <ul class="product-links">--}}
{{--                            <li><a href="#"><i class="fa fa-search"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-random"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <a href="" class="add-to-cart">Add to Cart</a>--}}
                    </div>
                    <div class="product-content product-image">
                        <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">
{{--                        <h3 class="title"><a href="#">Women's Blouse Top</a></h3>--}}
{{--                        <div class="price">$53.55 <span>$68.88</span></div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary-subtle">
        <div class="row p-5 pt-3 pb-2">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">
                        </a>
{{--                        <span class="product-discount-label">-23%</span>--}}
{{--                        <ul class="product-links">--}}
{{--                            <li><a href="#"><i class="fa fa-search"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-random"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <a href="" class="add-to-cart">Add to Cart</a>--}}
                    </div>
{{--                    <div class="product-content product-image">--}}
{{--                        <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">--}}
{{--                        <h3 class="title"><a href="#">Women's Blouse Top</a></h3>--}}
{{--                        <div class="price">$53.55 <span>$68.88</span></div>3>--}}
{{--                        <div class="price">$53.55 <span>$68.88</span></div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">
                        </a>
{{--                        <span class="product-discount-label">-23%</span>--}}
{{--                        <ul class="product-links">--}}
{{--                            <li><a href="#"><i class="fa fa-search"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-random"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <a href="" class="add-to-cart">Add to Cart</a>--}}
                    </div>
{{--                    <div class="product-content product-image">--}}
{{--                        <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">--}}
{{--                        <h3 class="title"><a href="#">Women's Blouse Top</a></h3>--}}
{{--                        <div class="price">$53.55 <span>$68.88</span></div>3>--}}
{{--                        <div class="price">$53.55 <span>$68.88</span></div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">
                        </a>
{{--                        <span class="product-discount-label">-23%</span>--}}
{{--                        <ul class="product-links">--}}
{{--                            <li><a href="#"><i class="fa fa-search"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-random"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <a href="" class="add-to-cart">Add to Cart</a>--}}
                    </div>
{{--                    <div class="product-content product-image">--}}
{{--                        <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">--}}
{{--                        <h3 class="title"><a href="#">Women's Blouse Top</a></h3>--}}
{{--                        <div class="price">$53.55 <span>$68.88</span></div>3>--}}
{{--                        <div class="price">$53.55 <span>$68.88</span></div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">
                        </a>
{{--                        <span class="product-discount-label">-23%</span>--}}
{{--                        <ul class="product-links">--}}
{{--                            <li><a href="#"><i class="fa fa-search"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-random"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <a href="" class="add-to-cart">Add to Cart</a>--}}
                    </div>
{{--                    <div class="product-content product-image">--}}
{{--                        <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">--}}
{{--                        <h3 class="title"><a href="#">Women's Blouse Top</a></h3>--}}
{{--                        <div class="price">$53.55 <span>$68.88</span></div>3>--}}
{{--                        <div class="price">$53.55 <span>$68.88</span></div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        <div class="row p-5 pt-3 pb-3">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">
                        </a>
                        {{--                        <span class="product-discount-label">-23%</span>--}}
                        {{--                        <ul class="product-links">--}}
                        {{--                            <li><a href="#"><i class="fa fa-search"></i></a></li>--}}
                        {{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
                        {{--                            <li><a href="#"><i class="fa fa-random"></i></a></li>--}}
                        {{--                        </ul>--}}
                        {{--                        <a href="" class="add-to-cart">Add to Cart</a>--}}
                    </div>
                    {{--                    <div class="product-content product-image">--}}
                    {{--                        <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">--}}
                    {{--                        <h3 class="title"><a href="#">Women's Blouse Top</a></h3>--}}
                    {{--                        <div class="price">$53.55 <span>$68.88</span></div>3>--}}
                    {{--                        <div class="price">$53.55 <span>$68.88</span></div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">
                        </a>
                        {{--                        <span class="product-discount-label">-23%</span>--}}
                        {{--                        <ul class="product-links">--}}
                        {{--                            <li><a href="#"><i class="fa fa-search"></i></a></li>--}}
                        {{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
                        {{--                            <li><a href="#"><i class="fa fa-random"></i></a></li>--}}
                        {{--                        </ul>--}}
                        {{--                        <a href="" class="add-to-cart">Add to Cart</a>--}}
                    </div>
                    {{--                    <div class="product-content product-image">--}}
                    {{--                        <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">--}}
                    {{--                        <h3 class="title"><a href="#">Women's Blouse Top</a></h3>--}}
                    {{--                        <div class="price">$53.55 <span>$68.88</span></div>3>--}}
                    {{--                        <div class="price">$53.55 <span>$68.88</span></div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">
                        </a>
                        {{--                        <span class="product-discount-label">-23%</span>--}}
                        {{--                        <ul class="product-links">--}}
                        {{--                            <li><a href="#"><i class="fa fa-search"></i></a></li>--}}
                        {{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
                        {{--                            <li><a href="#"><i class="fa fa-random"></i></a></li>--}}
                        {{--                        </ul>--}}
                        {{--                        <a href="" class="add-to-cart">Add to Cart</a>--}}
                    </div>
                    {{--                    <div class="product-content product-image">--}}
                    {{--                        <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">--}}
                    {{--                        <h3 class="title"><a href="#">Women's Blouse Top</a></h3>--}}
                    {{--                        <div class="price">$53.55 <span>$68.88</span></div>3>--}}
                    {{--                        <div class="price">$53.55 <span>$68.88</span></div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">
                        </a>
                        {{--                        <span class="product-discount-label">-23%</span>--}}
                        {{--                        <ul class="product-links">--}}
                        {{--                            <li><a href="#"><i class="fa fa-search"></i></a></li>--}}
                        {{--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
                        {{--                            <li><a href="#"><i class="fa fa-random"></i></a></li>--}}
                        {{--                        </ul>--}}
                        {{--                        <a href="" class="add-to-cart">Add to Cart</a>--}}
                    </div>
                    {{--                    <div class="product-content product-image">--}}
                    {{--                        <img src="https://weldingsupply.com/IMGS/602/A61-LG.gif">--}}
                    {{--                        <h3 class="title"><a href="#">Women's Blouse Top</a></h3>--}}
                    {{--                        <div class="price">$53.55 <span>$68.88</span></div>3>--}}
                    {{--                        <div class="price">$53.55 <span>$68.88</span></div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h1 class="mb-1">Contact Us</h1>
                    <p class="fw-bold pb-3">if you have any question please fill form below</p>
                    <form>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <input placeholder="Full Name" type="text" class="form-control" id="your-name" name="your-name" required>
                            </div>
                            <div class="col-md-6">
                                <input placeholder="Email Address" type="text" class="form-control" id="your-surname" name="your-surname" required>
                            </div>
                            <div class="col-12">
                                <textarea placeholder="Message" class="form-control" id="your-message" name="your-message" rows="5" required></textarea>
                            </div>
                            <div class="col-12">
                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <footer class="py-6">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="fw-bold">Contact</h1>
                        <ul class="nav flex-column pt-1">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Please fill out the form below to send us an email</a></li>
                            <li class="nav-item mb-2 pt-2"><a href="#" class="nav-link p-0 text-black fw-bold">Address</a></li>
                            <li class="nav-item mb-1 pt-2"><a href="#" class="nav-link p-0 text-black fw-bold">Email:</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">jinyoungindonesia@jinyoung.com</a></li>
                            <li class="nav-item mb-1 pt-2"><a href="#" class="nav-link p-0 text-black fw-bold">Phone:</a></li>
                            <li class="nav-item mb-1"><a href="#" class="nav-link p-0 text-black">(0271) XXXXXXXXXX</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">(+62) XXXXXXXXXX</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-6">
                        <iframe class="w-100" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.199070257947!2d110.44967897443283!3d-7.768703077058045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5bedc09521f7%3A0xe6514f4f75af8457!2sPT%20SUKSES%20JINYOUNG%20INDONESIA!5e0!3m2!1sen!2sid!4v1708438926532!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center py-4 my-2">
                    <p>© 2024 Copy Rights - Omnitechnology</p>
                </div>
            </footer>
        </div>
    </section>
@endsection
