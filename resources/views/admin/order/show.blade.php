@extends('admin.layouts.master')

@section('content')
<div class="side-app">
    <div class="main-container container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <h1 class="mt-4 mb-4">Order Details</h1>

                <!-- Order Information and Form Row -->
                <div class="row">
                    <!-- Order Information -->
                    <div class="col-md-8">
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">
                                <h4>Order #{{ $order->invoice_id }}</h4>
                            </div>
                            <div class="card-body">
                                <p><strong>Customer Name:</strong> {{ $order->user->name }}</p>
                                <p><strong>Phone:</strong> {{ $order->userAddress->phone }}</p>
                                @php
                                    $address = @$order->address;
                                    // Split the address by comma
                                    $addressParts = explode(',', $address);
                                    // Trim to remove any extra spaces
                                    $firstPart = trim($addressParts[0]); // e.g., "14510 Amar Rd"
                                    $secondPart = trim($addressParts[1]); // e.g., "Khu Vực: TP.HCM"
                                @endphp
                                <p><strong>{{ $secondPart }}</strong> --- <strong>Địa Chỉ: </strong> {{ $firstPart }}</p>
                                <p><strong>Order Date:</strong> {{ $order->created_at->format('d M, Y') }}</p>
                                <p><strong>Status:</strong>
                                    @if($order->order_status == 'pending')
                                        <span class="badge rounded-pill bg-warning" style="font-size:12px;">Pending</span>
                                    @elseif($order->order_status == 'processing')
                                        <span class="badge rounded-pill bg-info" style="font-size:12px;">Processing</span>
                                    @elseif($order->order_status == 'shipping')
                                        <span class="badge rounded-pill bg-primary" style="font-size:12px;">Shipping</span>
                                    @elseif($order->order_status == 'delivered')
                                        <span class="badge rounded-pill bg-success" style="font-size:12px;">Delivered</span>
                                    @elseif($order->order_status == 'canceled')
                                        <span class="badge rounded-pill bg-danger" style="font-size:12px;">Canceled</span>
                                    @endif
                                </p>
                                <p><strong>Payment Method:</strong> {{ ucfirst($order->payment_method) }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Form for Payment and Order Status -->
                    <div class="col-md-4">
                        <form action="{{ route('admin.order.status.update', $order->id) }}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="card mb-4">
                                <div class="card-body">
                                    <label for="payment_status" class="form-label"><strong>Payment Status</strong></label>
                                    <select name="payment_status" id="payment_status" class="form-select mb-3">
                                        <option value="pending" {{ $order->payment_status == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="completed" {{ $order->payment_status == 'completed' ? 'selected' : '' }}>Completed</option>
                                    </select>

                                    <label for="order_status" class="form-label"><strong>Order Status</strong></label>
                                    <select name="order_status" id="order_status" class="form-select mb-3">
                                        <option value="pending" {{ $order->order_status == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="processing" {{ $order->order_status == 'processing' ? 'selected' : '' }}>Processing</option>
                                        <option value="shipping" {{ $order->order_status == 'shipping' ? 'selected' : '' }}>Shipping</option>
                                        <option value="delivered" {{ $order->order_status == 'delivered' ? 'selected' : '' }}>Delivered</option>
                                        <option value="canceled" {{ $order->order_status == 'canceled' ? 'selected' : '' }}>Canceled</option>
                                    </select>

                                    <button class="btn btn-primary w-100 mt-3" type="submit">UPDATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Ordered Products -->
                <div class="card mb-4">
                    <div class="card-header bg-secondary text-white">
                        <h4>Ordered Products</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order->orderItems as $orderItem)
                                @php
                                    $variants = json_decode($orderItem->product_variants, true);
                                    $unitPrice = $orderItem->product_price;
                                    $qty = $orderItem->quantity;
                                    $variantPrice = 0;

                                    if (is_array($variants) && count($variants) > 0) {
                                        foreach($variants as $variantItem){
                                            $variantPrice += $variantItem['price'];
                                        }
                                    }

                                    $productTotal = ($unitPrice + $variantPrice) * $qty;
                                @endphp
                                <tr>
                                    <td>
                                        {{ $orderItem->product_name }}
                                        @if(is_array($variants) && count($variants) > 0)
                                            @foreach($variants as $variant)
                                                <small class="text-muted d-block">({{ $variant['variant_name'] }} + {{ currencyPosition($variant['price']) }})</small>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>{{ currencyPosition($orderItem->product_price) }}</td>
                                    <td>{{ $orderItem->quantity }}</td>
                                    <td>{{ currencyPosition($productTotal) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Order Total -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5><strong>Total Amount:</strong> {{ currencyPosition($order->grandtotal) }}</h5>
                    </div>
                </div>

                <a href="{{ route('admin.order.index') }}" class="btn btn-primary">Back to Orders</a>
            </div>
        </div>
    </div>
</div>
@endsection
