@extends('public.layouts.main')

@push('pagetitle')
Topic Listing Contact Page
@endpush

@push('subtitle')
Testimonials
@endpush

@section('content')
<body class="topics-listing-page" id="top">
    

    @include('public.includes.common_navbar')
    @include('public.includes.header_contact_testim_listing')
    @include('public.includes.testimonials')

@endsection