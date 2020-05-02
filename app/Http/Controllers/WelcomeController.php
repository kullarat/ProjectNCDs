<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('foods.main');
    }

    public function about()
    {
        return view('foods.about');
    }
    
    public function contact()
    {
        return view('foods.contact');
    }

    public function article()
    {
        return view('foods.article');
    }

    public function disease()
    {
        return view('foods.disease');
    }

    public function profile()
    {
        return view('foods.profile');
    }

    public function gallery()
    {
        return view('foods.gallery');
    }

    public function chart()
    {
        return view('foods.chart');
    }
}
