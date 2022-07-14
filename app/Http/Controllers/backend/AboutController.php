<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'About');
    }
    public function create()
    {
        $about = null;
        return view('pages.backend.about.cev', compact('about'));
    }
    public function show($id)
    {

        $about = About::find($id);
        return view('pages.backend.about.view', compact('about'));
    }

    public function edit($id)
    {

        $about = About::find($id);

        return view('pages.backend.about.edit', compact('about'));
    }

    public function store(Request $request)
    {
        $image = new About();
        $image->title = $request->title;
        $image->description = $request->description;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/about', $filename);
            $image->image = $filename;
        }
        $image->save();
        return redirect()->route('admin.about')->with('image');
    }
    public function index()
    {
        $item = About::orderBy('id', 'asc')->paginate(10);

        return view('pages.backend.about.index', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $image = About::find($id);
        $image->title = $request->title;
        $image->description = $request->description;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/about', $filename);
            $image->image = $filename;
        }
        $image->update();
        return redirect()->route('admin.about');
    }
    public function delete($id)
    {
        $user = About::find($id);
        $user->delete();
        return redirect()->back();
    }
}