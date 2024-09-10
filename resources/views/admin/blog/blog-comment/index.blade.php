@extends('admin.layouts.master')

@section('content')
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-20 mb-0">Blog Comment Data Tables</h1>
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
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable-basic" class="table table-bordered text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Blog Title</th>
                                            <th scope="col">Message</th>
                                            <th scope="col">Sent By</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($comments as $comment)
                                        <tr>
                                            <td>
                                                {{ date('d-m-Y ~ H:i', strtotime($comment->created_at)) }}
                                            </td>
                                            <td>
                                                {{ $comment->blog->title }}
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.blog.edit', $comment->id) }}">
                                                    {{ $comment->comment }}
                                                </a>
                                            </td>
                                            <td>
                                                {{ $comment->email }} / {{ $comment->name }}
                                            </td>
                                            <td>
                                                {{ $comment->phone }}
                                            </td>
                                            <td>
                                                @if($comment->status === 1)
                                                <a href="{{ route('admin.blog.comments.status.update', $comment->id) }}" class="btn btn-primary">
                                                    Viewed
                                                </a>
                                                @else
                                                <a href="{{ route('admin.blog.comments.status.update', $comment->id) }}" class="btn btn-dark">
                                                    View
                                                </a>
                                                @endif
                                                <a href="{{ route('admin.blog.comments.destroy', $comment->id) }}"
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
