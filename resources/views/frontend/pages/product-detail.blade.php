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
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Shop Detailss</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ url('/') }}">Home</a></span></li>
                                    <li class="active"><span>Shop Details</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--shop-details start-->
    <section class="product-filter-area filter-area-3 section-space">
    <div class="container">
        <div class="row flex align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="rr-product-details-thumb-wrapper">
                    <figure class="rr-product-media">
                        <img id="main-product-image" src="{{ asset($product->thumb_image) }}" class="img-fluid" alt="">
                    </figure>
                    <a href="assets/imgs/shop-details/shop-details-img.png" class=" popup-image wow fadeIn animated" data-wow-delay=".5s">
                    </a>

                    <!-- Product Gallery Start -->
                    <div class="product-gallery">
                        @foreach ($product->productGallery as $gallery)
                        <div class="product-gallery-item">
                            <img src="{{ asset($gallery->gallery_image) }}" alt="Product Image 1">
                        </div>
                        @endforeach
                        <!-- Add more images as needed -->
                    </div>
                    <!-- Product Gallery End -->
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="rr-shop-details__right-warp">
                    <h3 class="rr-shop-details__title-sm">{{ $product->name }}</h3>

                    <div class="rr-shop-details__price d-flex align-items-center">
                        <div class="price">
                            <div class="woocs_price_code">
                                <del aria-hidden="true"><span class="woocommerce-old-price">$270.50</span></del>
                                <span class="woocommerce-new-price">$230.50</span>
                            </div>
                        </div>
                    </div>

                    <div class="woocommerce-product-details__short-description">
                        <p>Aliquam tempus libero eget arcu euismod, in bibendum nisl posuere. Donec gravida sem eu dolor rhoncus viverra. In vel cursus ante. Quisque nec augue sollicitudin erat vehicula tincidunt. Morbi in nisi nisi. Proin eu eros diam.Quisque nec augue sollicitudin erat vehicula tincidunt.</p>
                    </div>

                    <div class="rr-shop-details__quantity-wrap d-flex align-items-center">
                        <div class="rr-product-details-action__wrapper">
                            <h6 class="rr-product-details-action__title">Quantity</h6>
                            <div class="price-cart">
                                <div class="cart">
                                    <div class="quantity">
                                        <div class="quantity__group">
                                            <span class="quantity-control minus"><i class="far fa-minus"></i></span>
                                            <input type="number" class="input-text qty text" name="quantity" value="1" min="1" max="100" step="1" autocomplete="off">
                                            <span class="quantity-control plus"><i class="far fa-plus"></i></span>
                                        </div>
                                    </div>
                                    <button class="rr-btn">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rr-shop-details__product-info">
                        <ul>
                            <li>
                                SKU:
                                <span>printox-016</span>
                            </li>
                            <li>
                                Categories:
                                <span> Bags, Calendars</span>
                            </li>
                        </ul>
                        <div class="rr-shop-details__social">
                            <span>Share:</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="rr-fea-product__tab rr-fea-product__tab-3 product-filter-area-review mb-40">
                    <nav>
                        <div class="nav nav-tab nav-inner nav-inner-3 align-items-center justify-content-center mt-80" id="nav-tab" role="tablist">
                            <div class="all-button d-flex">
                                <button class="nav-link nav-link-3 rr-el-rep-filterBtn active" id="nav-0-tab" data-bs-toggle="tab" data-bs-target="#nav-0" type="button" role="tab" aria-controls="nav-0" aria-selected="true">
                                    <span class="button button-3">
                                        <span>Description</span>
                                    </span>
                                </button>
                                <button class="nav-link nav-link-3 rr-el-rep-filterBtn " id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="false">
                                    <span class="button text-center">
                                        <span>Reviews (0)</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane active fade show" id="nav-0" role="tabpanel" aria-labelledby="nav-0-tab" tabindex="0">
                    <div class="rr-fea-product__wrapper wrapper">
                        <div class="row">
                            <div class="paragraph ">
                                <p>{!! $product->long_description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane second-pane fade " id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab" tabindex="0">
                    <div class="rr-fea-product__wrapper">
                        <div class="row">

                            <div class="signup-form-wrapper">
                                <div class="title-wrapper">
                                    <h3 class="title">Reviews</h3>
                                    <p class="dc">There are no reviews yet.</p>
                                    <p class="main-dc">Be the first to review “Cofee Mug Print” <br>
                                        Your email address will not be published. Required fields are marked *</p>
                                </div>
                                <div class="item-thumb">
                                    <div class="signup-item">
                                        <h6>Name*</h6>
                                        <input type="text" >
                                    </div>
                                    <div class="signup-item">
                                        <h6>Email*</h6>
                                        <input type="email">
                                    </div>
                                    <div class="signup-item">
                                        <div class="text mb-25">
                                            <h6>Your Rating*</h6>
                                            <div class="social">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <h6>Your review*</h6>
                                        <textarea name="textarea" id="textarea" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
    </section>

    <!--shop-details end-->


    <!-- best deal-area start -->
    <section class="best-deal__area pb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="best-deal__title-wrapper mb-50">
                        <h3 class="best-deal__title-wrapper-title fw-sbold">Related products</h3>
                    </div>
                </div>
            </div>
            <div class="row mb-minus-30">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="rr-fea-product__item rr-pro-img mb-30">

                        <div class="rr-fea-product__thumb fix p-relative">
                            <img  src="assets/imgs/prodact/prodact-card-2.png"  alt="img not found">
                            <div class="rr-fea-product__thumb-text">
                                <span>-70%</span>
                            </div>

                            <div class="rr-fea-product__icon-box icon-box-3 rr-product-action">
                                <div class="product-action-btn mb-6">
                                    <a href="#" class="icon-btn woosq-btn woosq-btn-896 " data-id="896" data-effect="mfp-3d-unfold">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.612 2.41452C17.1722 1.96607 16.65 1.61034 16.0752 1.36763C15.5005 1.12492 14.8844 1 14.2623 1C13.6401 1 13.0241 1.12492 12.4493 1.36763C11.8746 1.61034 11.3524 1.96607 10.9126 2.41452L9.99977 3.34476L9.08699 2.41452C8.19858 1.50912 6.99364 1.00047 5.73725 1.00047C4.48085 1.00047 3.27591 1.50912 2.38751 2.41452C1.4991 3.31992 1 4.5479 1 5.82833C1 7.10875 1.4991 8.33674 2.38751 9.24214L3.30029 10.1724L9.99977 17L16.6992 10.1724L17.612 9.24214C18.0521 8.79391 18.4011 8.26171 18.6393 7.67596C18.8774 7.0902 19 6.46237 19 5.82833C19 5.19428 18.8774 4.56645 18.6393 3.9807C18.4011 3.39494 18.0521 2.86275 17.612 2.41452Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    </a>
                                </div>
                                <div class="product-action-btn mb-6">
                                    <a href="#" class="icon-btn woosq-btn woosq-btn-896 " data-id="896" data-effect="mfp-3d-unfold">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.8887 1L14.9997 3.90909L11.8887 6.81818" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 8.27282V6.81827C1 6.04673 1.32777 5.30679 1.91121 4.76123C2.49464 4.21567 3.28595 3.90918 4.11106 3.90918H14.9998" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M4.11106 16.9998L1 14.0907L4.11106 11.1816" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14.9998 9.72705V11.1816C14.9998 11.9531 14.672 12.6931 14.0886 13.2386C13.5051 13.7842 12.7138 14.0907 11.8887 14.0907H1" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    </a>
                                </div>
                                <div class="product-action-btn">
                                    <a href="#" class="icon-btn woosq-btn woosq-btn-896 " data-id="896" data-effect="mfp-3d-unfold">
                                        <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9C1 9 5 1 12 1C19 1 23 9 23 9C23 9 19 17 12 17C5 17 1 9 1 9Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-action-btn-5">
                                <h5>Hot</h5>
                            </div>
                        </div>

                        <div class="rr-fea-product__content">
                            <div class="rr-fea-product__star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <h4 class="rr-fea-product__title-sm"><a href="shop.html">Promo Trucker Hat</a></h4>
                            <div class="rr-product-content-price">
                                <span class="product-item-3-price">
                                <span class="price">
                                    <span class="woocs_price_code d-flex gap-6"  >
                                        <del aria-hidden="true">
                                            <span class="woocommerce-price-amount amount">$270.50

                                            </span>
                                </del>
                                <span class="woocommerce-price-amount amount body-color">$230.50

                                        </span>
                                </span>
                                </span>
                                </span>
                            </div>
                            <div class="rr-fea-product__link-box">
                                <a href="#"  class="cart-button icon-btn button rr-btn-cart "  >
                                    <span></span>Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="rr-fea-product__item rr-pro-img mb-30">

                        <div class="rr-fea-product__thumb fix p-relative">
                            <img  src="assets/imgs/prodact/prodact-card-1.png"  alt="img not found">
                            <div class="rr-fea-product__thumb-text">
                                <span>-60%</span>
                            </div>

                            <div class="rr-fea-product__icon-box icon-box-3 rr-product-action">
                                <div class="product-action-btn mb-6">
                                    <a href="#" class="icon-btn woosq-btn woosq-btn-896 " data-id="896" data-effect="mfp-3d-unfold">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.612 2.41452C17.1722 1.96607 16.65 1.61034 16.0752 1.36763C15.5005 1.12492 14.8844 1 14.2623 1C13.6401 1 13.0241 1.12492 12.4493 1.36763C11.8746 1.61034 11.3524 1.96607 10.9126 2.41452L9.99977 3.34476L9.08699 2.41452C8.19858 1.50912 6.99364 1.00047 5.73725 1.00047C4.48085 1.00047 3.27591 1.50912 2.38751 2.41452C1.4991 3.31992 1 4.5479 1 5.82833C1 7.10875 1.4991 8.33674 2.38751 9.24214L3.30029 10.1724L9.99977 17L16.6992 10.1724L17.612 9.24214C18.0521 8.79391 18.4011 8.26171 18.6393 7.67596C18.8774 7.0902 19 6.46237 19 5.82833C19 5.19428 18.8774 4.56645 18.6393 3.9807C18.4011 3.39494 18.0521 2.86275 17.612 2.41452Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    </a>
                                </div>
                                <div class="product-action-btn mb-6">
                                    <a href="#" class="icon-btn woosq-btn woosq-btn-896 " data-id="896" data-effect="mfp-3d-unfold">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.8887 1L14.9997 3.90909L11.8887 6.81818" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 8.27282V6.81827C1 6.04673 1.32777 5.30679 1.91121 4.76123C2.49464 4.21567 3.28595 3.90918 4.11106 3.90918H14.9998" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M4.11106 16.9998L1 14.0907L4.11106 11.1816" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14.9998 9.72705V11.1816C14.9998 11.9531 14.672 12.6931 14.0886 13.2386C13.5051 13.7842 12.7138 14.0907 11.8887 14.0907H1" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    </a>
                                </div>
                                <div class="product-action-btn">
                                    <a href="#" class="icon-btn woosq-btn woosq-btn-896 " data-id="896" data-effect="mfp-3d-unfold">
                                        <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9C1 9 5 1 12 1C19 1 23 9 23 9C23 9 19 17 12 17C5 17 1 9 1 9Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-action-btn-5">
                                <h5>Hot</h5>
                            </div>
                        </div>

                        <div class="rr-fea-product__content">
                            <div class="rr-fea-product__star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <h4 class="rr-fea-product__title-sm"><a href="shop.html">Promo Trucker Hat</a></h4>
                            <div class="rr-product-content-price">
                                <span class="product-item-3-price">
                                <span class="price">
                                    <span class="woocs_price_code d-flex gap-6"  >
                                        <del aria-hidden="true">
                                            <span class="woocommerce-price-amount amount">$270.50

                                            </span>
                                </del>
                                <span class="woocommerce-price-amount amount body-color">$230.50

                                        </span>
                                </span>
                                </span>
                                </span>
                            </div>
                            <div class="rr-fea-product__link-box">
                                <a href="#"  class="cart-button icon-btn button rr-btn-cart "  >
                                    <span></span>Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="rr-fea-product__item rr-pro-img mb-30">

                        <div class="rr-fea-product__thumb fix p-relative">
                            <img  src="assets/imgs/prodact/prodact-card-5.png"  alt="img not found">
                            <div class="rr-fea-product__thumb-text">
                                <span>-70%</span>
                            </div>

                            <div class="rr-fea-product__icon-box icon-box-3 rr-product-action">
                                <div class="product-action-btn mb-6">
                                    <a href="#" class="icon-btn woosq-btn woosq-btn-896 " data-id="896" data-effect="mfp-3d-unfold">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.612 2.41452C17.1722 1.96607 16.65 1.61034 16.0752 1.36763C15.5005 1.12492 14.8844 1 14.2623 1C13.6401 1 13.0241 1.12492 12.4493 1.36763C11.8746 1.61034 11.3524 1.96607 10.9126 2.41452L9.99977 3.34476L9.08699 2.41452C8.19858 1.50912 6.99364 1.00047 5.73725 1.00047C4.48085 1.00047 3.27591 1.50912 2.38751 2.41452C1.4991 3.31992 1 4.5479 1 5.82833C1 7.10875 1.4991 8.33674 2.38751 9.24214L3.30029 10.1724L9.99977 17L16.6992 10.1724L17.612 9.24214C18.0521 8.79391 18.4011 8.26171 18.6393 7.67596C18.8774 7.0902 19 6.46237 19 5.82833C19 5.19428 18.8774 4.56645 18.6393 3.9807C18.4011 3.39494 18.0521 2.86275 17.612 2.41452Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    </a>
                                </div>
                                <div class="product-action-btn mb-6">
                                    <a href="#" class="icon-btn woosq-btn woosq-btn-896 " data-id="896" data-effect="mfp-3d-unfold">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.8887 1L14.9997 3.90909L11.8887 6.81818" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 8.27282V6.81827C1 6.04673 1.32777 5.30679 1.91121 4.76123C2.49464 4.21567 3.28595 3.90918 4.11106 3.90918H14.9998" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M4.11106 16.9998L1 14.0907L4.11106 11.1816" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14.9998 9.72705V11.1816C14.9998 11.9531 14.672 12.6931 14.0886 13.2386C13.5051 13.7842 12.7138 14.0907 11.8887 14.0907H1" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    </a>
                                </div>
                                <div class="product-action-btn">
                                    <a href="#" class="icon-btn woosq-btn woosq-btn-896 " data-id="896" data-effect="mfp-3d-unfold">
                                        <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9C1 9 5 1 12 1C19 1 23 9 23 9C23 9 19 17 12 17C5 17 1 9 1 9Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-action-btn-5">
                                <h5>Hot</h5>
                            </div>
                        </div>

                        <div class="rr-fea-product__content">
                            <div class="rr-fea-product__star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <h4 class="rr-fea-product__title-sm"><a href="shop.html">Promo Trucker Hat</a></h4>
                            <div class="rr-product-content-price">
                                <span class="product-item-3-price">
                                <span class="price">
                                    <span class="woocs_price_code d-flex gap-6"  >
                                        <del aria-hidden="true">
                                            <span class="woocommerce-price-amount amount">$270.50

                                            </span>
                                </del>
                                <span class="woocommerce-price-amount amount body-color">$230.50

                                        </span>
                                </span>
                                </span>
                                </span>
                            </div>
                            <div class="rr-fea-product__link-box">
                                <a href="#"  class="cart-button icon-btn button rr-btn-cart "  >
                                    <span></span>Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="rr-fea-product__item rr-pro-img mb-30">

                        <div class="rr-fea-product__thumb fix p-relative">
                            <img  src="assets/imgs/prodact/prodact-card-8.png"  alt="img not found">
                            <div class="rr-fea-product__thumb-text">
                                <span>-70%</span>
                            </div>

                            <div class="rr-fea-product__icon-box icon-box-3 rr-product-action">
                                <div class="product-action-btn mb-6">
                                    <a href="#" class="icon-btn woosq-btn woosq-btn-896 " data-id="896" data-effect="mfp-3d-unfold">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.612 2.41452C17.1722 1.96607 16.65 1.61034 16.0752 1.36763C15.5005 1.12492 14.8844 1 14.2623 1C13.6401 1 13.0241 1.12492 12.4493 1.36763C11.8746 1.61034 11.3524 1.96607 10.9126 2.41452L9.99977 3.34476L9.08699 2.41452C8.19858 1.50912 6.99364 1.00047 5.73725 1.00047C4.48085 1.00047 3.27591 1.50912 2.38751 2.41452C1.4991 3.31992 1 4.5479 1 5.82833C1 7.10875 1.4991 8.33674 2.38751 9.24214L3.30029 10.1724L9.99977 17L16.6992 10.1724L17.612 9.24214C18.0521 8.79391 18.4011 8.26171 18.6393 7.67596C18.8774 7.0902 19 6.46237 19 5.82833C19 5.19428 18.8774 4.56645 18.6393 3.9807C18.4011 3.39494 18.0521 2.86275 17.612 2.41452Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    </a>
                                </div>
                                <div class="product-action-btn mb-6">
                                    <a href="#" class="icon-btn woosq-btn woosq-btn-896 " data-id="896" data-effect="mfp-3d-unfold">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.8887 1L14.9997 3.90909L11.8887 6.81818" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 8.27282V6.81827C1 6.04673 1.32777 5.30679 1.91121 4.76123C2.49464 4.21567 3.28595 3.90918 4.11106 3.90918H14.9998" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M4.11106 16.9998L1 14.0907L4.11106 11.1816" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14.9998 9.72705V11.1816C14.9998 11.9531 14.672 12.6931 14.0886 13.2386C13.5051 13.7842 12.7138 14.0907 11.8887 14.0907H1" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    </a>
                                </div>
                                <div class="product-action-btn">
                                    <a href="#" class="icon-btn woosq-btn woosq-btn-896 " data-id="896" data-effect="mfp-3d-unfold">
                                        <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9C1 9 5 1 12 1C19 1 23 9 23 9C23 9 19 17 12 17C5 17 1 9 1 9Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-action-btn-5">
                                <h5>Hot</h5>
                            </div>
                        </div>

                        <div class="rr-fea-product__content">
                            <div class="rr-fea-product__star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <h4 class="rr-fea-product__title-sm"><a href="shop.html">Promo Trucker Hat</a></h4>
                            <div class="rr-product-content-price">
                                <span class="product-item-3-price">
                                <span class="price">
                                    <span class="woocs_price_code d-flex gap-6"  >
                                        <del aria-hidden="true">
                                            <span class="woocommerce-price-amount amount">$270.50

                                            </span>
                                </del>
                                <span class="woocommerce-price-amount amount body-color">$230.50

                                        </span>
                                </span>
                                </span>
                                </span>
                            </div>
                            <div class="rr-fea-product__link-box">
                                <a href="#"  class="cart-button icon-btn button rr-btn-cart "  >
                                    <span></span>Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- best deal-area end -->
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const mainImage = document.getElementById("main-product-image");
        const galleryItems = document.querySelectorAll(".product-gallery-item img");

        galleryItems.forEach(item => {
            item.addEventListener("click", function() {
                const newSrc = this.src;
                mainImage.src = newSrc;
            });
        });
    });

</script>
@endpush
