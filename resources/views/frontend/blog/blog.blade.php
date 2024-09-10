@extends('frontend.layouts.master')
@section('content')

<div class="breadcrumb__area breadcrumb-space overflow-hidden banner-home-bg ">
    <div class="banner-home__middel-shape inner-top-shape"></div>
    <div class="container">
        <div class="banner-all-shape-wrapper">
            <div class="banner-home__banner-shape-1 first-shape">
                <img class="upDown-top" src="{{ asset('frontend/assets/imgs/banner-1/banner-shape-1.svg') }}" alt="img not found">
            </div>
            <div class="banner-home__banner-shape-2 second-shape">
                <img class="upDown-bottom" src="{{ asset('frontend/assets/imgs/banner-1/banner-shape-2.svg') }}" alt="img not found">
            </div>
            <div class="right-shape">
                <img class="zooming" src="{{ asset('frontend/assets/imgs/inner-img/inner-right-shape.svg')}}" alt="img not found">
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-12">
                <div class="breadcrumb__content text-center">
                    <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                        <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Blogs</h1>
                    </div>
                    <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                        <nav>
                            <ul>
                                <li><span><a href="{{ url('/') }}">Trang Chủ</a></span></li>
                                <li class="active"><span>Blogs</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- blog-news area start -->
<section class="latest-blog__area section-space pb-90 overflow-hidden latest-blog-bg">
    <div class="container">
        <div class="row mb-minus-30">

            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="swiper-slide latest-blog__item-slide">
                    <div class="latest-blog__item-slide-inner">
                        <div class="latest-blog__item-media">
                            <a href="{{ route('blog.details', $blog->slug) }}">
                                <img src="{{ asset($blog->image) }}" alt="{{ $blog->slug }}" class="img-fluid">
                            </a>
                        </div>
                        <div class="latest-blog__item-text">
                            <div class="latest-blog__item-text-meta d-flex">
                                <div class="latest-blog__item-text-meta-calender">
                                    <h4>{{ date('d', strtotime($blog->created_at)) }}</h4>
                                    <p>{{ date('M', strtotime($blog->created_at)) }}</p>
                                </div>
                                <span><a href="javascript:;"><i class="fa-regular fa-user"></i>Rinart</a></span>
                                <span class="meta-comment"><a href="{{ route('blog.details', $blog->slug) }}"><i class="fa-regular fa-comment"></i> 2 Comments</a></span>
                            </div>

                            <div class="latest-blog__item-text-bottom">
                                <a href="{{ route('blog.details', $blog->slug) }}"><h4>{!! $blog->short_description !!}</h4></a>
                                <a href="{{ route('blog.details', $blog->slug) }}" class="readmore d-flex align-items-center">Xem thêm<i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            @if($blogs->hasPages())
                <div class="bottom-button d-flex mt-30">
                    {{ $blogs->links() }}
                </div>
            @endif
        </div>
    </div>
</section>
<!-- blog-news area end -->

<!-- Brand area start -->
<section class="main-brand__area section-space-bottom">
    <div class="brand__area">
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
                                        <img class="img-fluid" src="assets/imgs/brands/home2-companey-brands-img-1.png" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".2s">
                                    <div class="brand__thumb">
                                        <img class="img-fluid" src="assets/imgs/brands/home2-companey-brands-img-2.png" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".3s">
                                    <div class="brand__thumb">
                                        <img class="img-fluid" src="assets/imgs/brands/home2-companey-brands-img-3.png" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".4s">
                                    <div class="brand__thumb">
                                        <img class="img-fluid" src="assets/imgs/brands/home2-companey-brands-img-4.png" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".5s">
                                    <div class="brand__thumb">
                                        <img class="img-fluid" src="assets/imgs/brands/home2-companey-brands-img-5.png" alt="image not found">
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
