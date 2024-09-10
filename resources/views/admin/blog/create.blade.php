@extends('admin.layouts.master')

@section('content')
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-20 mb-0">Blog Data Tables</h1>
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
                <form action="{{ route('admin.blog.store') }}" method="POST" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-9 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Image (370x241)</label>
                                        <input type="file" class="form-control" name="image" id="image_input">
                                        <div id="thumb_image_preview" class="mt-3">
                                            <img id="image" src="" alt="Image Preview" style="height: 150px; max-width: 100%; display: none;">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Banner (1390x747)</label>
                                        <input type="file" class="form-control" name="banner" id="banner_image_input">
                                        <div id="thumb_image_preview" class="mt-3">
                                            <img id="banner_image" src="" alt="Image Preview" style="height: 150px; max-width: 100%; display: none;">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Short Description</label>
                                        <textarea class="form-control" name="short_description" rows="3">{{ old('short_description') }}</textarea>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Main Description</label>
                                        <textarea id="summernote" class="form-control" name="long_description">
                                            {!! old('long_description') !!}
                                        </textarea>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">SEO Title</label>
                                        <input type="text" class="form-control" name="seo_title" value="{{ old('seo_title') }}">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">SEO Description</label>
                                        <input type="text" class="form-control" name="seo_description" value="{{ old('seo_description') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Additional Information
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Category</label>
                                    <select class="js-example-basic-single main-category" name="blog_category_id">
                                        <option value="">Select</option>
                                        @foreach ($b_categories as $b_category)
                                            <option value="{{ $b_category->id }}">{{ $b_category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>Status</label>
                                    <select class="form-select" name="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mb-5">
                        <button class="btn btn-primary" style="font-size: 20px;" type="submit">SAVE</button>
                        <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary" style="font-size: 20px;">BACK</a>
                    </div>
                </form>
            </div>
            <!-- End Row -->
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.getElementById('image_input').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.getElementById('image');
                    img.src = e.target.result;
                    img.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                const img = document.getElementById('image');
                img.src = '';
                img.style.display = 'none';
            }
        });
    </script>

    <script>
        document.getElementById('banner_image_input').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.getElementById('banner_image');
                    img.src = e.target.result;
                    img.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                const img = document.getElementById('banner_image');
                img.src = '';
                img.style.display = 'none';
            }
        });
    </script>

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
