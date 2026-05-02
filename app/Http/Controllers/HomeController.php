<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index()
    {
        $services = Service::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

       return view('welcome', compact('services'));
    }
     public function about()
    {
        $services = Service::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

       return view('about', compact('services'));
    }
     public function contact()
    {
        $services = Service::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

       return view('contact', compact('services'));
    }
}
