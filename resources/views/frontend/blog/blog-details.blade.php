@extends('frontend.layouts.master')

@section('og_meta_tag_section')
    <meta property="og:title" content="{{ $blog->seo_title }}">
    <meta property="og:description" content="{{ $blog->seo_description }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset($blog->image) }}">
    <meta property="og:site_name" content="{{ config('settings.site_name') }}">
    <meta property="og:type" content="website">
@endsection

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
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">
                                {{ $blog->title }}</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ url('/') }}">Trang Chủ</a></span></li>
                                    <li class="active"><span>{{ $blog->title }}</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- blog details area start -->
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="blog__details-content">
                        <div class="blog__details-thumb mb-30">
                            <img src="{{ asset($blog->banner) }}" alt="{{ $blog->slug }}" class="img-fluid">
                        </div>
                        <ul class="blog__details-meta mb-25">
                            <li><a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="18"
                                        viewBox="0 0 16 18" fill="none">
                                        <path
                                            d="M15.2222 17V15.2222C15.2222 14.2792 14.8476 13.3748 14.1808 12.708C13.514 12.0412 12.6097 11.6666 11.6667 11.6666H4.55556C3.61256 11.6666 2.70819 12.0412 2.0414 12.708C1.3746 13.3748 1 14.2792 1 15.2222V17"
                                            stroke="#4A5764" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M8.11024 8.11111C10.0739 8.11111 11.6658 6.51923 11.6658 4.55556C11.6658 2.59188 10.0739 1 8.11024 1C6.14656 1 4.55469 2.59188 4.55469 4.55556C4.55469 6.51923 6.14656 8.11111 8.11024 8.11111Z"
                                            stroke="#4A5764" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg> By Rinart</a></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17"
                                    fill="none">
                                    <path
                                        d="M13 2.50012H2.5C1.67157 2.50012 1 3.17169 1 4.00012V14.5001C1 15.3285 1.67157 16.0001 2.5 16.0001H13C13.8284 16.0001 14.5 15.3285 14.5 14.5001V4.00012C14.5 3.17169 13.8284 2.50012 13 2.50012Z"
                                        stroke="#4A5764" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10.752 1V4" stroke="#4A5764" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M4.75 1V4" stroke="#4A5764" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M1 6.99988H14.5" stroke="#4A5764" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>{{ date('d/m/Y', strtotime($blog->created_at)) }}</li>
                            <li><a href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <path
                                            d="M14.9423 7.61112C14.9449 8.63769 14.7061 9.65036 14.2452 10.5667C13.6986 11.6647 12.8585 12.5882 11.8188 13.2339C10.7791 13.8795 9.58088 14.2217 8.35842 14.2222C7.33609 14.2249 6.32758 13.9851 5.41505 13.5222L1 15L2.47168 10.5667C2.01076 9.65036 1.7719 8.63769 1.77457 7.61112C1.77504 6.3836 2.11586 5.18046 2.75883 4.13644C3.40181 3.09243 4.32156 2.24879 5.41505 1.70002C6.32758 1.23719 7.33609 0.997346 8.35842 1.00002H8.7457C10.3602 1.08946 11.8851 1.77372 13.0284 2.9218C14.1718 4.06987 14.8532 5.60108 14.9423 7.22223V7.61112Z"
                                            stroke="#4A5764" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg> 3 Comments</a></li>
                        </ul>

                        {!! $blog->long_description !!}


                        <div class="blog__details-bottom d-flex flex-column flex-md-row justify-content-md-between">
                            <div class="blog__details-bottom-tags_wapper d-flex align-items-center mb-sm-30 mb-xs-30">
                                <span>Tag:</span>
                                <div class="blog__details-bottom-tags">
                                    <a href="blog-details.html">Branding</a>
                                    <a href="blog-details.html">Web Design</a>
                                    <a href="blog-details.html">Creative</a>
                                </div>
                            </div>

                            <div class="btn__container-social">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                    class="btn-f">
                                    <i class="fab fa-facebook"></i>
                                    <span>Facebook</span>
                                </a>
                            </div>

                        </div>
                    </div>



                    <div class="live-comment-widget mt-80 mt-xs-60">
                        <h4>Bạn đang cần in ấn?</h4>
                        <p class="mb-30">Your email address will not be published. Required fields are marked
                            <span>*</span>
                        </p>

                        <div class="live-comment-widget__form">

                            <form action="{{ route('blog.comment.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="live-comment-widget__input">
                                            <label for="name">Họ Tên *</label>
                                            <input name="name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="live-comment-widget__input">
                                            <label for="email">Số Điện Thoại *</label>
                                            <input name="phone" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="live-comment-widget__input">
                                            <label for="website">Email</label>
                                            <input name="email" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="live-comment-widget__textarea">
                                            <label for="comment">Comment</label>
                                            <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="rr-btn mb-lg-60 mb-md-60 mb-sm-60 mb-xs-60">
                                            Gửi
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 6H11" stroke="white" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M6 1L11 6L6 11" stroke="white" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="sidebar">

                        <div class="sidebar__widget">
                            <h5 class="sidebar__widget-title sidebar__widget-title__have-bar">Blog Category</h5>

                            <div class="sidebar__widget-category">
                                @foreach ($blog_categories as $b_category)
                                    <a href="blog-details.html"><span><svg xmlns="http://www.w3.org/2000/svg"
                                                width="5" height="5" viewBox="0 0 5 5" fill="none">
                                            </svg>{{ $b_category->name }}</span>
                                        <span>({{ $b_category->blogs->count() }})</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <div class="sidebar__widget">
                            <h5 class="sidebar__widget-title">Bài Đăng Gần Đây</h5>

                            <div class="sidebar-post__wrapper">

                                @foreach ($recent_blogs as $blog)
                                    <div class="sidebar-post">
                                        <a href="{{ route('blog.details', $blog->slug) }}" class="sidebar-post_thumb">
                                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->slug }}">
                                        </a>

                                        <div class="sidebar-post_content">
                                            <ul class="post-meta">
                                                <li>
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15 8C15 11.864 11.864 15 8 15C4.136 15 1 11.864 1 8C1 4.136 4.136 1 8 1C11.864 1 15 4.136 15 8Z"
                                                            stroke="#FF3D00" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M10.5962 10.2259L8.42623 8.93093C8.04823 8.70693 7.74023 8.16793 7.74023 7.72693V4.85693"
                                                            stroke="#FF3D00" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    {{ date('d M Y', strtotime($blog->created_at)) }}
                                                </li>
                                            </ul>

                                            <a href="{{ route('blog.details', $blog->slug) }}">
                                                <h3 class="title rr-fw-medium">{{ $blog->short_description }}</h3>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <div class="sidebar__widget-button">
                            <h5 class="sidebar">Follow Us</h5>

                            <div class="sidebar-tags">
                                <div class="btn d-flex">
                                    <a href="blog-details.html"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="blog-details.html"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="blog-details.html"><i class="fa-brands fa-pinterest-p"></i></a>
                                    <a href="blog-details.html"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="blog-details.html"><i class="fa-brands fa-vimeo-v"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar__widget">
                            <h5 class="sidebar__widget-title">Tags</h5>

                            <div class="sidebar__widget-tags">
                                <div class="tags">
                                    <a href="blog-details.html">Branding</a>
                                    <a href="blog-details.html">UX Design</a>
                                    <a href="blog-details.html">Agency</a>
                                    <a href="blog-details.html">Company</a>
                                    <a href="blog-details.html">Web Design</a>
                                    <a href="blog-details.html">Creative</a>
                                    <a href="blog-details.html">Portfolio</a>
                                    <a href="blog-details.html">Illustration</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog details area end -->


    <!-- latest-newsletter area start -->
    <section class="latest-newsletter__area pt-80 pb-80 overflow-hidden latest-newsletter-bg">
        <div class="container p-relative">
            <div class="row">
                <div class="col-xl-12">
                    <div class="latest-newsletter__content text-center">
                        <h2 class="title wow fadeInLeft animated" data-wow-delay=".4s">Subcribe To Our Newsletter</h2>
                        <p class="title wow fadeInLeft animated" data-wow-delay=".1s">Professional printing services can
                            provide you with high-quality prints that will look great and last a long time. We have the
                            equipment and expertise.</p>
                        <div class="search custom-search d-flex wow fadeInRight animated" data-wow-delay=".4s">
                            <input type="email" placeholder="Your Email">
                            <button type="submit" class="rr-btn">Subscribe Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest-newsletter area end -->
@endsection
