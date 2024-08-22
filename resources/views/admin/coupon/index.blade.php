@extends('admin.layouts.master')

@section('content')
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-20 mb-0">Coupon Data Tables</h1>
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
                            <a href="{{ route('admin.coupon.create') }}" class="btn btn-primary">CREATE</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable-basic" class="table table-bordered text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Code</th>
                                            <th scope="col">Expire Date</th>
                                            <th scope="col">Discount Type</th>
                                            <th scope="col">Discount Amount</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach($coupons as $coupon)
                                        <tr>
                                            <td>
                                                {{ $coupon->name }}
                                            </td>
                                            <td>
                                                {{ $coupon->code }}
                                            </td>
                                            <td>
                                                {{ $coupon->expire_date }}
                                            </td>
                                            <td>
                                                @if ($coupon->discount_type === 'percentage')
                                                <i class="badge bg-outline-info" style="font-size:14px;">Percentage</i>
                                                @else
                                                <i class="badge bg-outline-info" style="font-size:14px;">Amount</i>
                                                @endif
                                            </td>
                                            <td>
                                                {{ $coupon->discount }}
                                            </td>
                                            <td>
                                                @if ($coupon->status == 1)
                                                    <i class="badge bg-success my-1">Active</i>
                                                @else
                                                    <i class="badge bg-danger my-1">Inactive</i>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.coupon.edit', $coupon->id) }}"
                                                        class="btn btn-primary">Edit
                                                    </a>
                                                <a href="{{ route('admin.coupon.destroy', $coupon->id) }}"
                                                        class="btn btn-danger delete-button">Delete
                                                    </a>
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
