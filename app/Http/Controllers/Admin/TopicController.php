<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Topic;
use App\Models\Category;
use App\Traits\Common;


class TopicController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topics = Topic::get();
        return view('admin.topics',compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id','category_name')->get();
        
        return view('admin.add_topic',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'categor_name' => 'required|string',
            'content' => 'required|string|max:500',
            'no_of_view' => 'required|numeric',
            'image' => 'nullable|mimes:png,jpg,jpeg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);
        
        $data['image'] = $this->uploadFile( $request->image,'assests_admin/image/topic');
        $data['published'] = isset($request->published);
        $data['trending'] = isset($request->trending);

        Topic::create($data);
        return redirect()->route('topics.index')->with('topic','topic added successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
