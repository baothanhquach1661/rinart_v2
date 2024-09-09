@extends('admin.layouts.master')

@section('content')
    <div class="side-app">
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-20 mb-0">Editing {{ $service->title }}</h1>
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
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-body">
                            <form action="{{ route('admin.service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <div class="mb-3">
                                    <div id="image-preview" class="image-preview">
                                        <img src="{{ asset($service->main_image) }}" width="150">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="image1" class="form-label">Main Image (270x346)</label>
                                    <input type="file" class="form-control" name="main_image">
                                </div>

                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{ $service->title }}">
                                </div>

                                <div class="mb-3">
                                    <div id="image-preview" class="image-preview">
                                        <img src="{{ asset($service->image_1) }}" width="150">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="image1" class="form-label">Image 1 (700x470)</label>
                                    <input type="file" class="form-control" name="image_1">
                                </div>

                                <div class="mb-3">
                                    <div id="image-preview" class="image-preview">
                                        <img src="{{ asset($service->image_2) }}" width="150">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="image2" class="form-label">Image 2 (400x300)</label>
                                    <input type="file" class="form-control" name="image_2">
                                </div>

                                <div class="mb-3">
                                    <label for="title" class="form-label">Description</label>
                                    <textarea id="summernote" class="form-control" name="description">
                                        {!! $service->description !!}
                                    </textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="title" class="form-label">Index</label>
                                    <input type="text" class="form-control" name="index" value="{{ $service->index }}">
                                </div>

                                <div class="mb-3">
                                    <label for="title" class="form-label">Title 1</label>
                                    <input type="text" class="form-control" name="title_1" value="{{ $service->title_1 }}">
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Description 1</label>
                                    <input type="text" class="form-control" name="description_1" value="{{ $service->description_1 }}">
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title 2</label>
                                    <input type="text" class="form-control" name="title_2" value="{{ $service->title_2 }}">
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Description 2</label>
                                    <input type="text" class="form-control" name="description_2" value="{{ $service->description_2 }}">
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title 3</label>
                                    <input type="text" class="form-control" name="title_3" value="{{ $service->title_3 }}">
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Description 3</label>
                                    <input type="text" class="form-control" name="description_3" value="{{ $service->description_3 }}">
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" name="status">
                                        <option @selected($service->status === 1) value="1">Active</option>
                                        <option @selected($service->status === 0) value="0">Draft</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">SAVE</button>
                                <a href="{{ route('admin.service.index') }}" class="btn btn-secondary">CANCEL</a>
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

@push('scripts')
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 500, // Set the height of the editor
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>
@endpush
