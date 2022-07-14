<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Home');
    }
    public function create()
    {
        $home = null;
        return view('pages.backend.home.cev', compact('home'));
    }
    public function show($id)
    {
        $home = Home::find($id);

        return view('pages.backend.home.view', compact('home'));
    }

    public function edit($id)
    {

        $home = Home::find($id);

        return view('pages.backend.home.edit', compact('home'));
    }

    public function store(Request $request)
    {
        $image = new Home();
        $image->title = $request->title;
        $image->logo = $request->logo;
        $image->save();
        return redirect()->route('admin.home')->with('image');
    }
    public function index()
    {
        $item = Home::orderBy('id', 'asc')->paginate(10);

        return view('pages.backend.home.index', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $image = Home::find($id);
        $image->title = $request->title;
        $image->logo = $request->logo;
        $image->update();
        return redirect()->route('admin.home');
    }

    public function delete($id)
    {
        $user = Home::find($id);
        $user->delete();
        return redirect()->back();
    }
}