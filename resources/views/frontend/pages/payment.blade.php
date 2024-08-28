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


    <!-- checkout-area start -->
    <section class="checkout-area pt-100 pb-70">
        <div class="container container-small">
            <div class="row">
                <div class="col-lg-6">
                    <div class="checkbox-form">
                        <h3 class="mb-10">Phương Thức Thanh Toán</h3>
                        <div class="payment-method">
                            <div class="accordion" id="checkoutAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header d-flex align-items-center" id="checkoutOne">
                                        {{-- <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked" data-order_button_text=""> --}}
                                        <button class="accordion-button flex-grow-1" type="button" data-bs-toggle="collapse" data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne">
                                            Chuyển Khoản
                                        </button>
                                    </h2>
                                    <div id="bankOne" class="accordion-collapse collapse show" aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                        <div class="accordion-body text-center">
                                            <div class="wc_payment_method payment_method_bacs payment-selected">
                                                <div class="payment_box payment_method_bacs">
                                                    <div class="text-center">
                                                        <img src="{{ asset('frontend/assets/imgs/qr_code_example.svg') }}" class="img-qr-css" alt="VietQr">
                                                    </div>
                                                    <p class="content-ck">
                                                        Nội dung chuyển khoản: <a class="transfer-code">TGIA326270</a><br>
                                                    </p>
                                                    <p class="note-text"><strong class="text-danger">Lưu ý: </strong><i>Sau khi chuyển khoản sẽ mất 1 - 5p để hệ thống tự động cập nhật đơn hàng. Vui lòng load lại trang để cập nhật hoặc trang sẽ tự động load lại. Xin cảm ơn.</i></p>
                                                </div>
                                                <div class="order-button-payment mt-20">
                                                    <button type="button" id="transfer_method" class="rr-btn">Hoàn Tất</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header d-flex align-items-center" id="paymentThree">
                                        {{-- <input type="radio" class="input-radio" name="payment_method" data-name="paypal" data-order_button_text=""> --}}
                                        <button class="accordion-button collapsed flex-grow-1" type="button" data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">
                                            Paypal
                                        </button>
                                    </h2>
                                    <div id="paypal" class="accordion-collapse collapse" aria-labelledby="paymentThree" data-bs-parent="#checkoutAccordion">
                                        <div class="accordion-body">
                                            <div class="payment-options">
                                                <a href="javascript:;" id="payment-card" data-name="paypal">
                                                    <div class="payment-card">
                                                        <img src="{{ asset('frontend/assets/imgs/paypal.png') }}" alt="paypal">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header d-flex align-items-center" id="paymentTwo">
                                        {{-- <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" data-order_button_text=""> --}}
                                        <button class="accordion-button collapsed flex-grow-1" type="button" data-bs-toggle="collapse" data-bs-target="#payment" aria-expanded="false" aria-controls="payment">
                                            Thanh Toán Bằng Thẻ
                                        </button>
                                    </h2>
                                    <div id="payment" class="accordion-collapse collapse" aria-labelledby="paymentTwo" data-bs-parent="#checkoutAccordion">
                                        <div class="accordion-body">
                                            <div class="payment-options">
                                                <div class="payment-card">
                                                    <img src="{{ asset('frontend/assets/imgs/visa.png') }}" alt="Visa">
                                                </div>
                                                <div class="payment-card">
                                                    <img src="{{ asset('frontend/assets/imgs/master.png') }}" alt="MasterCard">
                                                </div>
                                                <div class="payment-card">
                                                    <img src="{{ asset('frontend/assets/imgs/jcb.png') }}" alt="JCB">
                                                </div>
                                                <div class="payment-card">
                                                    <img src="{{ asset('frontend/assets/imgs/ame.png') }}" alt="American Express">
                                                </div>
                                                <div class="payment-card">
                                                    <img src="{{ asset('frontend/assets/imgs/union.png') }}" alt="UnionPay">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="your-order">
                        <h3>Đơn Hàng</h3>
                        <div class="your-order-table table-responsive">
                            <table>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Tổng Cộng</th>
                                        <td><span class="amount">{{ currencyPosition(cartTotal()) }}</span></td>
                                    </tr>
                                    @if (session()->has('coupon'))
                                        <tr class="cart-subtotal">
                                            <th>
                                                Mã Giảm Giá
                                                <span class="coupon-code">
                                                    {{ session()->get('coupon')['code'] }}
                                                </span>
                                            </th>
                                            <td>
                                                <span class="amount">
                                                    {{ '-' . currencyPosition(session()->get('coupon')['discount']) }}
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
                                                            {{ currencyPosition($delivery) }}
                                                        </span>
                                                    </label>
                                                </li>
                                                <li></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Tổng Thanh Toán</th>
                                        <td><strong><span
                                                    class="amount">{{ currencyPosition($grandtotal) }}</span></strong>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        {{-- <td>
                                            <div class="order-button-payment mt-20">
                                                <button type="button" id="procceed_payment_btn" class="rr-btn">Hoàn Tất</button>
                                            </div>
                                        </td> --}}
                                    </tr>
                                </tfoot>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
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

        $(document).ready(function() {
            var cartTotal = parseInt("{{ cartTotal() }}");


            $('#coupon_form').on('submit', function() {
                let code = $("#coupon_code").val();
                let subtotal = cartTotal;

                couponApply(code, subtotal);
            })


            /* Apply Coupon */
            function couponApply(code, subtotal) {
                $.ajax({
                    method: 'POST',
                    url: '{{ route('coupon.apply') }}',
                    data: {
                        code: code,
                        subtotal: subtotal
                    },
                    success: function(response) {
                        $('#discount').text("-" + response.discount);
                        $('#total').text(response.totalAmount);
                        toastr.success(response.success);
                    },
                    error: function(xhr, status, error) {
                        let errorMessage = xhr.responseJSON.message;
                        toastr.error(errorMessage);
                    }
                })
            }

            /* Paypal payment method*/
            $('#payment-card').on('click', function(){
                let paymentPaypal = $(this).data('name');

                $.ajax({
                    method: 'POST',
                    url: '{{ route('make-paypal.payment') }}',
                    data: {
                        paymentPaypal: paymentPaypal
                    },
                    success: function(response){
                        window.location.href = response.redirect_url;
                    },
                    error: function(xhr, status, error){
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(index, value){
                            toastr.error(value);
                        });
                    },
                    complete: function(){
                        hideLoader();
                    }
                })
            });

            $('#transfer_method').on('click', function(){
                $.ajax({
                    method: 'POST',
                    url: '{{ route('make-bank-transfer.payment') }}',
                    success: function(response){
                        window.location.href = response.redirect_url;
                    },
                    error: function(xhr, status, error){
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(index, value){
                            toastr.error(value);
                        });
                    }
                });
            });
        })
    </script>
@endpush
