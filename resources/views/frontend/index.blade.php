@extends('index')
@section('content')
    @include('frontend.section.hero')
    @include('frontend.section.about')
    @include('frontend.section.spesification')
    @include('frontend.section.view')
    @include('frontend.section.gallery')
    @include('frontend.section.report')
    @include('frontend.components.scroll')
    @include('frontend.components.footer')
@endsection