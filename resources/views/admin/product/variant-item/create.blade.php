@extends('admin.layouts.master')

@section('content')
    <div class="side-app">
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-20 mb-0">Create a new variant item</h1>
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

            <!-- row -->
            <div class="row">
                <div class="col-xl-4">
                    <div class="card custom-card">
                        <div class="card-body">
                            <form action="{{ route('admin.product.variant-item.store') }}" method="POST">
                                @csrf

                                <input type="hidden" class="form-control" name="product_variant_id" value="{{ $variant->id }}">
                                <input type="hidden" class="form-control" name="product_id" value="{{ $product->id }}">

                                <div class="mb-3">
                                    <label>Item Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>

                                <div class="mb-3">
                                    <label>Price <code>(Set 0 to make it free)</code></label>
                                    <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                                </div>

                                <div class="mb-3">
                                    <label>Is Default</label>
                                    <select class="form-select" id="validationCustom04" name="is_default">
                                        <option value="1">Yes</option>
                                        <option value="0">No<option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="js-example-basic-single" name="status">
                                        <option value="1">Active</option>
                                        <option value="0">Draft</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">CREATE</button>
                                <a href="{{ route('admin.product.variant-item.index', ['product_id' => $product->id, 'variant_id' => $variant->id]) }}" class="btn btn-secondary">BACK</a>
                            </form>
                        </div>
                        <div class="card-footer d-none border-top-0">
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
    </div>
@endsection
