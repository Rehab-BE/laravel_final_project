@extends('public.layouts.main')

@push('pagetitle')
Topic Listing Bootstrap 5 Template
@endpush

@section('content')

<body id="top">

    @include('public.includes.index_navbar')

    @include('public.includes.section1_index')
    @include('public.includes.section2_index')
    @include('public.includes.section3_index')
    @include('public.includes.section4_index')
    @include('public.includes.section5_index')
    @include('public.includes.testimonials')
    @include('public.includes.section7_index')

    @endsection