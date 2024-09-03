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
                        <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Sign In</h1>
                    </div>
                    <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                        <nav>
                            <ul>
                                <li><span><a href="{{ url('/') }}">Home</a></span></li>
                                <li class="active"><span>Sign In</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="register-area pt-120 pb-120">
    <div class="container container-small">
        <div class="custom-container">
            <div class="profile-sidebar">
                <div class="profile-details">
                    <h2>{{ auth()->user()->name }}</h2>
                </div>
                <nav class="profile-nav">
                    <ul>
                        <li><a href="#" class="tab-link-profile active" data-tab="profile">Profile</a></li>
                        <li><a href="#" class="tab-link-profile" data-tab="shipping-address">Thông Tin Giao Hàng</a></li>
                        <li><a href="#" class="tab-link-profile" data-tab="orders">Đơn Hàng</a></li>
                        <li><a href="#" class="tab-link-profile" data-tab="settings">Tài Khoản</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();this.closest('form').submit();" >Đăng Xuất
                                </a>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="profile-content">
                <section id="profile" class="tab-content-profile active">
                    <h2>Profile Information</h2>
                    <form method="POST" action="{{ route('user-profile.update') }}">
                        @csrf
                        @method('PUT')
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" value="{{ auth()->user()->name }}">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ auth()->user()->email }}">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" value="{{ auth()->user()->phone }}">
                        <button type="submit">SAVE</button>
                    </form>
                </section>

                @include('frontend.dashboard.section.shipping-address')

                @include('frontend.dashboard.section.order')

                <section id="settings" class="tab-content-profile">
                    <h2>Account Settings</h2>
                    <form action="{{ route('user-password.update') }}" method="POST">
                        @csrf
                        <label for="password">Current Password</label>
                        <input type="password" id="password" name="current_password">
                        <label for="password">New Password</label>
                        <input type="password" id="password" name="password">
                        <label for="password-confirm">Confirm Password</label>
                        <input type="password" id="password-confirm" name="password_confirmation">
                        <button type="submit">Update Password</button>
                    </form>
                </section>
            </div>
        </div>

    </div>
</div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            // Hide all tab contents except the first one
            $('.tab-content-profile').hide();
            $('.tab-content-profile.active').show();

            $('.tab-link-profile').click(function(e){
                e.preventDefault();
                var tab = $(this).data('tab');

                // Remove active class from all links and contents
                $('.tab-link-profile').removeClass('active');
                $(this).addClass('active');

                // Hide all tab contents and show the active one
                $('.tab-content-profile').removeClass('active').hide();
                $('#' + tab).addClass('active').show();
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.detail-custom-btn').click(function() {
                var invoiceId = $(this).closest('tr').find('td:first').text().replace('#', ''); // Remove '#' from the invoice_id

                $.ajax({
                    url: '/orders/' + invoiceId + '/details',  // Pass the invoice_id in the URL
                    type: 'GET',
                    success: function(data) {
                        $('#orderDetailContent').html(data);
                        $('#customOrderDetailModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);  // This logs the error response to the console
                        alert('Failed to retrieve order details.');
                    }
                });
            });
        });
    </script>
@endpush
