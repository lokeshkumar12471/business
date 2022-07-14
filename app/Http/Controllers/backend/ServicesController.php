<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Services');
    }
    public function create()
    {
        $news = null;
        return view('pages.backend.services.cev', compact('news'));
    }
    public function show($id)
    {
        $services = Services::find($id);

        return view('pages.backend.services.view', compact('services'));
    }

    public function edit($id)
    {

        $services = Services::find($id);

        return view('pages.backend.services.edit', compact('services'));
    }

    public function store(Request $request)
    {
        $image = new Services();
        $image->title = $request->title;
        $image->description = $request->description;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/servicesp', $filename);
            $image->image = $filename;
        }
        $image->save();
        return redirect()->route('admin.services')->with('image');
    }
    public function index()
    {
        $item = Services::orderBy('id', 'asc')->paginate(10);

        return view('pages.backend.services.index', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $image = Services::find($id);
        $image->title = $request->title;
        $image->description = $request->description;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/services', $filename);
            $image->image = $filename;
        }
        $image->update();
        return redirect()->route('admin.services');
    }
    public function delete($id)
    {
        $user = Services::find($id);
        $user->delete();
        return redirect()->back();
    }
}