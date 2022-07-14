<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Newsletter');
    }

    public function create()
    {
        $newsletter = null;
        return view('pages.backend.newsletter.cev', compact('newsletter'));
    }
    public function show($id)
    {
        $newsletter = Newsletter::find($id);

        return view('pages.backend.newsletter.view', compact('newsletter'));
    }

    public function store(Request $request)
    {
        $image = new Newsletter();
        $image->email = $request->email;
        $image->save();
        return redirect()->route('#home')->with('alert', 'Successfully Verified');
    }
    public function index()
    {
        $item = Newsletter::orderBy('id', 'asc')->paginate(10);

        return view('pages.backend.newsletter.index', compact('item'));
    }
}