<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Testimonial;
use App\Models\Category;

class PublicController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('published', 1)->get();
        $topics = Topic::latest()->take(2)->get();
        $categories = Category::with(['topics' => function ($query) {
            $query->where('published', 1)->latest()->take(3);
        }])->latest()->limit(5)->get();
        // dd($testimonials);
        return view('public.index', compact('testimonials', 'topics', 'categories'));
    }

    public function test()
    {
        $testimonials = Testimonial::where('published', 1)->get();
        return view('public.public_testimonials', compact('testimonials'));
    }

    public function topic_detail()
    {
        return view('public.topics-detail');
    }

    public function topic_list()
    {
        $topics = Topic::latest()->take(3)->get();
        $topics2 = Topic::where('published', 1)->where('trending', 1)->latest()->take(2)->get();
        return view('public.topics-listing', compact('topics', 'topics2'));
    }
}
