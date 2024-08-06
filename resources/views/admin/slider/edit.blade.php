@extends('admin.layouts.master')

@section('content')
    <div class="side-app">
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-20 mb-0">Editing {{ $slider->title }}</h1>
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
                                Overview
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")

                                <div class="mb-3">
                                    <div id="image-preview" class="image-preview">
                                        <img src="{{ asset($slider->image1) }}" width="150">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="image1" class="form-label">Image 1 (301x371)</label>
                                    <input type="file" class="form-control" name="image1">
                                </div>

                                <div class="mb-3">
                                    <div id="image-preview" class="image-preview">
                                        <img src="{{ asset($slider->image2) }}" width="150">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="image2" class="form-label">Image 2 (301x371)</label>
                                    <input type="file" class="form-control" name="image2">
                                </div>

                                <div class="mb-3">
                                    <label for="name" class="form-label">Type</label>
                                    <input type="text" class="form-control" name="name" value="{{ $slider->name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{ $slider->title }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" name="description" value="{{ $slider->description }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Button</label>
                                    <input type="text" class="form-control" name="btn" value="{{ $slider->btn }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Button Url</label>
                                    <input type="text" class="form-control" name="btn_url" value="{{ $slider->btn_url }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="js-example-basic-single" name="status">
                                        <option @selected($slider->status === 1) value="1">Active</option>
                                        <option @selected($slider->status === 0) value="0">Draft</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">SAVE</button>
                                <a href="{{ route('admin.slider.index') }}" class="btn btn-secondary">CANCEL</a>
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
