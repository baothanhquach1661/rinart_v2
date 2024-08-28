@extends('admin.layouts.master')

@section('content')
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-20 mb-0">Order Data Tables</h1>
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
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                            <div class="card-title">Datatable</div>
                            <a href="{{ route('admin.product.create') }}" class="btn btn-primary">CREATE</a>
                        </div>
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
                                                {{ $order->invoice_id }}
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
                                                    <i class="badge bg-info my-1">Pending</i>
                                                @elseif ($order->order_status === 'processing')
                                                    <i class="badge bg-info my-1">Processing</i>
                                                @elseif ($order->order_status === 'delivered')
                                                    <i class="badge bg-info my-1">Delivered</i>
                                                @elseif ($order->order_status === 'canceled')
                                                    <i class="badge bg-info my-1">Canceled</i>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.order.show', $order->id) }}"
                                                    class="btn btn-primary">Invoice</a>
                                                <a href="#" class="btn btn-info"><i class="fe fe-truck"></i></a>
                                                <a href="#" class="btn btn-danger delete-button">Delete</a>
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
@endsection
