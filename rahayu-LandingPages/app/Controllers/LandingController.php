<?php namespace App\Controllers;

class LandingController extends BaseController
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function news()
    {
        return view('news');
    }

    public function pedia()
    {
        return view('pedia');
    }

    public function contact()
    {
        return view('contact');
    }

    public function doctors()
    {
        return view('doctors');
    }

    public function login()
    {
        return view('login');
    }
}
