<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Newsletter;
use App\Models\Portfolio;
use App\Models\Services;
use App\Models\Team;
use App\Models\Testimonial;
use App\Services\Helper;

class FrontendController extends Controller
{
    public function teamindex()
    {
        $data = Team::orderBy('id', 'asc')->paginate(10);

        return view('pages.frontend.team', compact('data'));
    }
    public function aboutindex()
    {
        $data = About::orderBy('id', 'asc')->paginate(10);

        return view('pages.frontend.about', compact('data'));
    }
    public function contactindex()
    {
        $gmap_link = Helper::get_static_option('gmap_link');
        $contacte_title = Helper::get_static_option('contacte_title');
        $contacte_logo = Helper::get_static_option('contacte_logo');
        $contacte_description = Helper::get_static_option('contacte_description');
        $contacta_logo = Helper::get_static_option('contacta_logo');
        $contacta_description = Helper::get_static_option('contacta_description');
        $contacta_title = Helper::get_static_option('contacta_title');
        $contactp_logo = Helper::get_static_option('contactp_logo');
        $contactp_title = Helper::get_static_option('contactp_title');
        $contactp_description = Helper::get_static_option('contactp_description');
        $data = Contact::orderBy('id', 'asc')->paginate(10);

        return view('pages.frontend.contact', compact(
            'data',
            'contacte_title',
            'contacte_logo',
            'contacte_description',
            'contacta_title',
            'contacta_logo',
            'contacta_description',
            'contactp_title',
            'contactp_logo',
            'contactp_description',
            'gmap_link'
        ));
    }
    public function servicesindex()
    {
        $data = Services::orderBy('id', 'asc')->paginate(10);
        $services_title = Helper::get_static_option('services_title');
        $services_description = Helper::get_static_option('services_description');
        $services_button = Helper::get_static_option('services_button');
        return view('pages.frontend.services', compact('data',
            'services_title',
            'services_description',
            'services_button'));
    }
    public function portfolioindex()
    {
        $data = Portfolio::orderBy('id', 'asc')->paginate(10);

        return view('pages.frontend.portfolio', compact('data'));
    }

    public function homepageindex()
    {
        $data = Home::orderBy('id', 'asc')->paginate(10);
        $newsletter = Newsletter::orderBy('id', 'asc')->paginate(10);
        $testimonial = Testimonial::orderBy('id', 'asc')->paginate(10);
        $about = About::orderBy('id', 'asc')->paginate(10);
        $services = services::orderBy('id', 'asc')->paginate(10);
        $portfolio = Portfolio::orderBy('id', 'asc')->paginate(10);
        $contact = Contact::orderBy('id', 'asc')->paginate(10);
        $team = Team::orderBy('id', 'asc')->paginate(10);
        return view('pages.frontend.home', compact('data', 'newsletter', 'testimonial', 'about', 'services', 'portfolio', 'contact', 'team'));
    }
}
