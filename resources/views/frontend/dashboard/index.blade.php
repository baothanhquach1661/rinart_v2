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
                        <li><a href="#profile" class="tab-link active" data-tab="profile">Profile</a></li>
                        <li><a href="#orders" class="tab-link" data-tab="orders">Order History</a></li>
                        <li><a href="#settings" class="tab-link" data-tab="settings">Account Settings</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();this.closest('form').submit();" >Logout
                                </a>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="profile-content">
                <section id="profile" class="tab-content active">
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
                <section id="orders" class="tab-content">
                    <h2>Order History</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#1234</td>
                                <td>01/20/2023</td>
                                <td>Shipped</td>
                                <td>$99.99</td>
                            </tr>
                            <tr>
                                <td>#5678</td>
                                <td>02/14/2023</td>
                                <td>Processing</td>
                                <td>$49.99</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
                <section id="settings" class="tab-content">
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
            $('.tab-link').click(function(e){
                e.preventDefault();
                var tab = $(this).data('tab');

                $('.tab-link').removeClass('active');
                $(this).addClass('active');

                $('.tab-content').removeClass('active');
                $('#' + tab).addClass('active');
            });
        });
    </script>
@endpush
