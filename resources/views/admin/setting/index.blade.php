@extends('admin.layouts.master')

@section('content')
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-20 mb-0">Setting Data Tables</h1>
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
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                            <div class="card-title">Datatable</div>
                        </div>
                        <div class="card-body">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <ul class="nav nav-tabs flex-column nav-style-4" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#general-setting-vertical" aria-selected="false" tabindex="-1">General Setting</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#about-vertical" aria-selected="false" tabindex="-1">About</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#services-vertical" aria-selected="false" tabindex="-1">Services</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#contacts-vertical" aria-selected="true">Contacts</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="tab-content mt-2 mt-xl-0">
                                                <div class="tab-pane text-muted active" id="general-setting-vertical" role="tabpanel">
                                                    <form action="{{ route('admin.general-setting.update') }}" method="POST">
                                                        @csrf
                                                        @method("PUT")
                                                        <div class="form-group mb-3">
                                                            <label for="">Site Name</label>
                                                            <input name="site_name" type="text" class="form-control"
                                                                value="{{ config('settings.site_name') }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="">Default Currency</label>
                                                            <select name="site_default_currency" id="" class="js-example-basic-single">
                                                                <option @selected(config('settings.site_default_currency') === 'usd') value="usd">USD</option>
                                                                <option @selected(config('settings.site_default_currency') === 'vnd') value="vnd">VND</option>
                                                            </select>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-3">
                                                                    <label for="">Currency Icon</label>
                                                                    <input name="site_currency_icon" type="text" class="form-control"
                                                                        value="{{ config('settings.site_currency_icon') }}" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-3">
                                                                    <label for="">Currency Icon Position</label>

                                                                    <select name="site_currency_position" id="" class="js-example-basic-single">
                                                                        <option @selected(config('settings.site_currency_position') === 'right') value="right">Right</option>
                                                                        <option @selected(config('settings.site_currency_position') === 'left') value="left">Left</option>
                                                                    </select>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary mt-2">SAVE</button>
                                                    </form>
                                                </div>
                                                <div class="tab-pane text-muted" id="about-vertical" role="tabpanel">
                                                    How travel coupons make you a better lover. Why cultural solutions
                                                    are the new black. Why mom was right about travel insurances. How
                                                    family trip ideas can help you predict the future. <b>How carnival
                                                        cruises make you a better lover</b>. Why you'll never succeed at
                                                    daily deals. 11 ways cheapest flights can find you the love of your
                                                    life. The complete beginner's guide to mission trips.
                                                </div>
                                                <div class="tab-pane text-muted" id="services-vertical" role="tabpanel">
                                                    Unbelievable healthy snack success stories. 12 facts about safe food
                                                    handling tips that will impress your friends. Restaurant weeks by
                                                    the numbers. Will mexican food ever rule the world? The 10 best thai
                                                    restaurant youtube videos. How restaurant weeks can make you sick.
                                                    The complete beginner's guide to cooking healthy food. Unbelievable
                                                    food stamp success stories.
                                                </div>
                                                <div class="tab-pane text-muted" id="contacts-vertical" role="tabpanel">
                                                    Why delicious magazines are killing you. Why our world would end if
                                                    restaurants disappeared. Why restaurants are on crack about
                                                    restaurants. How restaurants are making the world a better place. 8
                                                    great articles about minute meals. Why our world would end if
                                                    healthy snacks disappeared. Why the world would end without mexican
                                                    food. The evolution of chef uniforms.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </div>
@endsection
