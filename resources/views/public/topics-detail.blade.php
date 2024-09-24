@extends('public.layouts.main')

@push('pagetitle')
Topic Detail Page
@endpush

@section('content')

<body id="top">

    @include('public.includes.common_navbar')
    @include('public.includes.header_topic_detail')
    @include('public.includes.section1_topic_detail')
    @include('public.includes.section2_topic_detail')

    @endsection