@extends('admin.layouts.master')

@section('content')
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-20 mb-0">Product Variant</h1>
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
                <div class="col-lg-6">
                    <div class="card custom-card">
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                            <a href="{{ route('admin.product.index') }}" class="btn btn-primary">
                                <i class="bi bi-arrow-left"></i>
                            </a>
                            <h3 class="card-title">{{ $product->name }} | SKU:{{ $product->sku }}</h3>
                            <a href="{{ route('admin.product-variant.create', ['product'=> $product->id]) }}" class="btn btn-primary">CREATE</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable-basic" class="table table-bordered text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($variants as $variant)
                                        <tr>
                                            <td>
                                                {{ $variant->name }}
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.product.variant-item.index',
                                                    ['product_id' => request()->product, 'variant_id' => $variant->id]) }}"
                                                    class="btn btn-primary">Variant Items
                                                </a>
                                                <a href="{{ route('admin.product-variant.edit', $variant->id) }}"
                                                    class="btn btn-info">Edit
                                                </a>
                                                <a href="{{ route('admin.product-variant.destroy', $variant->id) }}"
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
