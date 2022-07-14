<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Testimonial');
    }

    public function create()
    {
        $testimonial = null;
        return view('pages.backend.testimonial.cev', compact('testimonial'));
    }
    public function show($id)
    {
        $testimonial = Testimonial::find($id);

        return view('pages.backend.testimonial.view', compact('testimonial'));
    }

    public function edit($id)
    {

        $testimonial = Testimonial::find($id);

        return view('pages.backend.testimonial.edit', compact('testimonial'));
    }

    public function store(Request $request)
    {
        $image = new Testimonial();
        $image->title = $request->title;
        $image->description = $request->description;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/testimonial', $filename);
            $image->image = $filename;
        }
        $image->save();
        return redirect()->route('admin.testimonial')->with('image');
    }
    public function index()
    {
        $item = Testimonial::orderBy('id', 'asc')->paginate(10);

        return view('pages.backend.testimonial.index', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $image = Testimonial::find($id);
        $image->title = $request->title;
        $image->description = $request->description;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/testimonial', $filename);
            $image->image = $filename;
        }
        $image->update();
        return redirect()->route('admin.testimonial');
    }
    public function delete($id)
    {
        $user = Testimonial::find($id);
        $user->delete();
        return redirect()->back();
    }
}