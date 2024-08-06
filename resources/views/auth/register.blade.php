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
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content text-center">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Đăng Ký</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ url('/') }}">Trang Chủ</a></span></li>
                                    <li class="active"><span>Đăng ký</span></li>
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
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="all-content">
                        <div class="title-wrapper text-center mb-40">
                            <h3 class="title">Xin Chào!</h3>
                            <h6 class="subtitle">Enter your Credentials to access your account</h6>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="signup-form-wrapper">
                                <div class="item-thumb">
                                    <div class="signup-item">
                                        <h6>Your Name</h6>
                                        <input type="text" name="name" placeholder="Enter your name" required>
                                    </div>
                                    <div class="signup-item">
                                        <h6>Email Address</h6>
                                        <input type="email" name="email" placeholder="Enter email address" required>
                                    </div>
                                    <div class="signup-item">
                                        <h6>New Password</h6>
                                        <input type="password" name="password" placeholder="Create password" required>
                                    </div>
                                    <div class="signup-item">
                                        <h6>Confirm Password</h6>
                                        <input type="password" name="password_confirmation" required>
                                    </div>
                                    <div id="error-messages">
                                        @if ($errors->any())
                                            @foreach ($errors->all() as $error)
                                                <div class="text-danger">{{ $error }}</div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="signup-action">
                                        <div class="course-sidebar-list">
                                            <input class="signup-checkbo" type="checkbox" id="sing-in">
                                            <label class="sign-check" for="sing-in"><span>I Agree to the terms and privacy
                                                    policy.</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="button">
                                    <div class="mb-20">
                                        <button type="submit" class="signin-buttom">Sign Up</button>
                                    </div>
                                </div>
                                <div class="bottom-button">
                                </div>
                            </div>
                        </form>

                        <div class="button-wrap d-flex ">
                            <div class="sign-facebook mb-sm-30 mb-xs-30" style="width:50%;">
                                <a href="#">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.8055 8.0415H19V8H10V12H15.6515C14.827 14.3285 12.6115 16 10 16C6.6865 16 4 13.3135 4 10C4 6.6865 6.6865 4 10 4C11.5295 4 12.921 4.577 13.9805 5.5195L16.809 2.691C15.023 1.0265 12.634 0 10 0C4.4775 0 0 4.4775 0 10C0 15.5225 4.4775 20 10 20C15.5225 20 20 15.5225 20 10C20 9.3295 19.931 8.675 19.8055 8.0415Z"
                                            fill="#FFC107" />
                                        <path
                                            d="M1.15234 5.3455L4.43784 7.755C5.32684 5.554 7.47984 4 9.99934 4C11.5288 4 12.9203 4.577 13.9798 5.5195L16.8083 2.691C15.0223 1.0265 12.6333 0 9.99934 0C6.15834 0 2.82734 2.1685 1.15234 5.3455Z"
                                            fill="#FF3D00" />
                                        <path
                                            d="M10.0002 19.9999C12.5832 19.9999 14.9302 19.0114 16.7047 17.4039L13.6097 14.7849C12.6057 15.5454 11.3577 15.9999 10.0002 15.9999C7.39916 15.9999 5.19066 14.3414 4.35866 12.0269L1.09766 14.5394C2.75266 17.7779 6.11366 19.9999 10.0002 19.9999Z"
                                            fill="#4CAF50" />
                                        <path
                                            d="M19.8055 8.0415H19V8H10V12H15.6515C15.2555 13.1185 14.536 14.083 13.608 14.7855L13.6095 14.7845L16.7045 17.4035C16.4855 17.6025 20 15 20 10C20 9.3295 19.931 8.675 19.8055 8.0415Z"
                                            fill="#1976D2" />
                                    </svg>
                                    <span>Sign in with Google</span>
                                </a>
                            </div>
                        </div>
                        <div class="sign-social text-center mt-25">
                            <h5>Already have an account? <a href="{{ route('login') }}">Sign In</a></h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- register area end  -->
@endsection
