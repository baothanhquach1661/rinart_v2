<header>
    <div id="header-sticky" class="header__area box-shadow-3 header-1 bg-headr-3">
        <div class="header-top-3  d-none d-md-block">
            <div class="container-fluid container-width">
                <div class="top-header__menu-wrapper d-flex justify-content-between align-items-center">
                    <div class="header-top-socail-menu d-flex">
                        <span><a href="contact.html">Chính Sách Bảo Mật</a></span>
                        <span><a href="about-us.html">Tuyển Dụng</a></span>
                    </div>

                    <ul class="header-top-menu d-flex">
                        <li>Đáp ứng mọi nhu cầu in ấn với công nghệ in kỹ thuật số<a href="shop.html">Xem Thêm</a>
                        </li>
                    </ul>

                    <div class="header-top-social d-flex">
                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://pinterest.com/"><i class="fa-brands fa-pinterest-p"></i></a>
                        <a href="https://vimeo.com/"><i class="fa-brands fa-vimeo-v"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid home3-container-width">
            <div class="mega__menu-wrapper p-relative">
                <div class="header__main">
                    <div class="header__left">
                        <div class="header__logo header__logo-3">
                            <a href="{{ url('/') }}">
                                <div class="logo logo-3">
                                    <img src="{{ asset('frontend/assets/imgs/logo/logo.svg') }}" alt="logo not found">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="header__middle">
                        <div class="mean__menu-wrapper d-none d-lg-block">
                            <div class="main-menu">
                                <nav id="mobile-menu" class="mobile-menu">
                                    <ul>
                                        <li class="active">
                                            <a href="{{ url('/') }}">Trang Chủ</a>
                                        </li>

                                        <li class="has-dropdown">
                                            <a href="service.html">Sản Phẩm
                                                <i class="fa-solid fa-chevron-down dropdown-icon" style="font-size:10px;"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="service.html">Business Card</a></li>
                                                <li><a href="service-details.html">Stickers</a></li>
                                            </ul>
                                        </li>

                                        <li class="has-dropdown">
                                            <a href="service.html">Dịch Vụ In Ấn
                                                <i class="fa-solid fa-chevron-down dropdown-icon" style="font-size:10px;"></i>
                                            </a>
                                            <ul class="submenu">
                                                @foreach ($categories as $category)
                                                    <li><a href="service.html">{{ $category->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="about-us.html">Bảng Giá</a>
                                        </li>

                                        <li class="has-dropdown">
                                            <a href="has-dropdown">Blog
                                                <i class="fa-solid fa-chevron-down dropdown-icon" style="font-size:10px;"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="blog-grid.html">blog grid</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="contact.html">Liên Hệ</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header__right">
                        <div class="header__action d-flex align-items-center">
                            <div class="header__social d-none d-sm-inline-flex">
                                <a href="{{ route('login') }}"><svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 19V17C17 15.9391 16.5786 14.9217 15.8284 14.1716C15.0783 13.4214 14.0609 13 13 13H5C3.93913 13 2.92172 13.4214 2.17157 14.1716C1.42143 14.9217 1 15.9391 1 17V19" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9 9C11.2091 9 13 7.20914 13 5C13 2.79086 11.2091 1 9 1C6.79086 1 5 2.79086 5 5C5 7.20914 6.79086 9 9 9Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>

                                <a href="{{ route('cart.index') }}"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.54572 18.9999C7.99759 18.9999 8.3639 18.6162 8.3639 18.1428C8.3639 17.6694 7.99759 17.2856 7.54572 17.2856C7.09385 17.2856 6.72754 17.6694 6.72754 18.1428C6.72754 18.6162 7.09385 18.9999 7.54572 18.9999Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16.5447 18.9999C16.9966 18.9999 17.3629 18.6162 17.3629 18.1428C17.3629 17.6694 16.9966 17.2856 16.5447 17.2856C16.0929 17.2856 15.7266 17.6694 15.7266 18.1428C15.7266 18.6162 16.0929 18.9999 16.5447 18.9999Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 1H4.27273L6.46545 12.4771C6.54027 12.8718 6.7452 13.2263 7.04436 13.4785C7.34351 13.7308 7.71784 13.8649 8.10182 13.8571H16.0545C16.4385 13.8649 16.8129 13.7308 17.112 13.4785C17.4112 13.2263 17.6161 12.8718 17.6909 12.4771L19 5.28571H5.09091" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="icon-wrapper">
                                        <span style="color:white; font-size:12px;">
                                            {{ Cart::content()->count() }}
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
