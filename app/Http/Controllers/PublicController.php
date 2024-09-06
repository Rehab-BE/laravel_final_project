<?php

namespace App\Http\Controllers;

class PublicController extends Controller
{
    public function index()
    {
        return view('public.index');
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function testimonial()
    {
        return view('public.testimonials');
    }

    public function topic_detail()
    {
        return view('public.topics-detail');
    }

    public function topic_list()
    {
        return view('public.topics-listing');
    }
}
