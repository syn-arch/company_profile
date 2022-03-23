<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Portfolio;
use App\Models\Client;
use App\Models\Team;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $about = About::first();
        $services = Service::all();
        $portfolios = Portfolio::all();
        $clients = Client::all();
        $contact = Contact::first();

        return view('home.index', compact(
            'sliders',
            'about',
            'services',
            'portfolios',
            'clients',
            'contact',
        ));
    }

    public function about()
    {
        $about = About::first();
        $clients = Client::all();
        $teams = Team::all();
        $contact = Contact::first();
        $services = Service::all();

        return view('home.about', compact(
            'about',
            'clients',
            'contact',
            'services',
            'teams',
        ));
    }

    public function team()
    {
        $teams = Team::all();
        $contact = Contact::first();
        $services = Service::all();

        return view('home.team', compact(
            'teams',
            'contact',
            'services',
        ));
    }

    public function portfolio()
    {
        $portfolios = Portfolio::all();
        $contact = Contact::first();
        $services = Service::all();

        return view('home.portfolio', compact(
            'portfolios',
            'contact',
            'services',
        ));
    }

    public function contact()
    {
        $contact = Contact::first();
        $services = Service::all();

        return view('home.contact', compact(
            'contact',
            'services',
        ));
    }

    public function testimonials()
    {
        $testimonials = Testimonial::all();
        $contact = Contact::first();
        $services = Service::all();

        return view('home.testimonials', compact(
            'testimonials',
            'contact',
            'services',
        ));
    }

    public function services()
    {
        $services = Service::all();
        $contact = Contact::first();

        return view('home.services', compact(
            'services',
            'contact',
        ));
    }
}
