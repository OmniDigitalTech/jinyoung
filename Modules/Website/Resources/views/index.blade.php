@extends('website::layouts.master')

@section('content')
    <header>
        <nav class="navbar nav-head bg-body-tertiary p-0">
            <div class="container-fluid align-content-around">
                <a href="/" class="navbar-brand">
                    <img src="{{ URL::asset('template/img/Logo SJI.svg') }}" width="320">
                </a>

                <form class="d-flex mb-0 align-items-center p-3" role="search">
                    <a href="en" class="flag us me-2"></a>
                    <a href="id" class="flag id me-2"></a>
{{--                    <button class="btn btn-primary me-2">--}}
{{--                        <a class="text-white text-decoration-none" href="{{ route('login') }}">Login</a>--}}
{{--                    </button>--}}
{{--                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--                    <button class="btn btn-outline-primary" type="submit">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">--}}
{{--                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>--}}
{{--                        </svg>--}}
{{--                    </button>--}}
                </form>
            </div>
        </nav>
        <nav class="position-relative bg-nav">
            <div class="wrapper flex-column justify-content-center">
                <input type="radio" name="slider" id="menu-btn">
                <input type="radio" name="slider" id="close-btn">
                <ul class="nav nav-links">
                    <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                    <li>
                        <a href="#" class="desktop-item cool-link fw-bold">{{ strtoupper(__('translation.home')) }}</a>
                        <input type="checkbox">
                        <label class="mobile-item">{{ strtoupper(__('translation.home')) }}</label>
                    </li>
                    <li>
                        <a href="#" class="desktop-item cool-link fw-bold">{{ strtoupper(__('translation.about')) }}</a>
                        <input type="checkbox" id="showMega">
                        <label for="showMega" class="mobile-item">{{ strtoupper(__('translation.about')) }}</label>
                        <div class="mega-box">
                            <div class="content text-center justify-content-around">
                                <div class="row">
                                    <a href="#vision-mission">Vision & Mission</a>
                                </div>
                                <div class="row">
                                    <a href="#history">History</a>
                                </div>
                                <div class="row">
                                    <a href="#value">Value</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="desktop-item cool-link fw-bold">{{ strtoupper(__('translation.product')) }}</a>
                        <input type="checkbox" id="showMega">
                        <label for="showMega" class="mobile-item">{{ strtoupper(__('translation.product')) }}</label>
                        <div class="mega-box">
                            <div class="content text-center justify-content-around">
                                <div class="row">
                                    <a href="#product-process">Production Process</a>
                                </div>
                                <div class="row">
                                    <a href="#product">Product</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="desktop-item cool-link fw-bold">{{ strtoupper(__('translation.contact')) }}</a>
                        <input type="checkbox" id="showMega">
                        <label for="showMega" class="mobile-item">{{ strtoupper(__('translation.contact')) }}</label>
                        <div class="mega-box">
                            <div class="content text-center justify-content-around">
                                <div class="row">
                                    <a href="#contact">Address</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
            </div>
        </nav>
    </header>

{{--    <div class="d-flex justify-content-center py-2 bg-nav collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--        <ul class="nav nav-pills">--}}
{{--            <li class="dropdown nav-item">--}}
{{--                <a href="#" class="nav-link fw-bold" aria-current="page" data-bs-toggle="dropdown">{{ strtoupper(__('translation.home')) }}</a>--}}
{{--                <ul class="dropdown-menu show-home">--}}
{{--                    <li><a class="dropdown-item" href="#">Home</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown nav-item"><a href="#about" class="nav-link fw-bold" data-bs-toggle="dropdown">{{ strtoupper(__('translation.about')) }}</a>--}}
{{--                <ul class="dropdown-menu show-about">--}}
{{--                    <li><a class="dropdown-item" href="#about">About</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown nav-item"><a href="#product" class="nav-link fw-bold" data-bs-toggle="dropdown">{{ strtoupper(__('translation.product')) }}</a>--}}
{{--                <ul class="dropdown-menu show-product">--}}
{{--                    <li><a class="dropdown-item" href="#product">Product</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown nav-item"><a href="#contact" class="nav-link fw-bold" data-bs-toggle="dropdown">{{ strtoupper(__('translation.contact')) }}</a>--}}
{{--                <ul class="dropdown-menu show-contact">--}}
{{--                    <li><a class="dropdown-item" href="#contact">Contact</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}

    @if(count($sliders) > 0)
    <section>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <iframe class="carousel-video" src="https://drive.google.com/file/d/1dfFpyTSW3Nevkv1_Ma3xTTMIuRfrufIO/preview" frameborder="0" allowfullscreen></iframe>
                    <div class="carousel-caption-video">
                        <p class="h5 mb-5 pb-3"><em>Proses Produksi PT Sukses Jinyoung Indonesia</em></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <iframe class="carousel-video" src="https://drive.google.com/file/d/1dfFpyTSW3Nevkv1_Ma3xTTMIuRfrufIO/preview?autoplay=1" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="carousel-item">
                    <img src="data:image/jpeg;base64,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" class="d-block w-100 h-110" alt="...">
                    <div class="background-overlay"></div>
                    <div class="carousel-caption">
                        <p class="h1 fw-bold">PT SUKSES JINYOUNG INDONESIA</p>
                        <p class="h5 mb-5 pb-3"><em>ALL ABOUT GLOVES</em></p>
                    </div>
                </div>
{{--                @foreach($sliders as $key => $slider)--}}
{{--                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">--}}
{{--                        <img src="{{ $slider->picture->url }}" class="d-block w-100 h-110" alt="...">--}}
{{--                        <div class="background-overlay"></div>--}}
{{--                        <div class="carousel-caption">--}}
{{--                            <p class="h1 fw-bold">{{ $slider->title }}</p>--}}
{{--                            <p class="h5 mb-5 pb-3"><em>{{ $slider->subtitle }}</em></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
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
    @endif

{{--    <section class="bg-body-tertiary">--}}
{{--        <div class="embed-responsive embed-responsive-16by9 p-4">--}}
{{--            <iframe class="embed-responsive-item w-100" height="650" src="https://drive.google.com/file/d/1dfFpyTSW3Nevkv1_Ma3xTTMIuRfrufIO/preview" allowfullscreen></iframe>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section id="vision-mission">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-12 pt-5 pb-5 curved">
                    <div class="main-timeline_one pt-5 curved-pt">
                        <div class="timeline_one pb-5">
                            <div class="timeline_one-content">
                                <h1 class="display-2 fw-bold text-primary">{{ strtoupper(__('translation.vision')) }}</h1>
                                <p class="description lead fw-normal">
                                    {{ @$visionmission->vision }}
                                </p>
                            </div>
                        </div>
                        <div class="timeline_one">
                            <div href="#" class="timeline_one-content">
                                <h1 class="display-2 fw-bold">{{ strtoupper(__('translation.mission')) }}</h1>
                                <p class="description lead fw-normal">
                                    {{ @$visionmission->mission }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="history">
        <div class="container">
            <div class="section-header">
                <h2>{{ strtoupper(__('translation.history')) }}</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline">
                        @foreach($histories as $history)
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">{{ $history->year }} {{ $history->title }}</h3>
                                        <p class="description">
                                            {{ $history->description }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work-porcess-area" id="value">
        <div class="container pt-5 pb-5">
            <div class="section-header">
                <h2>VALUE</h2>
            </div>
            <div class="process-info pb-5">
                <div class="row">
                    <div class="col-md-3">
                        <div class="single-process first text-center">
                            <i class="fas fa-lightbulb"></i>
                            <h4>Innovation</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-process text-center">
                            <i class="fas fa-users"></i>
                            <h4>Transparency</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-process thard text-center">
                            <i class="fas fa-scale-balanced"></i>
                            <h4>Sustainbility</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-process last text-center">
                            <i class="fas fa-medal"></i>
                            <h4>Quality</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="product-process">
            <div class="section-header mb-0">
                <h2>{{ strtoupper(__('translation.production_process_flow')) }}</h2>
            </div>
            <div class="row pt-3 justify-content-center">
                @foreach($processes as $process)
                    <div class="col-md-3 col-sm-6 my-2 p_column text-center mt-3">
                        <a class="text-decoration-none text-white" id="btnModalProduct" data-image="{{ $process->picture->url }}">
                            <h3 class="fw-bold">STEP {{ $process->step }}</h3>
                            <p>{{ $process->description }}</p>
                        </a>
                    </div>
                @endforeach
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
                        <div class="step-modal-grid">
                            <div class="step-modal-content step-modal-image">
                                <img id="image-process" src="">
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

    <section id="product">
        <div class="section-header pt-5 mb-0">
            <h2>{{ strtoupper(__('translation.best_product')) }}</h2>
        </div>
        <div class="row p-5">
            @foreach($bestproducts as $product)
                <div class="col-md-3 col-sm-6 my-2">
                    <div class="product-grid">
                        <div class="product-content product-image">
                            <img src="{{ $product->picture->url }}">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    @if(count($products) > 0)
    <section class="bg-secondary-subtle">
        <div class="row p-5 pt-3 pb-2">
            @foreach($products as $product)
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img src="{{ $product->picture->url }}">
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    @endif

    <section>
        <div class="row ">
            <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                <div class="card">
                    <img class="card-img-top" src="//ecimg.cafe24img.com/pg226b94328145020/xnglove/file_data/gallery/2023/11/27/0a7f5ed55e240b9b863ff1422e71e67a.jpg" height="380" alt="Card image cap">
                    <div class="product-detail">
                        <h5 class="card-title heading text-center">GLOVES</h5>
                        <span class="subheading">BEST GLOVES</span>
                        <blockquote>
                            <p>'Lorep ipsum'</p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                <div class="card">
                    <img class="card-img-top" src="//ecimg.cafe24img.com/pg226b94328145020/xnglove/file_data/gallery/2023/11/27/0a7f5ed55e240b9b863ff1422e71e67a.jpg" height="380" alt="Card image cap">
                    <div class="product-detail">
                        <h5 class="card-title heading text-center">GLOVES</h5>
                        <span class="subheading">BEST GLOVES</span>
                        <blockquote>
                            <p>'Lorep ipsum'</p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                <div class="card">
                    <img class="card-img-top" src="//ecimg.cafe24img.com/pg226b94328145020/xnglove/file_data/gallery/2023/11/27/0a7f5ed55e240b9b863ff1422e71e67a.jpg" height="380" alt="Card image cap">
                    <div class="product-detail">
                        <h5 class="card-title heading text-center">GLOVES</h5>
                        <span class="subheading">BEST GLOVES</span>
                        <blockquote>
                            <p>'Lorep ipsum'</p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                <div class="card">
                    <img class="card-img-top" src="//ecimg.cafe24img.com/pg226b94328145020/xnglove/file_data/gallery/2023/11/27/0a7f5ed55e240b9b863ff1422e71e67a.jpg" height="380" alt="Card image cap">
                    <div class="product-detail">
                        <h5 class="card-title heading text-center">GLOVES</h5>
                        <span class="subheading">BEST GLOVES</span>
                        <blockquote>
                            <p>'Lorep ipsum'</p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                <div class="card">
                    <img class="card-img-top" src="//ecimg.cafe24img.com/pg226b94328145020/xnglove/file_data/gallery/2023/11/27/0a7f5ed55e240b9b863ff1422e71e67a.jpg" height="380" alt="Card image cap">
                    <div class="product-detail">
                        <h5 class="card-title heading text-center">GLOVES</h5>
                        <span class="subheading">BEST GLOVES</span>
                        <blockquote>
                            <p>'Lorep ipsum'</p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                <div class="card">
                    <img class="card-img-top" src="//ecimg.cafe24img.com/pg226b94328145020/xnglove/file_data/gallery/2023/11/27/0a7f5ed55e240b9b863ff1422e71e67a.jpg" height="380" alt="Card image cap">
                    <div class="product-detail">
                        <h5 class="card-title heading text-center">GLOVES</h5>
                        <span class="subheading">BEST GLOVES</span>
                        <blockquote>
                            <p>'Lorep ipsum'</p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                <div class="card">
                    <img class="card-img-top" src="//ecimg.cafe24img.com/pg226b94328145020/xnglove/file_data/gallery/2023/11/27/0a7f5ed55e240b9b863ff1422e71e67a.jpg" height="380" alt="Card image cap">
                    <div class="product-detail">
                        <h5 class="card-title heading text-center">GLOVES</h5>
                        <span class="subheading">BEST GLOVES</span>
                        <blockquote>
                            <p>'Lorep ipsum'</p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 p-0">
                <div class="card">
                    <img class="card-img-top" src="//ecimg.cafe24img.com/pg226b94328145020/xnglove/file_data/gallery/2023/11/27/0a7f5ed55e240b9b863ff1422e71e67a.jpg" height="380" alt="Card image cap">
                    <div class="product-detail">
                        <h5 class="card-title heading text-center">GLOVES</h5>
                        <span class="subheading">BEST GLOVES</span>
                        <blockquote>
                            <p>'Lorep ipsum'</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h1 class="mb-1">{{ ucwords(__('translation.contact_us')) }}</h1>
                    <p class="fw-bold pb-3">if you have any question please fill form below</p>
                    <form action="{{ route('website.ask') }}" method="POST">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-6">
                                <input placeholder="{{ ucwords(__('translation.full_name')) }}" type="text" class="form-control" id="your-name" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <input placeholder="{{ ucwords(__('translation.email_address')) }}" type="text" class="form-control" id="your-surname" name="email" required>
                            </div>
                            <div class="col-12 form-group">
                                <select class="select2 form-control" name="products[]" multiple>
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea placeholder="{{ ucwords(__('translation.message')) }}" class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <div class="col-12">
                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">{{ strtoupper(__('translation.submit')) }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <footer class="bg-body-tertiary p-5">
            <div class="container">
                <footer class="py-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 class="fw-bold">{{ ucwords(__('translation.contact')) }}</h1>
                            <ul class="nav flex-column pt-1">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Please fill out the form below to send us an email</a></li>
                                <li class="nav-item mb-2 pt-2"><a href="#" class="nav-link p-0 text-black fw-bold">{{ ucwords(__('translation.address')) }}</a></li>
                                @foreach(json_decode($address->value, true) as $item)
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">{{ $item }}</a></li>
                                @endforeach
                                <li class="nav-item mb-1 pt-2"><a href="#" class="nav-link p-0 text-black fw-bold">{{ ucwords(__('translation.email')) }} :</a></li>
                                @foreach(json_decode($email->value, true) as $item)
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">{{ $item }}</a></li>
                                @endforeach
                                <li class="nav-item mb-1 pt-2"><a href="#" class="nav-link p-0 text-black fw-bold">{{ ucwords(__('translation.phone')) }} :</a></li>
                                @foreach(json_decode($phone->value, true) as $item)
                                    <li class="nav-item mb-1"><a href="#" class="nav-link p-0 text-black">{{ $item }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <iframe class="w-100" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.199070257947!2d110.44967897443283!3d-7.768703077058045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5bedc09521f7%3A0xe6514f4f75af8457!2sPT%20SUKSES%20JINYOUNG%20INDONESIA!5e0!3m2!1sen!2sid!4v1708438926532!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center py-4 my-2">
    {{--                    <p>© 2024 Copy Rights - Omnitechnology</p>--}}
                    </div>
                </footer>
            </div>
        </footer>
    </section>
@endsection

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).on('click', '#btnModalProduct', function(event) {
        var image = $(this).data('image');

        event.preventDefault();
        $("#image-process").attr("src", image);


        $('#exampleModal').modal("show");
    });
</script>
