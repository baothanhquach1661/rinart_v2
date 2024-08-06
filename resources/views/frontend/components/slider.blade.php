<section class="banner__area p-relative overflow-hidden">
    <div class="bg-color"></div>
    <div class="banner-home__middel-shape-2"></div>
    <div class="banner-custom-container">
        <div class="swiper banner_parallax-slider p-relative">
            <div class="swiper-wrapper">

                @foreach ($sliders as $slider)
                <div class="swiper-slide">
                    <div class="banner banner__space banner__space-3 overflow-hidden">
                        <div class="bg-shape">
                            <img class="leftRight" src="{{ asset('frontend/assets/imgs/banner-3/isolation_mode-2.svg')}}" alt="img not found">
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-12">
                                <div class="banner__content content-3 p-relative z-index-1">
                                    <span class="sub-title">{{ $slider->name }}</span>
                                    <h2 class="title">{{ $slider->title }}</h2>

                                    <div class="banner-home-2__btn__wrapper-2 d-flex flex-wrap mt-40 mt-md-35 mt-sm-30 mt-xs-25 pb-40">
                                        <a href="{{ $slider->btn_url }}" class="rr-btn wow fadeInLeft animated" data-wow-delay="1s">{{ $slider->btn }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12">
                                <div class="banner-media-3 p-relative z-index-1">
                                    <div class="middel-img upDown-bottom">
                                        <div class="frist-img img-border">
                                            <img src="{{ asset($slider->image1) }}" alt="img not found">
                                        </div>
                                        <div class="secend-img img-border">
                                            <img src="{{ asset($slider->image2)}}" alt="img not found">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12">
                                <div class="banner-text p-relative z-index-1">
                                    <div class="text-space">
                                        <p>
                                            {!! $slider->description !!}
                                        </p>
                                        <div class="arrow">
                                            <img class="upDown" src="{{ asset('frontend/assets/imgs/banner-3/banner-3-right-shape.svg')}}" alt="img not found">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
        <!-- If we need navigation buttons -->
        <div class="banner__navigation banner__navigation-3 d-none d-lg-block">
            <button class="banner__button-next">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 10H1" stroke="#001D08" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10 1L1 10L10 19" stroke="#001D08" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button class="banner__button-prev">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 10H19" stroke="#001D08" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10 1L19 10L10 19" stroke="#001D08" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>

        </div>
</section>
