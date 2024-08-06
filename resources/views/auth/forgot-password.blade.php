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
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Quên Mật Khẩu</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ url('/') }}">Trang Chủ</a></span></li>
                                    <li class="active"><span>Quên mật khẩu</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- register area start  -->
    <div class="register-area pt-120 pb-120">
        <div class="container container-small">
            <div class="row">
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="all-content">
                        <div class="title-wrapper text-center mb-40">
                            <h3 class="title">Quên Mật Khẩu?!</h3>
                            <h6 class="subtitle">No problem. Just let us know your email
                                address and we will email you a password reset link that will allow you to choose a new one</h6>
                        </div>

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="signup-form-wrapper">
                                <div class="item-thumb">
                                    <div class="signup-item">
                                        <h6>Email Address</h6>
                                        <input type="email" name="email" placeholder="Enter your email" required autofocus>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="button">
                                    <div class="mb-20">
                                        <button type="submit" class="signin-buttom">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- register area end  -->
@endsection

