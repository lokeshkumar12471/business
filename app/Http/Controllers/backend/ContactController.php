<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Contact');
    }
    public function create()
    {
        $contact = null;
        return view('pages.backend.contact.cev', compact('contact'));
    }
    public function show($id)
    {
        $contact = Contact::find($id);

        return view('pages.backend.contact.view', compact('contact'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $image = new Contact();
        $image->name = $request->name;
        $image->email = $request->email;
        $image->subject = $request->subject;
        $image->message = $request->message;
        $image->save();
        return redirect()->route('#contact')->with('alert', 'Successfully Register!');
    }
    public function index()
    {

        $item = Contact::orderBy('id', 'asc')->paginate(10);

        return view('pages.backend.contact.index', compact('item'));
    }
}