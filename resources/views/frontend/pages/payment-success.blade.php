@extends('frontend.layouts.master')
@section('content')
    <div class="breadcrumb__area breadcrumb-space overflow-hidden banner-home-bg ">
        <div class="banner-home__middel-shape inner-top-shape"></div>
        <div class="container">
            <div class="banner-all-shape-wrapper">
                <div class="banner-home__banner-shape-1 first-shape">
                    <img class="upDown-top" src="{{ asset('frontend/assets/imgs/banner-1/banner-shape-1.svg') }}"
                        alt="img not found">
                </div>
                <div class="banner-home__banner-shape-2 second-shape">
                    <img class="upDown-bottom" src="{{ asset('frontend/assets/imgs/banner-1/banner-shape-2.svg') }}"
                        alt="img not found">
                </div>
                <div class="right-shape">
                    <img class="zooming" src="{{ asset('frontend/assets/imgs/inner-img/inner-right-shape.svg') }}"
                        alt="img not found">
                </div>
            </div>

        </div>
    </div>


    <!-- checkout-area start -->
    <section class="checkout-area pt-100 pb-70">
        <div class="container container-small">
            <div class="row">
                <div class="col-lg-12">
                    <div class="checkbox-form-custom text-center">
                        <i class="fas fa-check"></i>
                        <h5>Đơn hàng của bạn đã được thanh toán thành công!</h5>
                        <a class="custom-btn mt-5" href="{{ route('dashboard') }}">Go to Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- checkout-area end -->
@endsection
