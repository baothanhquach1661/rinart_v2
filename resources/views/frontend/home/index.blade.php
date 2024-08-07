@extends('frontend.layouts.master')

@section('content')
    <!-- Banner area start -->
    @include('frontend.components.slider')
    <!-- Banner area end -->

    <!-- feature area start -->
    @include('frontend.components.feature')
    <!-- feature area end -->

    <!-- small feature3 -area start -->
    {{-- @include('frontend.components.small-feature') --}}
    <!-- small feature-3-area end -->

    <!-- feature product area start -->
    @include('frontend.components.features-product')
    <!-- feature product area end -->

    <!-- cta-3-area start -->
    @include('frontend.components.cta')
    <!-- cta-3-area end -->

    <!-- blog-news area start -->
    @include('frontend.components.blog')
    <!-- blog-news area end -->
@endsection
