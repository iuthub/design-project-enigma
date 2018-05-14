<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function shop()
    {
        return view('shop');
    }

    public function product($id)
    {
        $results = DB::select('select * from products');
        return view('product', ['descr' => $results[$id]->descript, 'name' => $results[$id]->name, 'price' => $results[$id]->price, 'spec' => $results[$id]->spec, 'id' => $results[$id]->id]);
    }
}
