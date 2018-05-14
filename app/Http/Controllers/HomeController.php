<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create()
    {

    }

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function shop()
    {
        return view('shop');
    }

    public function contact()
    {
        return view('contact');
    }

    public function product()
    {
        return view('product');
    }

    public function login()
    {
        return view('login');
    }

    public function registration()
    {
        return view('registration');
    }

    public function destroy()
    {

    }
}
