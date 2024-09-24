@extends('public.layouts.main')

@push('pagetitle')
Topic Listing Page
@endpush

@push('subtitle')
Topics Listing
@endpush

@section('content')

<body class="topics-listing-page" id="top">

    @include('public.includes.common_navbar')
    @include('public.includes.header_contact_testim_listing')
    @include('public.includes.section1_topic_listing')
    @include('public.includes.section2_topic_listing')

@endsection