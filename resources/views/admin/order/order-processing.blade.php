@extends('admin.layouts.master')

@section('content')
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-20 mb-0">Order Processing Data Tables</h1>
                <div class="ms-md-1 ms-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable-basic" class="table table-bordered text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th class="col">No.</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Invoice</th>
                                            <th class="col">Customer Name</th>
                                            <th scope="col">Grand Total</th>
                                            <th scope="col">Payment Method</th>
                                            <th scope="col">Payment Status</th>
                                            <th scope="col">Order Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach($orders as $order)
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                {{ $order->created_at->format('d-m-Y') }}
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.order.show', $order->id) }}">
                                                    {{ $order->invoice_id }}
                                                </a>
                                            </td>
                                            <td>
                                                {{ $order->user?->name }}
                                            </td>
                                            <td>
                                                {{ currencyPosition($order->grandtotal) }}
                                            </td>
                                            <td>
                                                {{ $order->payment_method }}
                                            </td>
                                            <td>
                                                {{ $order->payment_status }}
                                            </td>
                                            <td>
                                                @if ($order->order_status === 'pending')
                                                    <i class="badge bg-primary my-1">Pending</i>
                                                @elseif ($order->order_status === 'processing')
                                                    <i class="badge bg-info my-1">Processing</i>
                                                @elseif ($order->order_status === 'shipping')
                                                    <i class="badge bg-info my-1">Shipping</i>
                                                @elseif ($order->order_status === 'delivered')
                                                    <i class="badge bg-success my-1">Delivered</i>
                                                @elseif ($order->order_status === 'canceled')
                                                    <i class="badge bg-danger my-1">Canceled</i>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.order.invoice', $order->id) }}"
                                                    class="btn btn-primary">Invoice</a>
                                                <a href="#" class="btn btn-info update-status-button" data-order-id="{{ $order->id }}" data-payment-status="{{ $order->payment_status }}" data-order-status="{{ $order->order_status }}" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable2">
                                                    <i class="fe fe-truck"></i>
                                                </a>
                                                <a href="{{ route('admin.order.destroy', $order->id) }}" class="btn btn-danger delete-button">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </div>

    <div class="modal fade" id="exampleModalScrollable2" tabindex="-1"
    aria-labelledby="exampleModalScrollable2" data-bs-keyboard="false"
    aria-hidden="true">
    <!-- Scrollable modal -->
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="staticBackdropLabel2">Update Status
                </h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form id="status-update-form" method="POST">
                @csrf
                @method("PUT")
                <div class="modal-body">
                    <label for="payment_status" class="form-label"><strong>Payment Status</strong></label>
                    <select name="payment_status" id="payment_status" class="form-select mb-3">
                        <option value="pending" {{ @$order->payment_status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="completed" {{ @$order->payment_status == 'completed' ? 'selected' : '' }}>Completed</option>
                    </select>

                    <label for="order_status" class="form-label"><strong>Order Status</strong></label>
                    <select name="order_status" id="order_status" class="form-select mb-3">
                        <option value="pending" {{ @$order->order_status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="processing" {{ @$order->order_status == 'processing' ? 'selected' : '' }}>Processing</option>
                        <option value="shipping" {{ @$order->order_status == 'shipping' ? 'selected' : '' }}>Shipping</option>
                        <option value="delivered" {{ @$order->order_status == 'delivered' ? 'selected' : '' }}>Delivered</option>
                        <option value="canceled" {{ @$order->order_status == 'canceled' ? 'selected' : '' }}>Canceled</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save
                        Changes</button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('.update-status-button').click(function() {
            var orderId = $(this).data('order-id');
            var actionUrl = '{{ route("admin.order.status.update", ":id") }}';
            actionUrl = actionUrl.replace(':id', orderId);

            $('#status-update-form').attr('action', actionUrl);
            $('#payment_status').val($(this).data('payment-status'));
            $('#order_status').val($(this).data('order-status'));
        });
    });
</script>
@endpush
