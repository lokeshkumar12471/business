<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Services\Helper;
use Illuminate\Http\Request;

class StaticOptionController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Staticoption');
    }
    public function submitoptions(Request $request)
    {

        $this->validate($request, [
            'title' => '',
            'description' => '',
            'image' => '',
            'video_link' => '',
            'svg_logo' => '',
        ]);

        if ($request->has('contacte_title')) {
            $key = 'contacte_title';
            $value = $request->contacte_title;
            Helper::set_static_option($key, $value);
        };
        if ($request->has('contacte_description')) {
            $key = 'contacte_description';
            $value = $request->contacte_description;
            Helper::set_static_option($key, $value);
        };
        if ($request->has('contacte_logo')) {
            $key = 'contacte_logo';
            $value = $request->contacte_logo;
            Helper::set_static_option($key, $value);
        };
        if ($request->has('contactp_logo')) {
            $key = 'contactp_logo';
            $value = $request->contactp_logo;
            Helper::set_static_option($key, $value);
        };
        if ($request->has('contactp_title')) {
            $key = 'contactp_title';
            $value = $request->contactp_title;
            Helper::set_static_option($key, $value);
        };
        if ($request->has('contactp_description')) {
            $key = 'contactp_description';
            $value = $request->contactp_description;
            Helper::set_static_option($key, $value);
        };
        if ($request->has('contacta_title')) {
            $key = 'contacta_title';
            $value = $request->contacta_title;
            Helper::set_static_option($key, $value);
        };
        if ($request->has('contacta_description')) {
            $key = 'contacta_description';
            $value = $request->contacta_description;
            Helper::set_static_option($key, $value);
        };
        if ($request->has('contacta_logo')) {
            $key = 'contacta_logo';
            $value = $request->contacta_logo;
            Helper::set_static_option($key, $value);
        }
        if ($request->has('gmap_link')) {
            $key = 'gmap_link';
            $value = $request->gmap_link;
            Helper::set_static_option($key, $value);
        };
        if ($request->has('services_title')) {
            $key = "services_title";
            $value = $request->services_title;
            Helper::set_static_option($key, $value);
        };
        if ($request->has('services_description')) {
            $key = "services_description";
            $value = $request->services_description;
            Helper::set_static_option($key, $value);
        };
        if ($request->has('services_button')) {
            $key = "services_button";
            $value = $request->services_button;
            Helper::set_static_option($key, $value);
        }
        return redirect()->back();

    }
    public function contactoptionsindex()
    {
        return view('pages.backend.contactstatic');
    }
    public function servicesoptionsindex()
    {
        return view('pages.backend.servicesstatic');
    }

}
