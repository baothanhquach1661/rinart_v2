@extends('admin.layouts.master')

@section('content')
    <div class="side-app">
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-20 mb-0">Editing {{ $category->name }}</h1>
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
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Overview
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
                                @csrf
                                @method("PUT")
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Show at Homepage</label>
                                    <select class="js-example-basic-single" name="show_at_home">
                                        <option @selected($category->show_at_home === 1) value="1">Yes</option>
                                        <option @selected($category->show_at_home === 0) value="0">No</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="js-example-basic-single" name="status">
                                        <option @selected($category->status === 1) value="1">Active</option>
                                        <option @selected($category->status === 0) value="0">Draft</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">SAVE</button>
                                <a href="{{ route('admin.category.index') }}" class="btn btn-secondary">CANCEL</a>
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
