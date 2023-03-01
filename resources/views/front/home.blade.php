@extends('front.layout.master')

@section('title', 'Home')
@section('body')
    @include('front.layout.slide')
    <div class="content ">
        @include('front.menu')
        @include('front.product_new')
        @include('front.product_man')
        @include('front.product_woman')
        @include('front.blogs')
    </div>
@endsection
