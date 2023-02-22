<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HomeController extends Controller
{
    public function index() 
    {
        return view('pages.home');
    }
    public function eselon4() 
    {
        return view('pages.home.es4');
    }
    public function eselon3() 
    {
        return view('pages.home.es3');
    }
    public function eselon2() 
    {
        return view('pages.home.es2');
    }
    public function bendmat() 
    {
        return view('pages.home.bendmat');
    }
    public function ka_gudang() 
    {
        return view('pages.home.ka-gudang');
    }
    public function user() 
    {
        return view('pages.home.user');
    }


}