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
                                <a href="#"><svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 19V17C17 15.9391 16.5786 14.9217 15.8284 14.1716C15.0783 13.4214 14.0609 13 13 13H5C3.93913 13 2.92172 13.4214 2.17157 14.1716C1.42143 14.9217 1 15.9391 1 17V19" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9 9C11.2091 9 13 7.20914 13 5C13 2.79086 11.2091 1 9 1C6.79086 1 5 2.79086 5 5C5 7.20914 6.79086 9 9 9Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <a href="./wishlist.html"><svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.4578 2.59133C18.9691 2.08683 18.3889 1.68663 17.7503 1.41358C17.1117 1.14054 16.4272 1 15.7359 1C15.0446 1 14.3601 1.14054 13.7215 1.41358C13.0829 1.68663 12.5026 2.08683 12.0139 2.59133L10.9997 3.63785L9.98554 2.59133C8.99842 1.57276 7.6596 1.00053 6.26361 1.00053C4.86761 1.00053 3.52879 1.57276 2.54168 2.59133C1.55456 3.6099 1 4.99139 1 6.43187C1 7.87235 1.55456 9.25383 2.54168 10.2724L3.55588 11.3189L10.9997 19L18.4436 11.3189L19.4578 10.2724C19.9467 9.76814 20.3346 9.16942 20.5992 8.51045C20.8638 7.85148 21 7.14517 21 6.43187C21 5.71857 20.8638 5.01225 20.5992 4.35328C20.3346 3.69431 19.9467 3.09559 19.4578 2.59133Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="icon-wrapper">
                                        <span>
                                            <svg width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.936 9.12C3.368 9.12 2.884 9.036 2.484 8.868C2.084 8.7 1.756 8.468 1.5 8.172C1.244 7.876 1.052 7.536 0.924 7.152C0.796 6.76 0.72 6.344 0.696 5.904C0.688 5.688 0.68 5.452 0.672 5.196C0.672 4.932 0.672 4.668 0.672 4.404C0.68 4.14 0.688 3.896 0.696 3.672C0.712 3.232 0.788 2.82 0.924 2.436C1.06 2.044 1.256 1.704 1.512 1.416C1.776 1.128 2.108 0.9 2.508 0.732C2.908 0.564 3.384 0.48 3.936 0.48C4.496 0.48 4.976 0.564 5.376 0.732C5.776 0.9 6.104 1.128 6.36 1.416C6.624 1.704 6.82 2.044 6.948 2.436C7.084 2.82 7.16 3.232 7.176 3.672C7.192 3.896 7.2 4.14 7.2 4.404C7.2 4.668 7.2 4.932 7.2 5.196C7.2 5.452 7.192 5.688 7.176 5.904C7.16 6.344 7.088 6.76 6.96 7.152C6.832 7.536 6.64 7.876 6.384 8.172C6.128 8.468 5.796 8.7 5.388 8.868C4.988 9.036 4.504 9.12 3.936 9.12ZM3.936 7.74C4.456 7.74 4.836 7.572 5.076 7.236C5.324 6.892 5.452 6.428 5.46 5.844C5.476 5.612 5.484 5.38 5.484 5.148C5.484 4.908 5.484 4.668 5.484 4.428C5.484 4.188 5.476 3.96 5.46 3.744C5.452 3.176 5.324 2.72 5.076 2.376C4.836 2.024 4.456 1.848 3.936 1.848C3.424 1.848 3.044 2.024 2.796 2.376C2.556 2.72 2.428 3.176 2.412 3.744C2.412 3.96 2.408 4.188 2.4 4.428C2.4 4.668 2.4 4.908 2.4 5.148C2.408 5.38 2.412 5.612 2.412 5.844C2.428 6.428 2.56 6.892 2.808 7.236C3.056 7.572 3.432 7.74 3.936 7.74Z" fill="white"/>
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                                <a href="./cart.html"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.54572 18.9999C7.99759 18.9999 8.3639 18.6162 8.3639 18.1428C8.3639 17.6694 7.99759 17.2856 7.54572 17.2856C7.09385 17.2856 6.72754 17.6694 6.72754 18.1428C6.72754 18.6162 7.09385 18.9999 7.54572 18.9999Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16.5447 18.9999C16.9966 18.9999 17.3629 18.6162 17.3629 18.1428C17.3629 17.6694 16.9966 17.2856 16.5447 17.2856C16.0929 17.2856 15.7266 17.6694 15.7266 18.1428C15.7266 18.6162 16.0929 18.9999 16.5447 18.9999Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 1H4.27273L6.46545 12.4771C6.54027 12.8718 6.7452 13.2263 7.04436 13.4785C7.34351 13.7308 7.71784 13.8649 8.10182 13.8571H16.0545C16.4385 13.8649 16.8129 13.7308 17.112 13.4785C17.4112 13.2263 17.6161 12.8718 17.6909 12.4771L19 5.28571H5.09091" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="icon-wrapper">
                                        <span>
                                            <svg width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.936 9.12C3.368 9.12 2.884 9.036 2.484 8.868C2.084 8.7 1.756 8.468 1.5 8.172C1.244 7.876 1.052 7.536 0.924 7.152C0.796 6.76 0.72 6.344 0.696 5.904C0.688 5.688 0.68 5.452 0.672 5.196C0.672 4.932 0.672 4.668 0.672 4.404C0.68 4.14 0.688 3.896 0.696 3.672C0.712 3.232 0.788 2.82 0.924 2.436C1.06 2.044 1.256 1.704 1.512 1.416C1.776 1.128 2.108 0.9 2.508 0.732C2.908 0.564 3.384 0.48 3.936 0.48C4.496 0.48 4.976 0.564 5.376 0.732C5.776 0.9 6.104 1.128 6.36 1.416C6.624 1.704 6.82 2.044 6.948 2.436C7.084 2.82 7.16 3.232 7.176 3.672C7.192 3.896 7.2 4.14 7.2 4.404C7.2 4.668 7.2 4.932 7.2 5.196C7.2 5.452 7.192 5.688 7.176 5.904C7.16 6.344 7.088 6.76 6.96 7.152C6.832 7.536 6.64 7.876 6.384 8.172C6.128 8.468 5.796 8.7 5.388 8.868C4.988 9.036 4.504 9.12 3.936 9.12ZM3.936 7.74C4.456 7.74 4.836 7.572 5.076 7.236C5.324 6.892 5.452 6.428 5.46 5.844C5.476 5.612 5.484 5.38 5.484 5.148C5.484 4.908 5.484 4.668 5.484 4.428C5.484 4.188 5.476 3.96 5.46 3.744C5.452 3.176 5.324 2.72 5.076 2.376C4.836 2.024 4.456 1.848 3.936 1.848C3.424 1.848 3.044 2.024 2.796 2.376C2.556 2.72 2.428 3.176 2.412 3.744C2.412 3.96 2.408 4.188 2.4 4.428C2.4 4.668 2.4 4.908 2.4 5.148C2.408 5.38 2.412 5.612 2.412 5.844C2.428 6.428 2.56 6.892 2.808 7.236C3.056 7.572 3.432 7.74 3.936 7.74Z" fill="white"/>
                                            </svg>
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
