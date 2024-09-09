@extends('frontend.layouts.master')

@section('content')
<div class="breadcrumb__area breadcrumb-space overflow-hidden banner-home-bg ">
    <div class="banner-home__middel-shape inner-top-shape"></div>
    <div class="container">
        <div class="banner-all-shape-wrapper">
            <div class="banner-home__banner-shape-1 first-shape">
                <img class="upDown-top" src="{{ asset('frontend/assets/imgs/banner-1/banner-shape-1.svg')}}" alt="img not found">
            </div>
            <div class="banner-home__banner-shape-2 second-shape">
                <img class="upDown-bottom" src="{{ asset('frontend/assets/imgs/banner-1/banner-shape-2.svg')}}" alt="img not found">
            </div>
            <div class="right-shape">
                <img class="zooming" src="{{ asset('frontend/assets/imgs/inner-img/inner-right-shape.svg')}}" alt="img not found">
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-12">
                <div class="breadcrumb__content text-center">
                    <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                        <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">{{ $service_detail->title }}</h1>
                    </div>
                    <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                        <nav>
                            <ul>
                                <li><span><a href="{{ url('/') }}">Home</a></span></li>
                                <li class="active"><span>{{ $service_detail->title }}</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- service details area start -->
<section class="section-space service-details__area">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="service-details-content">
                    <div class="service-details-content-thumb mb-30">
                         <img src="{{ asset($service_detail->image_1) }}" alt="{{ $service_detail->title }}" class="img-fluid">
                    </div>


                    {!! $service_detail->description !!}

                </div>
                <div class="content-area pt-70">
                    <div class="faq">
                        <div id="faq" class="accordion">
                            <div class="card wow fadeInLeft animated" data-wow-delay=".2s">
                                <div class="card-header">
                                    <button class="card-link" data-bs-toggle="collapse" data-bs-target="#faq-1">
                                        {{ $service_detail->title_1 }}
                                    </button>
                                </div>
                                <div id="faq-1" class="collapse" data-bs-parent="#faq">
                                    <div class="card-body">
                                        <p>{{ $service_detail->description_1 }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInLeft animated" data-wow-delay=".3s">
                                <div class="card-header">
                                    <button class="card-link" data-bs-toggle="collapse" data-bs-target="#faq-2">
                                        {{ $service_detail->title_2 }}
                                    </button>
                                </div>
                                <div id="faq-2" class="collapse" data-bs-parent="#faq">
                                    <div class="card-body">
                                        <p>{{ $service_detail->description_2 }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInLeft animated" data-wow-delay=".4s">
                                <div class="card-header">
                                    <button class="card-link" data-bs-toggle="collapse" data-bs-target="#faq-3">
                                        {{ $service_detail->title_3 }}
                                    </button>
                                </div>
                                <div id="faq-3" class="collapse" data-bs-parent="#faq">
                                    <div class="card-body">
                                        <p>{{ $service_detail->description_3 }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="service-details-right">
                    <div class="service-details-righ-widget">
                        <h5 class="title">Dịch Vụ Khác</h5>

                        <div class="search">
                            @foreach ($services as $service)
                            <a href="{{ route('service-detail.show', $service->slug) }}">
                                <div class="search-bar main-search d-flex mb-20">
                                    <h6>{{ $service->title }}</h6>
                                    <span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="bottom-img position-relative mt-30">
                        <a href="assets/imgs/service-details/right-big-img.png" class="our-gallery__item sidebar-gallery__item popup-image wow fadeIn animated" data-wow-delay=".5s">
                            <div class="middel-icon">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </a>
                        <img src="{{ asset($service_detail->image_2) }}" alt="{{ $service_detail->name }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service details area end -->

<!-- Brand area start -->
<section class="main-brand__area">
    <div class="brand__area pb-120">
        <div class="container">
            <div class="row">
                <div class="main-brand__tittle-wrapper text-center mb-40">
                    <h4 class="main-brand__tittle-wrapper-title">"Morethan 5k Top Global Brands Trust our Services"</h4>
                    <p class="main-brand__tittle-wrapper-subtitle">Variations of passages of lorem but the majority.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="swiper brand__active wow fadeIn" data-wow-delay=".3s">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".1s">
                                    <div class="brand__thumb">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/imgs/brands/home2-companey-brands-img-1.png')}}" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".2s">
                                    <div class="brand__thumb">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/imgs/brands/home2-companey-brands-img-2.png')}}" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".3s">
                                    <div class="brand__thumb">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/imgs/brands/home2-companey-brands-img-3.png')}}" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".4s">
                                    <div class="brand__thumb">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/imgs/brands/home2-companey-brands-img-4.png')}}" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".5s">
                                    <div class="brand__thumb">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/imgs/brands/home2-companey-brands-img-5.png')}}" alt="image not found">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Brand area end -->
@endsection
