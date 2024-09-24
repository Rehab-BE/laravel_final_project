<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use App\Models\Category;
use App\Traits\Common;
use Illuminate\Http\Request;

class TopicController extends Controller
{

    use Common;
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topics = Topic::get();
        $user = auth()->user();
        return view('admin.topics', compact('topics','user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();
        $categories = Category::select('id', 'category_name')->get();
        return view('admin.add_topic', compact('categories', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        $data = $request->validate([
            'title' => 'required|string',
            'cate_name' => 'required|string',
            'content' => 'required|string|max:100',
            'trending' => 'boolean',
            'published' => 'boolean',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->image, 'assets_admin/test_image/topic');
        }
        
        Topic::create($data);
        return redirect()->route('topics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = auth()->user();
        $topic= Topic::with('category')->findOrFail($id);
        return view('admin.topic_details', compact('topic','user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = auth()->user();
        $topic = Topic::findOrfail($id);
        $categories = Category::select('id', 'category_name')->get();
        return view('admin.edit_topic', compact('topic', 'categories','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $data = $request->validate([
            'title' => 'required|string',
            'cate_name' => 'required|string',
            'content' => 'required|string|max:100',
            'trending' => 'boolean',
            'published' => 'boolean',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->image, 'assets_admin/test_image/topic');
        }
        Topic::where('id', $id)->update($data);
        return redirect()->route('topics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Topic::where('id', $id)->delete();
        return redirect()->route('topics.index');
    }
}
