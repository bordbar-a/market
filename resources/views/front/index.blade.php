@extends('layouts.front.base')


@section('content')
    <!-- SLIDER -->
    @include('front.partials.slider')
    <!-- /SLIDER -->


    <!-- FEATURED -->
    @include('front.partials.products')
    <!-- /FEATURED -->


    <!-- NEW PRODUCTS -->
    @include('front.partials.new-products')
    <!-- NEW PRODUCTS -->


    <!-- BRANDS -->
    @include('front.partials.brands')
    <!-- BRANDS -->

@endsection



@section('script')
    <script type="text/javascript" src="/front/js/index.js"></script>
@endsection
