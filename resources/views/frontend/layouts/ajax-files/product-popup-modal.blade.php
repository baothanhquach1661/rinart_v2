<form action="" method="" id="modal_add_to_cart">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <div class="fp__cart_popup_img">
        <img src="{{ asset($product->thumb_image) }}" alt="{{ $product->name }}" class="img-fluid product-image-popup">
    </div>
    <div class="fp__cart_popup_text mt-2 p-2">
        <a href="{{ route('product.show', $product->slug) }}" class="title title-popup">{!! $product->name !!}</a>
        <h4 class="price price-popup">
            @if ($product->discount_price > 0)
                <input type="hidden" name="base_price" value="{{ $product->discount_price }}">
                {{ currencyPosition($product->discount_price) }}
                <del>{{ currencyPosition($product->price) }}</del>
            @else
                <input type="hidden" name="base_price" value="{{ $product->price }}">
                {{ currencyPosition($product->price) }}
            @endif
        </h4>

        @if ($product->variants()->exists())
        <div class="details_size details_size-popup">
            <h5>select size</h5>
            @foreach($product->variants as $variants)
            <label for="variant-{{ $variants->id }}">{{ $variants->name }}</label>
            <select name="variant[{{ $variants->id }}]" id="variant-{{ $variants->id }}">
                <option value="">Select {{ $variants->name }}</option>
                @foreach($variants->variantItems as $variantItem)
                    <option value="{{ $variantItem->id }}" data-price="{{ $variantItem->price }}">
                        {{ $variantItem->name }} (+ {{ $variantItem->price }})
                    </option>
                @endforeach
            </select>
            @endforeach
        </div>
        @endif

        <div class="details_quentity details_quantity-popup">
            <h5>select quantity</h5>
            <div class="quentity_btn_area quantity_btn_area d-flex flex-wrapa align-items-center">
                <div class="quentity_btn quantity_btn">
                    <button class="btn btn-danger decrement"><i class="fal fa-minus"></i></button>
                    <input type="text" id="quantity" name="quantity" placeholder="1" value="1" readonly>
                    <button class="btn btn-success increment"><i class="fal fa-plus"></i></button>
                </div>

                @if($product->discount_price > 0)
                    <h3 id="total_price" class="total-price-popup">{{ currencyPosition($product->discount_price) }}</h3>
                @else
                    <h3 id="total_price" class="total-price-popup">{{ currencyPosition($product->price) }}</h3>
                @endif

            </div>
        </div>
        <ul class="details_button_area details_button_area-popup d-flex flex-wrap">
            @if($product->quantity === 0)
                <li><button type="button" class="common_btn bg-danger">Out of Stock</button></li>
            @else
                <button type="submit" class="common_btn modal_cart_button">add to cart</button>
            @endif
        </ul>
    </div>
</form>

<script>
    $(document).ready(function(){
        $('select[name^="variant"]').on('change', function(){
            updateTotalPrice();
        });

        $('.increment').on('click', function(e){
            e.preventDefault();
            let quantity = $('#quantity');
            let currentQuantity = parseFloat(quantity.val());
            quantity.val(currentQuantity + 1);
            updateTotalPrice();
        });

        $('.decrement').on('click', function(e){
            e.preventDefault();
            let quantity = $('#quantity');
            let currentQuantity = parseFloat(quantity.val());
            if(currentQuantity > 1){
                quantity.val(currentQuantity - 1);
                updateTotalPrice();
            }
        });

        function updateTotalPrice() {
            let basePrice = parseFloat($('input[name="base_price"]').val());
            let selectedVariantPrice = 0;
            let quantity = parseFloat($('#quantity').val());

            // Loop through each variant select and add the price if a variant is selected
            $('select[name^="variant"]').each(function() {
                let selectedOption = $(this).find('option:selected');
                if(selectedOption.length > 0 && selectedOption.val() !== "") {
                    selectedVariantPrice += parseFloat(selectedOption.data("price")) || 0;
                }
            });

            // calculate the total price
            let totalPrice = (basePrice + selectedVariantPrice) * quantity

            $('#total_price').text(currencyPosition(totalPrice));

        }

        // add to cart function
        $("#modal_add_to_cart").on('submit', function(e) {
            e.preventDefault();

            // Validation: Ensure all variants are selected
            let allVariantsSelected = true;
            $('select[name^="variant"]').each(function() {
                if ($(this).val() === "") {
                    allVariantsSelected = false;
                }
            });

            if (!allVariantsSelected) {
                toastr.error('Please select all options');
                return;
            }

            let formData = $(this).serialize();
            $.ajax({
                method: 'POST',
                url: '{{ route("add-to-cart") }}',
                data: formData,
                beforeSend: function() {
                    $('.modal_cart_button').attr('disabled', true).html(`
                        <span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>
                        <span class='sr-only'>Loading...</span>
                    `);
                },
                success: function(response) {
                    toastr.success(response.message);
                },
                error: function(xhr, status, error) {
                    let errorMessage = xhr.responseJSON ? xhr.responseJSON.message : 'An error occurred';
                    toastr.error(errorMessage);
                },
                complete: function() {
                    $('.modal_cart_button').html(`Add To Cart`).attr('disabled', false);
                }
            });
        });


    });
</script>
