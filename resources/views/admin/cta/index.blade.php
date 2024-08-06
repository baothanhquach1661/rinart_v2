@extends('admin.layouts.master')

@section('content')
    <div class="side-app">
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-20 mb-0">Editing CTA Section</h1>
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
                            <form action="{{ route('admin.cta.update', $cta->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")

                                <div id="image_preview" class="mb-3">
                                    <img id="image" src="{{ asset($cta->image) }}" alt="{{ $cta->name }}" style="height: 150px; max-width: 100%;">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="file" name="image" id="image_input">
                                </div>

                                <div class="mb-3">
                                    <label for="name" class="form-label">Type</label>
                                    <input type="text" class="form-control" name="name" value="{{ $cta->name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{ $cta->title }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" name="description" value="{{ $cta->description }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Button</label>
                                    <input type="text" class="form-control" name="btn" value="{{ $cta->btn }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Button Url</label>
                                    <input type="text" class="form-control" name="btn_url" value="{{ $cta->btn_url }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Video Url</label>
                                    <input type="text" class="form-control" name="video_url" value="{{ $cta->video_url }}" required>
                                </div>

                                <button type="submit" class="btn btn-primary">SAVE</button>
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
