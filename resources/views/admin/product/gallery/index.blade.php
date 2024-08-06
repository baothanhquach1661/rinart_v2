@extends('admin.layouts.master')

@section('content')
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-20 mb-0">{{ $product->name }} Galerry Images</h1>
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
                <form action="{{ route('admin.product-gallery.store') }}" method="POST" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $product->id }}" name="product_id">
                    <div class="col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    All Images
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Image</label>
                                        <input type="file" class="form-control" name="gallery_image" id="image_input">
                                        <div id="image_preview" class="mt-3">
                                            <img id="image" src="" alt="Image Preview" style="height: 150px; max-width: 100%; display: none;">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" type="submit">SAVE</button>
                                <a href="{{ route('admin.product.index') }}" class="btn btn-secondary">BACK</a>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="card card-primary">

                <div class="card-body">
                   <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($images as $image)
                            <tr>
                                <td><img width="200px" src="{{ asset($image->gallery_image) }}" alt=""></td>
                                <td>
                                    <a href='{{ route('admin.product-gallery.destroy', $image->id) }}'
                                        class='btn btn-icon btn-danger btn-wave waves-effect waves-light delete-button'>
                                        <i class='bi bi-trash'></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        @if (count($images) == 0)
                            <tr>
                                <td colspan='2' class="text-center">No data found!</td>
                            </tr>
                        @endif
                    </tbody>
                   </table>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
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
    });
</script>
