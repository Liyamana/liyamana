@extends('frontend.layouts.app_landing')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

<div class="main">
    <!--hero section start-->
    @include('frontend.home_page_include.hero')

    <!--promo-section section start-->
    @include('frontend.home_page_include.description_section')
    <!--promo-section section end-->

    <!--feature section tab style start-->
    @include('frontend.home_page_include.mail_types')
    <!--feature section tab style end-->

    @include('frontend.home_page_include.need_help_section')


   @include('frontend.home_page_include.packages')

    @include('frontend.home_page_include.review_section')






</div>


@endsection
