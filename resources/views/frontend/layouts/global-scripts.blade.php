<script>
    function showLoader(){
        $('.overlay-container').removeClass('d-none');
        $('.overlay').addClass('active');
    }

    function hideLoader(){
        $('.overlay-container').removeClass('active');
        $('.overlay').addClass('d-none');
    }

    function loadProductModal(productId) {
        $.ajax({
            method: 'GET',
            url: '{{ route('load-product-modal', ':productId') }}'.replace(':productId', productId),
            beforeSend: function() {
                $('.overlay-container').removeClass('d-none');
                $('.overlay').addClass('active');
            },
            success: function(response) {
                $(".load_product_modal_body").html(response);
                $('#cartModal').modal('show');
            },
            error: function(xhr, status, error) {
                console.error(error);
            },
            complete: function() {
                $('.overlay').removeClass('active');
                $('.overlay-container').addClass('d-none');
            }
        })
    }

    function formatPrice(price) {
        return price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    function currencyPosition(price) {
        const formattedPrice = formatPrice(price);

        // Assuming you have access to currency position and symbol via a JavaScript variable
        const currencyPosition = 'right'; // 'left' or 'right', adjust this accordingly
        const currencySymbol = '₫'; // Adjust this accordingly

        if (currencyPosition === 'left') {
            return currencySymbol + formattedPrice;
        } else {
            return formattedPrice + currencySymbol;
        }
    }

    /* get current cart total */
    function getCartTotal(){
        return parseInt("{{ cartTotal() }}");
    }



</script>
