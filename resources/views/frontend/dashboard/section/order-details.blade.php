<div class="modal-body custom-modal-body">
    <!-- Customer Information -->
    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable">
        <tr>
            <td>
                <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                    <tbody>
                        <tr>
                            <td>
                                <strong>Họ Tên:</strong> {{ $order->user->name }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Khu Vực:</strong> {{ $order->deliveryArea->area_name ?? 'N/A' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Địa Chỉ Giao Hàng:</strong> {{ $order->userAddress->address ?? 'N/A' }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <!-- /Customer Information -->

    <!-- Order Items -->
    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable">
        <tbody>
            <tr>
                <td>
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                        <tbody>
                            <tr>
                                <th>
                                    Sản phẩm
                                </th>
                                <th>
                                    Giá
                                </th>
                                <th>
                                    Số lượng
                                </th>
                                <th>
                                    Tổng
                                </th>
                            </tr>
                            @foreach($order->orderItems as $orderItem)
                            @php
                                $variants = json_decode($orderItem->product_variants, true);

                                // Initialize variables
                                $unitPrice = $orderItem->product_price;
                                $qty = $orderItem->quantity;
                                $variantPrice = 0;

                                // Calculate variant prices if available
                                if (is_array($variants) && count($variants) > 0) {
                                    foreach($variants as $variantItem){
                                        $variantPrice += $variantItem['price'];
                                    }
                                }

                                // Calculate the total product price
                                $productTotal = ($unitPrice + $variantPrice) * $qty;
                            @endphp
                            <tr>
                                <td class="article">
                                    {{ $orderItem->product_name }}
                                    @if(is_array($variants) && count($variants) > 0)
                                        @foreach($variants as $variant)
                                            ({{ $variant['variant_name'] }} + {{ currencyPosition($variant['price']) }})<br>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    {{ currencyPosition($orderItem->product_price) }}
                                </td>
                                <td>
                                    {{ $orderItem->quantity }}
                                </td>
                                <td>
                                    {{ currencyPosition($productTotal) }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- /Order Items -->

    <!-- Order Totals -->
    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable">
        <tbody>
            <tr>
                <td>
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                        <tbody>
                            <tr>
                                <td>
                                    Subtotal
                                </td>
                                <td>
                                    {{ currencyPosition($order->subtotal) }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Shipping &amp; Handling
                                </td>
                                <td>
                                    {{ currencyPosition($order->delivery_charge) }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Tổng Cộng</strong>
                                </td>
                                <td>
                                    <strong>{{ currencyPosition($order->grandtotal) }}</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- /Order Totals -->
</div>
