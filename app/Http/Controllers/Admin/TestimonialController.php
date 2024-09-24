<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Traits\Common;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $testimonials = Testimonial::get();
        return view('admin.testimonials', compact('testimonials','user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();
        return view('admin.add_testimonial', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'testimonial_name' => 'required|string',
            'content' => 'required|string|max:500',
            'published' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->image, 'assets_admin/test_image/testimonial');
        }
        Testimonial::create($data);
        return redirect()->route('testimonials.index');
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
        $user = auth()->user();
        $testimonials = Testimonial::findOrfail($id);
        return view('admin.edit_testimonial', compact('testimonials','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'testimonial_name' => 'required|string',
            'content' => 'required|string|max:500',
            'published' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->image, 'assets_admin/test_image/testimonial');
        }
        Testimonial::where('id', $id)->update($data);
        return redirect()->route('testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::where('id', $id)->delete();
        return redirect()->route('testimonials.index');
    }
}
