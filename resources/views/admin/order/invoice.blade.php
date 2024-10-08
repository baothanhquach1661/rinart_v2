<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Order confirmation </title>
<meta name="robots" content="noindex,nofollow" />
<meta name="viewport" content="width=device-width; initial-scale=1.0;" />
<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

    body {
        margin: 0;
        padding: 0;
        background: #e1e1e1;
    }

    div,
    p,
    a,
    li,
    td {
        -webkit-text-size-adjust: none;
    }

    .ReadMsgBody {
        width: 100%;
        background-color: #ffffff;
    }

    .ExternalClass {
        width: 100%;
        background-color: #ffffff;
    }

    body {
        width: 100%;
        height: 100%;
        background-color: #e1e1e1;
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
    }

    html {
        width: 100%;
    }

    p {
        padding: 0 !important;
        margin-top: 0 !important;
        margin-right: 0 !important;
        margin-bottom: 0 !important;
        margin-left: 0 !important;
    }

    .visibleMobile {
        display: none;
    }

    .hiddenMobile {
        display: block;
    }

    @media only screen and (max-width: 600px) {
        body {
            width: auto !important;
        }

        table[class=fullTable] {
            width: 96% !important;
            clear: both;
        }

        table[class=fullPadding] {
            width: 85% !important;
            clear: both;
        }

        table[class=col] {
            width: 45% !important;
        }

        .erase {
            display: none;
        }
    }

    @media only screen and (max-width: 420px) {
        table[class=fullTable] {
            width: 100% !important;
            clear: both;
        }

        table[class=fullPadding] {
            width: 85% !important;
            clear: both;
        }

        table[class=col] {
            width: 100% !important;
            clear: both;
        }

        table[class=col] td {
            text-align: left !important;
        }

        .erase {
            display: none;
            font-size: 0;
            max-height: 0;
            line-height: 0;
            padding: 0;
        }

        .visibleMobile {
            display: block !important;
        }

        .hiddenMobile {
            display: none !important;
        }
    }
</style>


<!-- Header -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
    <tr>
        <td height="20"></td>
    </tr>
    <tr>
        <td>
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable"
                bgcolor="#ffffff" style="border-radius: 10px 10px 0 0;">
                <tr class="hiddenMobile">
                    <td height="40"></td>
                </tr>
                <tr class="visibleMobile">
                    <td height="30"></td>
                </tr>

                <tr>
                    <td>
                        <table width="480" border="0" cellpadding="0" cellspacing="0" align="center"
                            class="fullPadding">
                            <tbody>
                                <tr>
                                    <td>
                                        <table width="220" border="0" cellpadding="0" cellspacing="0"
                                            align="left" class="col">
                                            <tbody>
                                                <tr>
                                                    <td align="left">
                                                        <img
                                                            src="http://www.supah.it/dribbble/017/logo.png"
                                                            width="32" height="32" alt="logo"
                                                            border="0" />
                                                    </td>
                                                </tr>
                                                <tr class="hiddenMobile">
                                                    <td height="40"></td>
                                                </tr>
                                                <tr class="visibleMobile">
                                                    <td height="20"></td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                                                        Hi {{ $order->user->name }},
                                                        <br> Thank you for shopping with us.
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table width="220" border="0" cellpadding="0" cellspacing="0"
                                            align="right" class="col">
                                            <tbody>
                                                <tr class="visibleMobile">
                                                    <td height="20"></td>
                                                </tr>
                                                <tr>
                                                    <td height="5"></td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="font-size: 21px; color: #252323; letter-spacing: -1px; font-family: 'Open Sans', sans-serif; line-height: 1; vertical-align: top; text-align: right;">
                                                        Invoice
                                                    </td>
                                                </tr>
                                                <tr>
                                                <tr class="hiddenMobile">
                                                    <td height="50"></td>
                                                </tr>
                                                <tr class="visibleMobile">
                                                    <td height="20"></td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">
                                                        <small>ORDER</small> #{{ $order->invoice_id }}<br />
                                                        <small>{{ $order->created_at->format('d-m-Y') }}</small>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- /Header -->
