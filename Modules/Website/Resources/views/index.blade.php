@extends('website::layouts.master')

@section('content')
    <header>
        <nav class="navbar nav-head bg-body-tertiary">
            <div class="container-fluid align-content-around">
                <a class="navbar-brand">
                    <img src="{{ URL::asset('template/img/Logo SJI.svg') }}" width="400">
                </a>

                <form class="d-flex mb-0 align-items-center" role="search">
                    <button class="flag us me-2"></button>
                    <button class="flag id me-2"></button>
                    <button class="btn btn-primary me-2">
                        <a class="text-white text-decoration-none" href="{{ route('login') }}">Login</a>
                    </button>
{{--                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--                    <button class="btn btn-outline-primary" type="submit">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">--}}
{{--                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>--}}
{{--                        </svg>--}}
{{--                    </button>--}}
                </form>
            </div>
        </nav>
    </header>

    <div class="d-flex justify-content-center py-2 bg-nav collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav nav-pills">
            <li class="dropdown nav-item">
                <a href="#" class="nav-link fw-bold" aria-current="page" data-bs-toggle="dropdown">HOME</a>
                <ul class="dropdown-menu show-home">
                    <li><a class="dropdown-item" href="#">Home</a></li>
                </ul>
            </li>
            <li class="dropdown nav-item"><a href="#about" class="nav-link fw-bold" data-bs-toggle="dropdown">ABOUT</a>
                <ul class="dropdown-menu show-about">
                    <li><a class="dropdown-item" href="#about">About</a></li>
                </ul>
            </li>
            <li class="dropdown nav-item"><a href="#product" class="nav-link fw-bold" data-bs-toggle="dropdown">PRODUCT</a>
                <ul class="dropdown-menu show-product">
                    <li><a class="dropdown-item" href="#product">Product</a></li>
                </ul>
            </li>
            <li class="dropdown nav-item"><a href="#contact" class="nav-link fw-bold" data-bs-toggle="dropdown">CONTACT</a>
                <ul class="dropdown-menu show-contact">
                    <li><a class="dropdown-item" href="#contact">Contact</a></li>
                </ul>
            </li>
        </ul>
    </div>

    @if(count($sliders) > 0)
    <section>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @foreach($sliders as $key => $slider)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ $slider->picture->url }}" class="d-block w-100 h-110" alt="...">
                        <div class="background-overlay"></div>
                        <div class="carousel-caption">
                            <p class="h1">{{ $slider->title }}</p>
                            <p class="h5 mb-5 pb-3"><em>{{ $slider->subtitle }}</em></p>
                        </div>
                    </div>
                @endforeach
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

    <section class="bg-body-tertiary">
        <div class="embed-responsive embed-responsive-16by9 p-4">
            <iframe class="embed-responsive-item w-100" height="650" src="https://drive.google.com/file/d/1dfFpyTSW3Nevkv1_Ma3xTTMIuRfrufIO/preview" allowfullscreen></iframe>
        </div>
    </section>

    <section id="about">
        <div class="curved">
            <div class="curved-svg">
                <div class="container">
                    <div class="row pt-5 curved-pt curved-pb">
                        <div class="col-md-12 pt-5 pb-5 dummy"></div>
                        <div class="col-md-12 pt-5 pb-5 dummy"></div>
                        <div class="col-md-12 pt-5 pb-5 dummy"></div>
                        <div class="col-md-12 pt-5 pb-5">
                            <div class="main-timeline_one pt-5 curved-pt">
                                <div class="timeline_one pb-5">
                                    <div class="timeline_one-content">
                                        <h1 class="display-2 fw-bold text-primary">VISION</h1>
                                        <p class="description lead fw-normal">
                                            {{ @$visionmission->vision }}
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline_one">
                                    <div href="#" class="timeline_one-content">
                                        <h1 class="display-2 fw-bold">MISSION</h1>
                                        <p class="description lead fw-normal">
                                            {{ @$visionmission->mission }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 pt-5 pb-5 dummy"></div>
                        <div class="col-md-12 pt-5 pb-5 dummy"></div>
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

    <section id="product">
        <div class="container pt-5 pb-5">
            <div class="section-header mb-0">
                <h2>PRODUCTION PROCESS FLOW</h2>
                <p>Lorem Ipsum is simply dummy text of the printing.</p>
            </div>
            <div class="row row-equal-height justify-content-center flex-nowrap p-5" >
                @foreach($processes as $process)
                    <div class="col-md-3 p_column text-center mt-3">
                        <a class="text-decoration-none text-white" id="btnModalProduct" data-image="{{ $process->picture->url }}">
                            <h3 class="fw-bold">STEP {{ $process->step }}</h3>
                            <p>{{ $process->description }}</p>
                        </a>
                    </div>
                @endforeach
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

    <section>
        <div class="section-header pt-4">
            <h2>BEST PRODUCT</h2>
            <p>Lorem Ipsum is simply dummy text of the printing.</p>
        </div>
        <div class="row p-5 pt-0 pb-2">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    @foreach($bestproducts as $product)
                        <div class="product-content product-image">
                            <img src="{{ $product->picture->url }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary-subtle">
        <div class="row p-5 pt-3 pb-2">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    @foreach($products as $product)
                    <div class="product-image">
                        <a href="#" class="image">
                            <img src="{{ $product->picture->url }}">
                        </a>
                    </div>
                    @endforeach
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
                    <form action="{{ route('website.ask') }}" method="POST">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-6">
                                <input placeholder="Full Name" type="text" class="form-control" id="your-name" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <input placeholder="Email Address" type="text" class="form-control" id="your-surname" name="email" required>
                            </div>
                            <div class="col-12 form-group">
                                <select class="select2 form-control" name="products[]" multiple>
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea placeholder="Message" class="form-control" id="message" name="message" rows="5" required></textarea>
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

    <section id="contact">
        <footer class="bg-body-tertiary p-5">
            <div class="container">
                <footer class="py-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 class="fw-bold">Contact</h1>
                            <ul class="nav flex-column pt-1">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Please fill out the form below to send us an email</a></li>
                                <li class="nav-item mb-2 pt-2"><a href="#" class="nav-link p-0 text-black fw-bold">Address</a></li>
                                @foreach(json_decode($address->value, true) as $item)
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">{{ $item }}</a></li>
                                @endforeach
                                <li class="nav-item mb-1 pt-2"><a href="#" class="nav-link p-0 text-black fw-bold">Email:</a></li>
                                @foreach(json_decode($email->value, true) as $item)
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">{{ $item }}</a></li>
                                @endforeach
                                <li class="nav-item mb-1 pt-2"><a href="#" class="nav-link p-0 text-black fw-bold">Phone:</a></li>
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
