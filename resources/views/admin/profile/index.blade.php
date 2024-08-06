@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-20 mb-0">Profile</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-xl-6">
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="avatar avatar-xxl avatar-rounded me-3">
                                        <img src="{{ asset(auth()->user()->image) }}" alt="img">
                                    </div>
                                    <div>
                                        <h4>{{ auth()->user()->name }}</h4>
                                        <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave me-1">
                                            <i class="ri-user-add-line align-middle me-1"></i>Follow
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-secondary btn-sm btn-wave">
                                            <i class="ri-mail-fill align-middle me-1"></i>E-mail
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer pb-0 px-0">
                        <ul class="nav nav-pills nav-style-3 d-block d-sm-flex" role="tablist">
                            <li class="nav-item me-0 me-sm-2">
                                <a class="nav-link fs-15 active" data-bs-toggle="tab" role="tab" aria-current="page"
                                    href="#account-settings" aria-selected="true">Profile Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">

                    <div class="tab-pane p-0 active" id="account-settings" role="tabpanel">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="form-horizontal">
                                    <div class="row">
                                        <p class="mb-4 fs-17">Personal Info</p>
                                        <form method="POST" action="{{ route('admin.profile.update') }}"
                                            class="form-horizontal" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-4">

                                                <div class="col-md-12 col-lg-12 col-xl-12">
                                                    <div class="form-group">
                                                        <label for="username" class="form-label">Avatar</label>
                                                        <input type="file" name="image" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="username" class="form-label">Name</label>
                                                        <input type="text" name="name" class="form-control"
                                                            id="name" value="{{ Auth::user()->name }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="firstname" class="form-label">Email</label>
                                                        <input type="text" name="email" class="form-control"
                                                            value="{{ Auth::user()->email }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-lg-12 col-xl-6 pt-2">
                                                    <button type="submit" class="btn btn-primary">SAVE</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane p-0 active" id="account-settings" role="tabpanel">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="form-horizontal">
                                    <div class="row">
                                        <p class="mb-4 fs-17">Password</p>
                                        <form method="POST" action="{{ route('admin.password.update') }}"
                                            class="form-horizontal">
                                            @csrf
                                            <div class="row mb-4">

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="username" class="form-label">Current Password</label>
                                                        <input type="password" name="current_password" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="username" class="form-label">New Password</label>
                                                        <input type="password" name="password" class="form-control"
                                                            id="name">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="username" class="form-label">Confirm Password</label>
                                                        <input type="password" name="password_confirmation"
                                                            class="form-control" id="name">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary">SAVE</button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--End::row-1 -->

    </div>
@endsection