<!-- Order Details -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
    <tbody>
        <tr>
            <td>
                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable"
                    bgcolor="#ffffff">
                    <tbody>
                        <tr>
                        <tr class="hiddenMobile">
                            <td height="60"></td>
                        </tr>
                        <tr class="visibleMobile">
                            <td height="40"></td>
                        </tr>
                        <tr>
                            <td>
                                <table width="480" border="0" cellpadding="0" cellspacing="0" align="center"
                                    class="fullPadding">
                                    <tbody>
                                        <tr>
                                            <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 10px 7px 0;"
                                                width="52%" align="left">
                                                Sản phẩm
                                            </th>
                                            <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;"
                                                align="right">
                                                Giá
                                            </th>
                                            <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;"
                                                align="center">
                                                Số lượng
                                            </th>
                                            <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;"
                                                align="center">
                                                Tổng
                                            </th>
                                        </tr>
                                        <tr>
                                            <td height="1" style="background: #bebebe;" colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td height="10" colspan="4"></td>
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
                                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #ff0000;  line-height: 18px;  vertical-align: top; padding:10px 0;"
                                                class="article">
                                                {{ $orderItem->product_name }}
                                                @if(is_array($variants) && count($variants) > 0)
                                                    @foreach($variants as $variant)
                                                        ({{ $variant['variant_name'] }} + {{ currencyPosition($variant['price']) }})<br>
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:10px 0;"
                                                align="right">{{ currencyPosition($orderItem->product_price) }}
                                            </td>
                                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;"
                                                align="center">{{ $orderItem->quantity }}
                                            </td>
                                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;"
                                                align="center">{{ currencyPosition($productTotal) }}
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="20"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<!-- /Order Details -->
<!-- Total -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable"
    bgcolor="#e1e1e1">
    <tbody>
        <tr>
            <td>
                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center"
                    class="fullTable" bgcolor="#ffffff">
                    <tbody>
                        <tr>
                            <td>

                                <!-- Table Total -->
                                <table width="480" border="0" cellpadding="0" cellspacing="0" align="center"
                                    class="fullPadding">
                                    <tbody>
                                        <tr>
                                            <td
                                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                                                Subtotal
                                            </td>
                                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; white-space:nowrap;"
                                                width="80">
                                                {{ currencyPosition($order->subtotal) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                                                Shipping &amp; Handling
                                            </td>
                                            <td
                                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                                                {{ currencyPosition($order->delivery_charge) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                                                <strong>Tổng Cộng</strong>
                                            </td>
                                            <td
                                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                                                <strong>{{ currencyPosition($order->grandtotal) }}</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- /Table Total -->

                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<!-- /Total -->
<!-- Information -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable"
    bgcolor="#e1e1e1">
    <tbody>
        <tr>
            <td>
                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center"
                    class="fullTable" bgcolor="#ffffff">
                    <tbody>
                        <tr>
                        <tr class="hiddenMobile">
                            <td height="60"></td>
                        </tr>
                        <tr class="visibleMobile">
                            <td height="40"></td>
                        </tr>
                        <tr>
                            <td>
                                <table width="480" border="0" cellpadding="0" cellspacing="0" align="center"
                                    class="fullPadding">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <table width="250" border="0" cellpadding="0" cellspacing="0"
                                                    align="left" class="col">
                                                    <tbody>
                                                        <tr class="hiddenMobile">
                                                            <td height="35"></td>
                                                        </tr>
                                                        <tr class="visibleMobile">
                                                            <td height="20"></td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                                                <strong>Thông Tin Giao Hàng</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="100%" height="10"></td>
                                                        </tr>
                                                        <tr>
                                                            @php
                                                                $address = @$order->address;
                                                                // Split the address by comma
                                                                $addressParts = explode(',', $address);
                                                                // Trim to remove any extra spaces
                                                                $firstPart = trim($addressParts[0]); // e.g., "14510 Amar Rd"
                                                                $secondPart = trim($addressParts[1]); // e.g., "Khu Vực: TP.HCM"
                                                            @endphp
                                                            <td
                                                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                                                {{ $secondPart }} <br> Địa Chỉ: {{ $firstPart }}.
                                                            </td>
                                                        <tr>
                                                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                                                SĐT: {{ $order->userAddress->phone }}
                                                            </td>
                                                        </tr>
                                                        </tr>
                                                        <tr>
                                                            <td width="100%" height="15"></td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                                                <strong>Phương Thức Thanh Toán</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="100%" height="10"></td>
                                                        </tr>
                                                        <tr>
                                                            @if($order->payment_method === 'Paypal')
                                                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b;
                                                                line-height: 20px; vertical-align: top; ">
                                                                Paypal: Visa/Master Card
                                                                <br> Transaction Id: {{ $order->transaction_id }}
                                                            </td>
                                                            @elseif($order->payment_method === 'bank-transfer')
                                                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b;
                                                                line-height: 20px; vertical-align: top; ">
                                                                Chuyển Khoản Ngân Hàng
                                                            </td>
                                                            @endif
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table width="220" border="0" cellpadding="0" cellspacing="0"
                                                    align="right" class="col">
                                                    <tbody>
                                                        <tr class="hiddenMobile">
                                                            <td height="35"></td>
                                                        </tr>
                                                        <tr class="visibleMobile">
                                                            <td height="20"></td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                                                <strong>Phương Thức Vận Chuyển</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="100%" height="10"></td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                                                Dự Kiến: {{ $order->deliveryArea->min_delivery_time }} - {{ $order->deliveryArea->max_delivery_time }}
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr class="hiddenMobile">
                            <td height="60"></td>
                        </tr>
                        <tr class="visibleMobile">
                            <td height="30"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<!-- /Information -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable"
    bgcolor="#e1e1e1">

    <tr>
        <td>
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable"
                bgcolor="#ffffff" style="border-radius: 0 0 10px 10px;">
                <tr>
                    <td>
                        <table width="480" border="0" cellpadding="0" cellspacing="0" align="center"
                            class="fullPadding">
                            <tbody>
                                <tr>
                                    <td
                                        style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                                        Have a nice day.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="spacer">
                    <td height="50"></td>
                </tr>

            </table>
        </td>
    </tr>
    <tr>
        <td height="20"></td>
    </tr>
</table>
