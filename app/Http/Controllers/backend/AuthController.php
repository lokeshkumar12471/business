<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Newsletter;
use App\Models\Portfolio;
use App\Models\Services;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// use Redirect;

class AuthController extends Controller
{

    public function index()
    {
        return view('pages.backend.login');
    }

    public function register()
    {
        return view('pages.backend.register');
    }

    public function postLogin(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('admin.dashboard');
        }
        return redirect('admin/login')->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function postRegistration(Request $request)
    {

        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("admin/login")->withSuccess('Great! You have Successfully loggedin');
    }

    public function dashboard()
    {

        if (Auth::check()) {
            return view('dashboard');
        }
        return redirect("admin/login")->withSuccess('Opps! You do not have access');
    }
    public function home()
    {

        if (Auth::check()) {
            view()->share('title', 'Home');
            $item = Home::orderBy('id', 'asc')->paginate(10);

            return view('pages.backend.home.index', compact('item'));
        }
        return redirect("admin/login")->withSuccess('Opps! You do not have access');
    }
    public function about()
    {

        if (Auth::check()) {
            view()->share('title', 'About');
            $item = About::orderBy('id', 'asc')->paginate(10);

            return view('pages.backend.about.index', compact('item'));
        }
        return redirect("admin/login")->withSuccess('Opps! You do not have access');
    }
    public function contact()
    {

        if (Auth::check()) {
            view()->share('title', 'contact');
            $item = Contact::orderBy('id', 'asc')->paginate(10);

            return view('pages.backend.contact.index', compact('item'));
        }
        return redirect("admin/login")->withSuccess('Opps! You do not have access');
    }
    public function portfolio()
    {

        if (Auth::check()) {
            view()->share('title', 'portfolio');
            $item = Portfolio::orderBy('id', 'asc')->paginate(10);

            return view('pages.backend.portfolio.index', compact('item'));
        }
        return redirect("admin/login")->withSuccess('Opps! You do not have access');
    }
    public function services()
    {

        if (Auth::check()) {
            view()->share('title', 'services');
            $item = Services::orderBy('id', 'asc')->paginate(10);

            return view('pages.backend.services.index', compact('item'));
        }
        return redirect("admin/login")->withSuccess('Opps! You do not have access');
    }
    public function team()
    {

        if (Auth::check()) {
            view()->share('title', 'services');
            $item = Team::orderBy('id', 'asc')->paginate(10);

            return view('pages.backend.team.index', compact('item'));
        }
        return redirect("admin/login")->withSuccess('Opps! You do not have access');
    }
    public function newsletter()
    {

        if (Auth::check()) {
            view()->share('title', 'services');
            $item = Newsletter::orderBy('id', 'asc')->paginate(10);

            return view('pages.backend.newsletter.index', compact('item'));
        }
        return redirect("admin/login")->withSuccess('Opps! You do not have access');
    }
    public function testimonial()
    {

        if (Auth::check()) {
            view()->share('title', 'services');
            $item = Testimonial::orderBy('id', 'asc')->paginate(10);

            return view('pages.backend.testimonial.index', compact('item'));
        }
        return redirect("admin/login")->withSuccess('Opps! You do not have access');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function logout()
    {

        Auth::logout();
        return redirect("admin/login")->withSuccess('succesfully logged out');
    }
}