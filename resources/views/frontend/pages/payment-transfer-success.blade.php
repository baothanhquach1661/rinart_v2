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
    <div class="container pt-100 pb-70">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2>Thank you for your order!</h2>
                    <p>Please transfer the total amount to the following bank account:</p>
                    <div class="bank-details">
                        <p><strong>Bank Name:</strong> ABC Bank</p>
                        <p><strong>Account Number:</strong> 1234567890</p>
                        <p><strong>Account Name:</strong> Your Company Name</p>
                        <p><strong>Amount:</strong> {{ currencyPosition(session()->get('grandtotal')) }}</p>
                        <p><strong>Reference:</strong> Please use your order number as the payment reference.</p>
                    </div>
                    <p>Once the transfer is complete, please email us at support@example.com with your order number and payment proof.</p>
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Go to Dashboard</a>
                </div>
            </div>
        </div>
    </div>
@endsection
