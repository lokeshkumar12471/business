<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Portfolio');
    }
    public function create()
    {
        $portfolio = null;
        return view('pages.backend.portfolio.cev', compact('portfolio'));
    }
    public function show($id)
    {
        $portfolio = Portfolio::find($id);

        return view('pages.backend.portfolio.view', compact('portfolio'));
    }

    public function edit($id)
    {

        $portfolio = Portfolio::find($id);
        return view('pages.backend.portfolio.edit', compact('portfolio'));
    }

    public function store(Request $request)
    {
        $image = new Portfolio();

        if ($request->hasfile('app')) {
            $file = $request->file('app');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/portfolio/app', $filename);
            $image->app = $filename;
        }
        if ($request->hasfile('card')) {
            $file = $request->file('card');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/portfolio/card', $filename);
            $image->card = $filename;
        }
        if ($request->hasfile('web')) {
            $file = $request->file('web');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/portfolio/web', $filename);
            $image->web = $filename;
        }
        $image->save();
        return redirect()->route('admin.portfolio')->with('image');
    }
    public function index()
    {
        $item = Portfolio::orderBy('id', 'asc')->paginate(10);

        return view('pages.backend.portfolio.index', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $image = Portfolio::find($id);
        if ($request->hasfile('app')) {
            $file = $request->file('app');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/portfolio/app', $filename);
            $image->app = $filename;
        }
        if ($request->hasfile('card')) {
            $file = $request->file('card');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/portfolio/card', $filename);
            $image->card = $filename;
        }
        if ($request->hasfile('web')) {
            $file = $request->file('web');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/portfolio/web', $filename);
            $image->web = $filename;
        }
        $image->update();
        return redirect()->route('admin.portfolio');
    }
    public function delete($id)
    {
        $user = Portfolio::find($id);
        $user->delete();
        return redirect()->back();
    }
}