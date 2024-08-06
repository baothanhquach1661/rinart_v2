@extends('admin.layouts.master')

@section('content')
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-20 mb-0">Editing Product {{ $product->name }}</h1>
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
                <form action="{{ route('admin.product.update', $product->id) }}" method="POST" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="col-lg-9 col-md-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Overview
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">SKU</label>
                                        <input type="text" class="form-control" name="sku" value="{{ $product->sku }}">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Origin</label>
                                        <input type="text" class="form-control" name="origin" value="{{ $product->origin }}">
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Thumb Image</label>
                                        <input type="file" class="form-control" name="thumb_image" id="thumb_image_input">
                                        <div id="thumb_image_preview" class="mt-3">
                                            <img id="thumb_image" src="{{ asset($product->thumb_image) }}" alt="{{ $product->name }}" style="height: 150px; max-width: 100%;">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Short Description</label>
                                        <textarea class="form-control" name="short_description" rows="3">
                                            {!! $product->short_description !!}
                                        </textarea>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <textarea id="summernote" class="form-control" name="long_description">
                                            {!! $product->long_description !!}
                                        </textarea>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">Price</label>
                                        <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">Discount Price</label>
                                        <input type="text" class="form-control" name="discount_price" value="{{ $product->discount_price }}">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">Quantity</label>
                                        <input type="number" min="0" class="form-control" name="qty" value="{{ $product->qty }}">
                                    </div>
                                    <div class="col-md-3 mb-3"></div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">Offer Start Date</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fe fe-calendar"></i></span>
                                            <input class="form-control flatpickr-input" name="offer_start_date" id="date" type="text" value="{{ $product->offer_start_date }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">Offer End Date</label>
                                        <div class="input-group date" id="datePickerStyle1" data-date-format="mm-dd-yyyy">
                                            <span class="input-group-text"><i class="fe fe-calendar"></i></span>
                                            <input class="form-control flatpickr-input" name="offer_end_date" id="date" type="text" value="{{ $product->offer_end_date }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">Margin</label>
                                        <input type="number" min="0" class="form-control" name="margin" value="" readonly>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">Profit</label>
                                        <input type="number" min="0" class="form-control" name="profit" value="" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">SEO Title</label>
                                        <input type="text" class="form-control" name="seo_title" value="{{ $product->seo_title }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">SEO Description</label>
                                        <input type="text" class="form-control" name="seo_description" value="{{ $product->seo_description }}">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Video Link</label>
                                        <input type="text" class="form-control" name="video_link" value="{{ $product->video_link }}">
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label class="ckbox">
                                            <input {{ $product->is_best_deal == 1 ? 'checked' : '' }}
                                                class="form-check-input" name="is_best_deal" type="checkbox">
                                            <span>Is Best Deal</span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="ckbox">
                                            <input {{ $product->is_best_seller == 1 ? 'checked' : '' }}
                                                class="form-check-input" name="is_best_seller" type="checkbox">
                                            <span>Best Sellers</span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="ckbox">
                                            <input {{ $product->is_featured == 1 ? 'checked' : '' }}
                                                class="form-check-input" name="is_featured" type="checkbox">
                                            <span>Featured Product</span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="ckbox">
                                            <input {{ $product->is_event == 1 ? 'checked' : '' }}
                                                class="form-check-input" name="is_event" type="checkbox">
                                            <span>Is Event</span>
                                        </label>
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
                                    <label>Status</label>
                                    <select class="js-example-basic-single" name="status">
                                        <option @selected($product->status === 1) value="1">Active</option>
                                        <option @selected($product->status === 0) value="0">Inactive</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Category</label>
                                    <select class="js-example-basic-single main-category" name="category_id">
                                        <option value="">Select</option>
                                        @foreach ($categories as $category)
                                            <option {{ $category->id == $product->category_id ? 'selected' : '' }}
                                                value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">SubCategory</label>
                                    <select class="js-example-basic-single sub-category" name="subcategory_id">
                                        @foreach ($subcategories as $subcategory)
                                            <option {{ $subcategory->id == $product->subcategory_id ? 'selected' : '' }}
                                            value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mb-5">
                        <button class="btn btn-primary" style="font-size: 20px;" type="submit">SAVE</button>
                        <a href="{{ route('admin.product.index') }}" class="btn btn-secondary" style="font-size: 20px;">BACK</a>
                    </div>
                </form>
            </div>

            <!-- End Row -->
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Listen for click events on elements with class 'change-status'
            $('body').on('change', '.main-category', function(e) {
                let id = $(this).val();
                $.ajax({
                    method: 'GET',
                    url: "{{ route('admin.product.get-subcategories') }}",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('.sub-category').html('<option value="">Select</option>')
                        $.each(data, function(i, item) {
                            $('.sub-category').append(
                                `<option value="${item.id}">${item.name}</option>`)
                        })
                    },
                    error: function(xhr, status, error) {

                    }
                });
            });


        });
    </script>

    <script>
        document.getElementById('thumb_image_input').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.getElementById('thumb_image');
                    img.src = e.target.result;
                    img.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                const img = document.getElementById('thumb_image');
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
