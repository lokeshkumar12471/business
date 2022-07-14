<?php

use App\Http\Controllers\backend\StaticOptionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|+
 */

Route::group(['namespace' => 'App\Http\Controllers\frontend'], function () {

    Route::get('', 'FrontendController@homepageindex')->name('#home');
    Route::get('about', 'FrontendController@aboutindex')->name('#about');
    Route::get('team', 'FrontendController@teamindex')->name('#team');
    Route::get('services', 'FrontendController@servicesindex')->name('#services');
    Route::get('portfolio', 'FrontendController@portfolioindex')->name('#portfolio');
    Route::get('contact', 'FrontendController@contactindex')->name('#contact');
});

//static routes
Route::post('admin/staticoptions', [StaticOptionController::class, 'submitoptions'])->name('admin.static-options');
Route::get('admin/contact/statics', [StaticOptionController::class, 'contactoptionsindex'])->name('admin.contact.static');
Route::get('admin/services/statics', [StaticOptionController::class, 'servicesoptionsindex'])->name('admin.services.static');
Route::get('admin/testimonial', function () {
    return view('pages.backend.testimonial');
})->name('admin.homepage');
Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\backend'], function () {
    // about routes
    Route::get('about', 'AuthController@about')->name('admin.about');
    Route::get('about/edit/{id}', 'AboutController@edit')->name('admin.about.edit');
    Route::post('about/update/{id}', 'AboutController@update')->name('admin.about.update');
    Route::get('about/delete/{id}', 'AboutController@delete')->name('admin.about.delete');
    Route::get('about/view/{id}', 'AboutController@show')->name('admin.about.view');
    Route::post('about/store', 'AboutController@store')->name('admin.about.store');
    Route::get('about/create', 'AboutController@create')->name('admin.about.create');

    //contact routes
    Route::get('contact', 'AuthController@contact')->name('admin.contact');
    Route::post('contact/store', 'ContactController@store')->name('admin.contact.store');
    Route::get('contact/view/{id}', 'ContactController@show')->name('admin.contact.view');
    Route::get('contact/create', 'ContactController@create')->name('admin.contact.create');

    //Testimonial routes
    Route::post('testimonial/store', 'TestimonialController@store')->name('admin.testimonial.store');
    Route::get('testimonial/edit/{id}', 'TestimonialController@edit')->name('admin.testimonial.edit');
    Route::post('testimonial/update/{id}', 'TestimonialController@update')->name('admin.testimonial.update');
    Route::get('testimonial/view/{id}', 'TestimonialController@show')->name('admin.testimonial.view');
    Route::get('testimonial/delete/{id}', 'TestimonialController@delete')->name('admin.testimonial.delete');
    Route::get('testimonial/create', 'TestimonialController@create')->name('admin.testimonial.create');
    Route::get('testimonial', 'AuthController@testimonial')->name('admin.testimonial');

    //newsletter routes
    Route::get('newsletter', 'AuthController@newsletter')->name('admin.newsletter');
    Route::post('newsletter/store', 'NewsletterController@store')->name('admin.newsletter.store');
    Route::get('newsletter/view/{id}', 'NewsletterController@show')->name('admin.newsletter.view');
    Route::get('newsletter/create', 'NewsletterController@create')->name('admin.newsletter.create');

    //home routes
    Route::get('', 'DashboardController@index')->name('admin.dashboard');
    Route::get('home', 'AuthController@home')->name('admin.home');
    Route::post('home/store', 'HomeController@store')->name('admin.home.store');
    Route::get('home/edit/{id}', 'HomeController@edit')->name('admin.home.edit');
    Route::post('home/update/{id}', 'HomeController@update')->name('admin.home.update');
    Route::get('home/view/{id}', 'HomeController@show')->name('admin.home.view');
    Route::get('home/delete/{id}', 'HomeController@delete')->name('admin.home.delete');
    Route::get('home/create', 'HomeController@create')->name('admin.home.create');

    //team routes
    Route::get('team', 'AuthController@team')->name('admin.team');
    Route::post('team/store', 'TeamController@store')->name('admin.team.store');
    Route::get('team/edit/{id}', 'TeamController@edit')->name('admin.team.edit');
    Route::post('team/update/{id}', 'TeamController@update')->name('admin.team.update');
    Route::get('team/view/{id}', 'TeamController@show')->name('admin.team.view');
    Route::get('team/delete/{id}', 'TeamController@delete')->name('admin.team.delete');
    Route::get('team/create', 'TeamController@create')->name('admin.team.create');

    //portfolio routes
    Route::get('portfolio', 'AuthController@portfolio')->name('admin.portfolio');
    Route::any('portfolio/store', 'PortfolioController@store')->name('admin.portfolio.store');
    Route::get('portfolio/edit/{id}', 'PortfolioController@edit')->name('admin.portfolio.edit');
    Route::post('portfolio/update/{id}', 'PortfolioController@update')->name('admin.portfolio.update');
    Route::get('portfolio/view/{id}', 'PortfolioController@show')->name('admin.portfolio.view');
    Route::get('portfolio/delete/{id}', 'PortfolioController@delete')->name('admin.portfolio.delete');
    Route::get('portfolio/create', 'PortfolioController@create')->name('admin.portfolio.create');

    //services routes
    Route::get('services', 'AuthController@services')->name('admin.services');
    Route::post('services/store', 'ServicesController@store')->name('admin.services.store');
    Route::get('services/edit/{id}', 'ServicesController@edit')->name('admin.services.edit');
    Route::post('services/update/{id}', 'ServicesController@update')->name('admin.services.update');
    Route::get('services/view/{id}', 'ServicesController@show')->name('admin.services.view');
    Route::get('services/delete/{id}', 'ServicesController@delete')->name('admin.services.delete');
    Route::get('services/create', 'ServicesController@create')->name('admin.services.create');

    Route::get('login', 'AuthController@index')->name('login');
    Route::any('post-login', 'AuthController@postLogin')->name('postlogin');
    Route::get('register', 'AuthController@register')->name('admin.register');
    Route::any('postregistration', 'AuthController@postRegistration')->name('admin.postregistration');
    Route::get('dashboard', 'AuthController@dashboard')->name('dashboard');
    Route::any('logout', 'AuthController@logout')->name('admin.logout');

});
require __DIR__ . '/auth.php';