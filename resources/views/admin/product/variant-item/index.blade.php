@extends('admin.layouts.master')

@section('content')
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-20 mb-0">{{ $variant->name }}</h1>
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
                <div class="col-lg-12">
                    <div class="card custom-card">
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                            <a href="{{ route('admin.product-variant.index', ['product' => $product->id]) }}" class="btn btn-primary">
                                <i class="bi bi-arrow-left"></i>
                            </a>
                            <h3 class="card-title">{{ $product->name }} | {{ $variant->name }}</h3>
                            <a href="{{ route('admin.product.variant-item.create',
                                ['product_id' => $product->id, 'variant_id' => $variant->id]) }}"
                                    class="btn btn-primary">CREATE</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable-basic" class="table table-bordered text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Variant Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Is Default</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($variant_item as $item)
                                        <tr>
                                            <td>
                                                {{ $item->name }}
                                            </td>
                                            <td>
                                                {{ optional($item->productVariation)->name }}
                                            </td>
                                            <td>
                                                {{ $item->price }}
                                            </td>
                                            <td>
                                                @if ($item->is_default == 1)
                                                    <i class="badge bg-success my-1">Yes</i>
                                                @else
                                                    <i class="badge bg-danger my-1">No</i>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->status == 1)
                                                    <div class="custom-toggle-switch d-flex align-items-center mb-4">
                                                        <input id="largeSwitchSuccess{{ $item->id }}" name="largeSwitch"
                                                            class="change-status" data-id="{{ $item->id }}" type="checkbox" checked>
                                                        <label for="largeSwitchSuccess{{ $item->id }}" class="label-dark"></label>
                                                    </div>
                                                @else
                                                    <div class="custom-toggle-switch d-flex align-items-center mb-4">
                                                        <input id="largeSwitchSuccess{{ $item->id }}" name="largeSwitch"
                                                            class="change-status" data-id="{{ $item->id }}" type="checkbox">
                                                        <label for="largeSwitchSuccess{{ $item->id }}" class="label-dark"></label>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.product.variant-item.edit', $item->id) }}"
                                                    class="btn btn-info">Edit
                                                </a>
                                                <a href="{{ route('admin.product.variant-item.destroy', $item->id) }}"
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

@push('scripts')
<script>
    $(document).ready(function(){
        // Listen for click events on elements with class 'change-status'
        $('body').on('click', '.change-status', function(){
            let isChecked = $(this).is(':checked'); // Check if the checkbox is checked
            let id = $(this).data('id'); // Get the data-id attribute value

            // Send an AJAX request to update the status
            $.ajax({
                url: "{{ route('admin.product.variant-item.change-status') }}", // URL of the route
                method: 'PUT', // HTTP method
                data: {
                    status: isChecked ? 1 : 0, // Send the status (true or false)
                    id: id, // Send the ID of the category
                    _token: '{{ csrf_token() }}' // Include CSRF token
                },
                success: function(data){
                    // Display success message
                    toastr.success(data.message); // Uncomment if you use toastr for notifications
                    //console.log(data);
                },
                error: function(xhr, status, error){
                    // Display error message
                    console.log(error);
                }
            });
        });
    });
</script>
@endpush
