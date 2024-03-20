@extends('website::layouts.master')

@section('content')
    <header class="fixed-top mobile-header" style="z-index: 2">
        <nav class="navbar nav-head background-color p-0">
            <div class="container-fluid align-content-around">
                <a href="/" class="navbar-brand">
                    <img src="{{ URL::asset('template/img/Logo SJI.svg') }}" width="250">
                </a>
                <form class="d-flex mb-0 align-items-center p-3" role="search">
                    <a href="en" class="flag us me-2"></a>
                    <a href="id" class="flag id me-2"></a>
                </form>
            </div>
        </nav>
        <div class="d-flex bg-primary justify-content-center py-2 bg-nav collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">
                <li class="dropdown nav-item"><a href="#video-section" class="nav-link nav-link-custom fw-bold" aria-current="page">{{ strtoupper(__('translation.home')) }}</a>
                    <ul class="dropdown-menu show-home">
                        <li><a class="dropdown-item" href="#video-section">{{ ucfirst(__('translation.home')) }}</a></li>
                    </ul>
                </li>
                <li class="dropdown nav-item"><a href="#about" class="nav-link nav-link-custom fw-bold" data-bs-toggle="dropdown">{{ strtoupper(__('translation.about')) }}</a>
                    <ul class="dropdown-menu show-about">
                        <li><a class="dropdown-item" href="#vision-mission">{{ ucfirst(__('translation.vision')) }} & {{ ucfirst(__('translation.mission')) }}</a></li>
                        <li><a class="dropdown-item" href="#history">{{ ucfirst(__('translation.history')) }}</a></li>
                        <li><a class="dropdown-item" href="#value">Value</a></li>
                    </ul>
                </li>
                <li class="link-none" style="width: 10rem"></li>
                <li class="dropdown nav-item"><a href="#product" class="nav-link nav-link-custom fw-bold" data-bs-toggle="dropdown">{{ strtoupper(__('translation.product')) }}</a>
                    <ul class="dropdown-menu show-product">
                        <li><a class="dropdown-item" href="#product-process">{{ ucfirst(__('translation.production_process_flow')) }}</a></li>
                        <li><a class="dropdown-item" href="#product">{{ ucfirst(__('translation.product')) }}</a></li>
                    </ul>
                </li>
                <li class="dropdown nav-item"><a href="#contact" class="nav-link nav-link-custom fw-bold">{{ strtoupper(__('translation.contact')) }}</a>
                    <ul class="dropdown-menu show-contact">
                        <li><a class="dropdown-item" href="#contact">{{ ucfirst(__('translation.contact')) }}</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>

    <header class="fixed-top d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 website-nav" style="background-color: white">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img src="{{ URL::asset('template/img/Logo SJI.svg') }}" width="250">
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li class="p-3 pt-0 pb-0"><a href="#video-section" class="nav-link px-2 link-dark fw-bold">{{ strtoupper(__('translation.home')) }}</a></li>
            <li class="dropdown nav-item p-3 pt-0 pb-0">
                <a href="#" class="nav-link px-2 link-dark fw-bold" data-bs-toggle="dropdown">{{ strtoupper(__('translation.about')) }}</a>
                <ul class="dropdown-menu show-about">
                    <li><a class="dropdown-item" href="#vision-mission">{{ ucfirst(__('translation.vision')) }} & {{ ucfirst(__('translation.mission')) }}</a></li>
                    <li><a class="dropdown-item" href="#history">{{ ucfirst(__('translation.history')) }}</a></li>
                    <li><a class="dropdown-item" href="#value">Value</a></li>
                </ul>
            </li>
            <li class="dropdown nav-item p-3 pt-0 pb-0">
                <a href="#" class="nav-link px-2 link-dark fw-bold" data-bs-toggle="dropdown">{{ strtoupper(__('translation.product')) }}</a>
                <ul class="dropdown-menu show-product">
                    <li><a class="dropdown-item" href="#product-process">{{ ucfirst(__('translation.production_process_flow')) }}</a></li>
                    <li><a class="dropdown-item" href="#product">{{ ucfirst(__('translation.product')) }}</a></li>
                </ul>
            </li>
            <li class="p-3 pt-0 pb-0"><a href="#contact" class="nav-link px-2 link-dark fw-bold">{{ strtoupper(__('translation.contact')) }}</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <form class="d-flex mb-0 align-items-center p-3 justify-content-end" role="search">
                <a href="en" class="flag us me-2"></a>
                <a href="id" class="flag id me-2"></a>
            </form>
        </div>
    </header>

    @if(count($sliders) > 0)
    <section>
        <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel" style="padding-top: 100px">
{{--            <div class="carousel-indicators">--}}
{{--                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>--}}
{{--                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
{{--                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
{{--            </div>--}}
            <div class="carousel-inner">
                @foreach($sliders as $key => $slider)
                    @if($slider->picture->path == 'images')
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img src="{{ $slider->picture->url }}" class="d-block w-100 h-110" alt="...">
                            <div class="carousel-caption">
                                <p class="h1 fw-bold text-color" data-aos="fade-up">{{ $slider->title }}</p>
                                <p class="h5 mb-5 pb-3 text-color" data-aos="fade-down"><em>{{ $slider->subtitle }}</em></p>
                            </div>
                        </div>
                    @else
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <video class="carousel-video" width="320" height="240" controls autoplay allowfullscreen muted>
                                <source src="{{ $slider->picture->url }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                            <div class="carousel-caption-video">
                                <p class="h5 mb-5 pb-3"><em>{{ $slider->title }}</em></p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    @endif

    <section class="bg-body-tertiary" id="video-section">
        <div class="embed-responsive embed-responsive-16by9 p-4">
            <iframe class="embed-responsive-item w-100" height="650" src="https://drive.google.com/file/d/1MvB_8f0U0DsAdlo6TjH1BQ8xxUYHXGpq/preview" allowfullscreen allow="autoplay"></iframe>
        </div>
    </section>

{{--    <section id="vision-mission">--}}
{{--        <div class="container" style="position: absolute; z-index: 2">--}}
{{--            <div class="row pt-5 pb-5">--}}
{{--                <div class="col-md-12 pt-5 pb-5 text-center">--}}
{{--                    <div class="main-timeline_one pt-5 curved-pt">--}}
{{--                        <div class="timeline_one pb-5">--}}
{{--                            <div class="timeline_one-content">--}}
{{--                                <h1 class="display-2 fw-bold text-primary" data-aos="fade-right">{{ strtoupper(__('translation.vision')) }}</h1>--}}
{{--                                <p class="description lead fw-normal" data-aos="fade-up">--}}
{{--                                    {{ @$visionmission->vision }}--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="timeline_one">--}}
{{--                            <div href="#" class="timeline_one-content">--}}
{{--                                <h1 class="display-2 fw-bold" data-aos="fade-left">{{ strtoupper(__('translation.mission')) }}</h1>--}}
{{--                                <p class="description lead fw-normal" data-aos="fade-up">--}}
{{--                                    {{ @$visionmission->mission }}--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <video autoplay muted loop id="myVideo" style="position: relative">--}}
{{--            <source src="{{URL::asset('template/video/video-background.mp4')}}" type="video/mp4">--}}
{{--            Your browser does not support HTML5 video.--}}
{{--        </video>--}}
{{--    </section>--}}

    <section id="vision-mission" class="visimisi-styleone">
        <div class="container visimisi-styletwo">
            <div class="row pt-5 pb-5">
                <div class="col-md-12 pb-5 curved">
                    <div class="main-timeline_one curved-pt">
                        <div class="timeline_one pb-5">
                            <div class="timeline_one-content">
                                <h1 class="display-2 fw-bold text-primary" data-aos="fade-right">{{ strtoupper(__('translation.vision')) }}</h1>
                                <p class="description lead fw-normal" data-aos="fade-up">
                                    {{ @$visionmission->vision }}
                                </p>
                            </div>
                        </div>
                        <div class="timeline_one">
                            <div href="#" class="timeline_one-content">
                                <h1 class="display-2 fw-bold" data-aos="fade-left">{{ strtoupper(__('translation.mission')) }}</h1>
                                <p class="description lead fw-normal" data-aos="fade-up">
                                    {{ @$visionmission->mission }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="p-5">
        <div class="container">
            <div class="section-header">
                <h2>{{ strtoupper(__('translation.history')) }}</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline">
                        @foreach($histories as $history)
                            <div class="timeline" data-aos="fade-right">
                                <div class="timeline-content">
                                    <div class="timeline-icon" style="background-image: url('{{ $history->picture->url }}');"></div>
                                    <div class="content">
                                        <h3 class="title">{{ $history->year }} {{ $history->title }}</h3>
                                        <p class="description text-color">
                                            {!! $history->description !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="value" class="p-5 website-nav">
        <div class="container">
            <div class="section-header">
                <h2>VALUE</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline">
                        @foreach($histories as $history)
                            <div class="timeline pt-2 pb-2" data-aos="fade-right">
                                <div class="timeline-content">
                                    <div class="timeline-value" style="background-image: url('{{ $history->picture->url }}');">
                                        {{ __('translation.innovation_value') }}
                                    </div>
                                    <div class="content">
                                        <card class="card shadow my-4 bg-primary text-white w-100">
                                            <i class="card-img-top d-block fas fa-lightbulb fa-5x py-3 text-center value-icon-position value-card">
                                                <h5 class="pt-3 mb-0 text-center"><strong>{{ strtoupper(__('translation.innovation')) }}</strong></h5>
                                            </i>
{{--                                            <div class="value-detail pb-0 bg-primary">--}}
{{--                                                <p class="text-line">--}}
{{--                                                    {{ __('translation.innovation_value') }}--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
                                        </card>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light pt-5 pb-5 mobile-header" id="value">
        <div class="container">
            <div class="section-header mb-4">
                <h2>VALUE</h2>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 py-2 value-padding" data-aos="fade-up">
                    <card class="card shadow my-4 bg-primary text-white w-100">
                        <i class="card-img-top d-block fas fa-lightbulb fa-5x py-3 text-center value-icon-position value-card">
                            <h5 class="pt-3 mb-0 text-center"><strong>{{ strtoupper(__('translation.innovation')) }}</strong></h5>
                        </i>
                        <div class="value-detail pb-0 bg-primary">
                            <p class="text-line">
                                {{ __('translation.innovation_value') }}
                            </p>
                        </div>
                    </card>
                </div>
                <div class="col-md-3 col-sm-6 py-2 value-padding" data-aos="fade-down">
                    <card class="card shadow my-4 text-primary w-100">
                        <i class="card-img-top d-block fas fa-users fa-5x py-3 text-center value-icon-position value-card">
                            <h5 class="pt-3 mb-0 text-center"><strong>{{ strtoupper(__('translation.transparency')) }}</strong></h5>
                        </i>
                        <div class="value-detail pb-0 bg-white">
                            <p class="text-line">
                                {{ __('translation.transparency_value') }}
                            </p>
                        </div>
                    </card>
                </div>
                <div class="col-md-3 col-sm-6 py-2 value-padding" data-aos="fade-up">
                    <card class="card shadow my-4 bg-primary text-white w-100">
                        <i class="card-img-top d-block fas fa-scale-balanced fa-5x py-3 text-center value-icon-position value-card">
                            <h5 class="pt-3 mb-0 text-center"><strong>{{ strtoupper(__('translation.sustainability')) }}</strong></h5>
                        </i>
                        <div class="value-detail pb-0 bg-primary">
                            <p class="text-line">
                                {{ __('translation.sustainability_value') }}
                            </p>
                        </div>
                    </card>
                </div>
                <div class="col-md-3 col-sm-6 py-2 value-padding" data-aos="fade-down">
                    <card class="card shadow my-4 text-primary w-100">
                        <i class="card-img-top d-block fas fa-medal fa-5x py-3 text-center value-icon-position value-card">
                            <h5 class="pt-3 mb-0 text-center"><strong>{{ strtoupper(__('translation.quality')) }}</strong></h5>
                        </i>
                        <div class="value-detail pb-0 bg-white">
                            <p class="text-line">
                                {{ __('translation.quality_value') }}
                            </p>
                        </div>
                    </card>
                </div>
            </div>
        </div>
    </section>

    <section id="product-process">
        <div class="section-header pt-5 mb-0">
            <h2>{{ strtoupper(__('translation.production_process_flow')) }}</h2>
        </div>
        <div class="row pt-3 justify-content-center align-content-center align-items-center">
            @foreach($processes as $process)
                <div class="col-md-3 col-sm-6 my-2 p_column text-center mt-3 justify-content-center flex-column align-items-center align-content-center" data-aos="fade-right" data-aos-duration="2000">
                    {{--                        <a class="text-decoration-none text-white" id="btnModalProduct" data-image="{{ $process->picture->url }}">--}}
                    <h3 class="fw-bold">STEP {{ $process->step }}</h3>
                    <p>{{ $process->description }}</p>
                    <div class="production-detail production-image-one " style="background-image: url({{ $process->picture->url }});"></div>
                    {{--                        </a>--}}
                </div>
            @endforeach
        </div>
    </section>

{{--    <section id="product">--}}
{{--        <div class="section-header pt-5 mb-0">--}}
{{--            <h2>{{ strtoupper(__('translation.product')) }}</h2>--}}
{{--        </div>--}}
{{--        <div class="row p-5 justify-content-center align-items-center align-content-center">--}}
{{--            @foreach($bestproducts as $product)--}}
{{--                <div class="col-md-3 col-sm-6 my-2">--}}
{{--                    <div class="product-grid">--}}
{{--                        <div class="product-content product-image">--}}
{{--                            <img data-bs-toggle="modal" data-bs-target="#exampleModal" src="{{ $product->picture->url }}">--}}
{{--                            <h3 class="title"><a class="text-decoration-none" href="#">{{ $product->name }}</a></h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Modal -->--}}
{{--                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                    <div class="modal-dialog modal-dialog-centered">--}}
{{--                        <div class="modal-content">--}}
{{--                            <div class="modal-header">--}}
{{--                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                            </div>--}}
{{--                            <div class="modal-body">--}}
{{--                                <div class="product-content product-image text-center">--}}
{{--                                    <img style="width: 80%" src="{{ $product->picture->url }}">--}}
{{--                                    <h5 class="title"><a class="text-decoration-none" href="#">{{ $product->name }}</a></h5>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </section>--}}

    <section>
        <div class="slick1 justify-content-center align-items-center align-content-center">
            @foreach($products as $product)
            <div class="card">
                <img class="card-img-top product-height-custom" src="{{ $product->picture->url }}" height="304" alt="Card image cap">
                <div class="product-detail">
                    <h5 class="card-title heading text-center">{{ $product->name }}</h5>
                    {{--                        <span class="subheading">BEST GLOVES</span>--}}
                    <blockquote>
                        <p>{{ $product->description }}</p>
                    </blockquote>
                </div>
            </div>
            @endforeach
        </div>
        <div class="btn-wrap">
            <button class="prev-btn"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="next-btn"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
    </section>

    <section>
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h1 class="mb-1">{{ ucwords(__('translation.contact_us')) }}</h1>
                    <p class="fw-bold pb-3">{{ __('translation.contact_us_value') }}</p>
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
        <footer class="background-color pt-5 px-5">
            <div class="container">
                <footer class="py-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 class="fw-bold">{{ ucwords(__('translation.contact')) }}</h1>
                            <ul class="nav flex-column pt-1">
                                <li class="nav-item mb-2"><a class="nav-link p-0 text-black">{{ __('translation.contact_value') }}</a></li>
                                <li class="nav-item mb-2 pt-2"><a class="nav-link p-0 text-black fw-bold">{{ ucwords(__('translation.address')) }}</a></li>
                                @foreach(json_decode($address->value, true) as $item)
                                    <li class="nav-item mb-2"><a class="nav-link p-0 text-black">{{ $item }}</a></li>
                                @endforeach
                                <li class="nav-item mb-1 pt-2"><a class="nav-link p-0 text-black fw-bold">{{ ucwords(__('translation.email')) }} :</a></li>
                                @foreach(json_decode($email->value, true) as $item)
                                    <li class="nav-item mb-2"><a class="nav-link p-0 text-black">{{ $item }}</a></li>
                                @endforeach
                                <li class="nav-item mb-1 pt-2"><a class="nav-link p-0 text-black fw-bold">{{ ucwords(__('translation.phone')) }} :</a></li>
                                @foreach(json_decode($phone->value, true) as $item)
                                    <li class="nav-item mb-1"><a class="nav-link p-0 text-black">{{ $item }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <iframe class="w-100" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.199070257947!2d110.44967897443283!3d-7.768703077058045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5bedc09521f7%3A0xe6514f4f75af8457!2sPT%20SUKSES%20JINYOUNG%20INDONESIA!5e0!3m2!1sen!2sid!4v1708438926532!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center py-4 my-2">
                        <p class="p-0 m-0">Copyright © {{ \Carbon\Carbon::now()->format('Y') }} - Sukses Jinyoung Indonesia</p>
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
