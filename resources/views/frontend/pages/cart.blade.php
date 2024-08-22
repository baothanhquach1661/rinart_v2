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
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Cart</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ url('/') }}">Home</a></span></li>
                                    <li class="active"><span>Cart</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--cart start-->
    <section class="cart-area pt-120 pb-120">
        <div class="container container-small">
            <div class="row">
            <div class="col-12">
                <div class="table-content">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="product-remove"></th>
                            <th class="cart-product-name">Sản phẩm</th>
                            <th class="product-price"> Giá</th>
                            <th class="product-quantity">Số lượng</th>
                            <th class="product-subtotal">Tổng </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach (Cart::content() as $product)
                            <tr>
                                <td class="product-remove">
                                    <a href="#" class="remove_cart_product" data-id="{{ $product->rowId }}">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 1L1 9" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 1L9 9" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="{{ route('product.show', @$product->options->product_info['slug']) }}">
                                        <img src="{{ @$product->options->product_info['image'] }}"
                                            alt="img">
                                    </a>
                                    <div class="product-thumbnail__wrapper">
                                        <div class="product-name">{{ $product->name }}</div>
                                        <span class="product-size">
                                            @if(isset($product->options['product_option']))
                                                <ul>
                                                    @foreach ($product->options['product_option'] as $option)
                                                        @php
                                                            $variantItem = \App\Models\ProductVariantItem::find($option['id']);
                                                        @endphp
                                                        @if ($variantItem)
                                                            <li>{{ $variantItem->name }}
                                                                @if($variantItem->price)
                                                                    (+{{ currencyPosition($variantItem->price) }})
                                                                @endif
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </span>
                                    </div>
                                </td>

                                <td class="product-price">
                                    <span class="amount amount-2">{{ currencyPosition($product->price) }}</span>
                                </td>

                                <td class="product-quantity text-center">
                                    <div class="quantity__group">
                                        <span class="quantity-control minus decrement"><i class="far fa-minus"></i></span>
                                        <input type="text" class="quantity" data-id="{{ $product->rowId }}"
                                                    value="{{ $product->qty }}" readonly style="margin-left: 0!important;border-bottom:0px!important;">
                                        <span class="quantity-control plus increment"><i class="far fa-plus"></i></span>
                                    </div>
                                </td>
                                <td class="product-subtotal"><span class="amount">{{ productTotal($product->rowId) }}</span></td>
                            </tr>
                            @endforeach
                            @if(Cart::content()->count() === 0)
                            <tr>
                                <td colspan="6" class="text-center">
                                    Giỏ hàng của bạn đang trống!
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-xl-7 col-lg-6 col-md-6">
                        <div class="text mt-30">
                            <form action="" id="coupon_form">
                                <div class="form_input d-flex mb-sm-30 mb-xs-30">
                                    <input name="coupon" value="{{ session()->has('coupon') ? session()->get('coupon')['code'] : '' }}"
                                        id="coupon_code" type="text" placeholder="Nhập mã coupon">
                                    @if(isset(session()->get('coupon')['code']))
                                    <a href="{{ route('coupon.remove') }}" class="rr-btn">Remove Coupon</a>
                                    @else
                                    <button type="submit" class="rr-btn">Submit</button>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="box">
                            <h4 class="title mb-20">Order Summary</h4>
                            <div class="box-wrapper">
                                <div class="middel-box d-flex justify-content-between ">
                                    <span>Subtotal</span>
                                    <h6 id="subtotal">{{ currencyPosition(cartTotal()) }}</h6>
                                </div>
                                <div class="middel-box d-flex justify-content-between ">
                                    <span>Discount</span>
                                    @if(isset(session()->get('coupon')['discount']))
                                    <h6 id="discount">{{ "-".currencyPosition(session()->get('coupon')['discount']) }}</h6>
                                    @else
                                    0
                                    @endif
                                </div>
                                <div class="middel-box d-flex justify-content-between">
                                    <span>Shipping</span>
                                    <h6>Free</h6>
                                </div>
                            </div>

                            <div class="bottom-title d-flex justify-content-between mb-40 mt-20">
                                <h5>Total</h5>
                                <h5 id="total">
                                    @if(isset(session()->get('coupon')['discount']))
                                    {{ currencyPosition(cartTotal() - session()->get('coupon')['discount']) }}
                                    @else
                                    {{ currencyPosition(cartTotal()) }}
                                    @endif
                                </h5>
                            </div>
                            <div class="bottom-btn d-flex">
                                <a href="#">Keep Shopping</a>
                                <a href="{{ route('checkout.index') }}">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!--cart end-->
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

            $('.increment, .decrement').off('click').on('click', function(){
                let quantity = $(this).siblings(".quantity");
                let currentQuantity = parseInt(quantity.val());

                let rowId = quantity.data('id');
                quantity.val($(this).hasClass('increment') ? currentQuantity + 1 : currentQuantity - 1);

                cartQtyUpdate(rowId, quantity.val(), function(response){
                    let productTotal = response.product_total;
                    quantity.closest("tr")
                        .find(".product-subtotal .amount")
                        .text(productTotal); // Directly update with the returned total

                    $('#subtotal').text(response.cart_total);
                    $('#total').text(response.grand_cart_total);

                    if (response.discount) {
                        $('#discount').text("-" + response.discount);
                    }
                });
            });

        function cartQtyUpdate(rowId, qty, callback){
            $.ajax({
                method: 'post',
                url: '{{ route("cart.update.qty") }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    'rowId': rowId,
                    'qty': qty
                },
                success: function(response){
                    if(callback && typeof callback === 'function'){
                        callback(response);
                    }
                },
                error: function(xhr, status, error){
                    let errorMessage = xhr.responseJSON.message;
                    toastr.error(errorMessage);
                }
            });
        }

            $(document).on('click', '.remove_cart_product', function(e) {
                e.preventDefault();
                let rowId = $(this).data('id');
                removeCartProduct(rowId);
                $(this).closest('tr').remove();
            });


            function removeCartProduct(rowId){
                $.ajax({
                    method: 'get',
                    url: '{{ route("cart.product.remove", ":rowId") }}'.replace(":rowId", rowId),
                    success: function(response){
                        // Handle the success response, e.g., updating the cart total, showing a message, etc.
                        cartTotal = response.cart_total;
                        $('#subtotal').text(currencyPosition(cartTotal));
                        $('#total').text(response.grand_cart_total);
                        toastr.success("Product removed successfully.");
                    },
                    error: function(xhr, status, error){
                        let errorMessage = xhr.responseJSON.message;
                        toastr.error(errorMessage);
                    },
                });
            }


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
