<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Team');
    }
    public function create()
    {
        $team = null;
        return view('pages.backend.team.cev', compact('team'));
    }
    public function show($id)
    {
        $team = Team::find($id);

        return view('pages.backend.team.view', compact('team'));
    }

    public function edit($id)
    {

        $team = Team::find($id);

        return view('pages.backend.team.edit', compact('team'));
    }

    public function store(Request $request)
    {
        $image = new Team();
        $image->title = $request->title;
        $image->role = $request->role;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/team', $filename);
            $image->image = $filename;
        }
        $image->save();
        return redirect()->route('admin.team')->with('image');
    }
    public function index()
    {
        $item = Team::orderBy('id', 'asc')->paginate(10);

        return view('pages.backend.team.index', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $image = Team::find($id);
        $image->title = $request->title;
        $image->role = $request->role;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/team', $filename);
            $image->image = $filename;
        }
        $image->update();
        return redirect()->route('admin.team');
    }
    public function delete($id)
    {
        $user = Team::find($id);
        $user->delete();
        return redirect()->back();
    }
}