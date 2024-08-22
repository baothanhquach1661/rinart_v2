@extends('admin.layouts.master')

@section('content')
    <div class="side-app">
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-20 mb-0">Editing {{ $delivery->area_name }} Data</h1>
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
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Delivery Area: {{ $delivery->area_name }}
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.delivery.update', $delivery->id) }}" method="POST">
                                @csrf
                                @method("PUT")
                                <div class="mb-3">
                                    <label for="name" class="form-label">Area Name</label>
                                    <input type="text" class="form-control" name="area_name" value="{{ $delivery->area_name }}">
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Minimum Delivery Time</label>
                                            <input type="text" class="form-control" name="min_delivery_time" value="{{ $delivery->min_delivery_time }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Maximum Delivery Time</label>
                                            <input type="text" class="form-control" name="max_delivery_time" value="{{ $delivery->max_delivery_time }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="title" class="form-label">Delivery Fee</label>
                                    <input type="text" class="form-control" name="delivery_fee" value="{{ $delivery->delivery_fee }}">
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="js-example-basic-single" name="status">
                                        <option @selected($delivery->status === 1) value="1">Active</option>
                                        <option @selected($delivery->status === 0) value="0">Draft</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">SAVE</button>
                                <a href="{{ route('admin.delivery.index') }}" class="btn btn-secondary">CANCEL</a>
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
