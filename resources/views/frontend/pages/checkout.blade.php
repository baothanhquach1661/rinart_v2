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
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Checkout</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ url('/') }}">Home</a></span></li>
                                    <li class="active"><span>Checkout</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- coupon-area start -->
    <section class="coupon-area pt-100 pb-30">
        <div class="container container-small">
            <div class="row">
                <div class="col-md-6">
                    <div class="coupon-accordion">
                        <!-- ACCORDION START -->
                        <h3><span id="showlogin">Thêm địa chỉ giao hàng</span></h3>
                        <div id="checkout-login" class="coupon-content">
                            <div class="coupon-info">
                                <form method="POST" action="{{ route('user-shipping-address.update') }}">
                                    @csrf
                                    <p class="form-row-first">
                                        <label for="name">Họ Tên</label>
                                        <input type="text" id="name" name="full_name"
                                            value="{{ old('full_name') }}">
                                    </p>
                                    <p class="form-row-first">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" value="{{ old('email') }}">
                                    </p>
                                    <p class="form-row-first">
                                        <label for="phone">Số Điện Thoại</label>
                                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}">
                                    </p>

                                    <p class="form-row-first">
                                        <label for="name">Khu Vực</label>
                                        <select name="delivery_area">
                                            @foreach ($delivery_areas as $area)
                                                <option value="{{ $area->id }}">
                                                    {{ $area->area_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </p>

                                    <p class="order-notes">
                                        <label for="phone">Chi Tiết Địa Chỉ</label>
                                        <textarea name="address"></textarea>
                                    </p>

                                    <button class="rr-btn" type="submit">SAVE</button>
                                </form>
                            </div>
                        </div>
                        <!-- ACCORDION END -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="coupon-accordion">
                        <!-- ACCORDION START -->
                        <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                        <div id="checkout_coupon" class="coupon-checkout-content">
                            <div class="coupon-info">
                                <form action="" id="coupon_form" class="checkout-coupon">
                                    <div class="d-flex">
                                    <input name="coupon" value="{{ session()->has('coupon') ? session()->get('coupon')['code'] : '' }}"
                                            id="coupon_code" type="text" placeholder="Nhập mã coupon">
                                    @if(isset(session()->get('coupon')['code']))
                                    <a href="{{ route('checkout-coupon.remove') }}" style="margin-left: 5px; height: 60px;" class="rr-btn">Remove</a>
                                    @else
                                    <button type="submit" style="margin-left: 5px; height: 60px;"
                                        class="rr-btn">Submit</button>
                                    @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- ACCORDION END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- coupon-area end -->

    <!-- checkout-area start -->
    <section class="checkout-area pb-70">
        <div class="container container-small">
            <form action="#">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkbox-form">
                            <h3 class="mb-10">Thông Tin Giao Hàng</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="lan-select lan-select-6">
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <h6>Khu Vực:
                                                    <span id="address">
                                                        {{ @$shipping_address->deliveryArea?->area_name }}
                                                    </span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Họ Tên<span class="required">*</span></label>
                                        <input type="text" value="{{ $shipping_address?->full_name }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Tên Công Ty</label>
                                        <input type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input type="email" value="{{ $shipping_address?->email }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" value="{{ $shipping_address?->phone }}">
                                    </div>
                                </div>
                                <div class="col-md-12 order-notes">
                                    <div class="checkout-form-list">
                                        <label>Địa Chỉ<span class="required">*</span></label>
                                        <textarea rows="5" type="text">
                                        {{ trim($shipping_address?->address) }}
                                    </textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="your-order mb-30 ">
                            <h3>Đơn Hàng</h3>
                            <div class="your-order-table table-responsive">
                                <table>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Tổng Cộng</th>
                                            <td><span class="amount">{{ currencyPosition(cartTotal()) }}</span></td>
                                        </tr>
                                        @if(session()->has('coupon'))
                                        <tr class="cart-subtotal">
                                            <th>
                                                Mã Giảm Giá
                                                <span class="coupon-code">
                                                    {{ session()->get('coupon')['code'] }}
                                                </span>
                                            </th>
                                            <td>
                                                <span class="amount">
                                                    {{ "-".currencyPosition(session()->get('coupon')['discount']) }}
                                                </span>
                                            </td>
                                        </tr>
                                        @endif
                                        <tr class="shipping">
                                            <th>Phí Vận Chuyển</th>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <label>
                                                            <span class="amount">
                                                                {{ currencyPosition($shipping_address?->deliveryArea?->delivery_fee) }}
                                                            </span>
                                                        </label>
                                                    </li>
                                                    <li></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Tổng Thanh Toán</th>
                                            <td><strong><span class="amount">{{ currencyPosition($checkoutGrandTotal) }}</span></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="payment-method">
                                <div class="accordion" id="checkoutAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="checkoutOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne">
                                                Chuyển Khoản
                                            </button>
                                        </h2>
                                        <div id="bankOne" class="accordion-collapse collapse"
                                            aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                            <div class="accordion-body">
                                                Make your payment directly into our bank account. Please use your Order ID
                                                as the payment reference. Your order won’t be shipped until the funds have
                                                cleared in our account.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="paymentTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#payment" aria-expanded="false"
                                                aria-controls="payment">
                                                Thanh Toán Khi Nhận Hàng
                                            </button>
                                        </h2>
                                        <div id="payment" class="accordion-collapse collapse"
                                            aria-labelledby="paymentTwo" data-bs-parent="#checkoutAccordion">
                                            <div class="accordion-body">
                                                Please send your cheque to Store Name, Store Street, Store Town, Store State
                                                / County, Store Postcode.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="paypalThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false"
                                                aria-controls="paypal">
                                                Thanh Toán Trực Tuyến
                                            </button>
                                        </h2>
                                        <div id="paypal" class="accordion-collapse collapse"
                                            aria-labelledby="paypalThree" data-bs-parent="#checkoutAccordion">
                                            <div class="accordion-body">
                                                Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                                account.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment mt-20">
                                    <a href="#" class="rr-btn">Trở về giỏ hàng</a>
                                    <button type="submit" class="rr-btn">Tạo Đơn Hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- checkout-area end -->
@endsection

@push('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function(){
            var cartTotal = parseInt("{{ cartTotal() }}");


            $('#coupon_form').on('submit', function(){
                let code = $("#coupon_code").val();
                let subtotal = cartTotal;

                couponApply(code, subtotal);
            })


            /* Apply Coupon */
            function couponApply(code, subtotal){
                $.ajax({
                    method: 'POST',
                    url: '{{ route("coupon.apply") }}',
                    data: {
                        code: code,
                        subtotal: subtotal
                    },
                    success: function(response){
                        $('#discount').text("-"+response.discount);
                        $('#total').text(response.totalAmount);
                        toastr.success(response.success);
                    },
                    error: function(xhr, status, error){
                        let errorMessage = xhr.responseJSON.message;
                        toastr.error(errorMessage);
                    }
                })
            }


        })
    </script>
@endpush
