<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPageController extends Controller
{
    //
    public function home(){
        return view('static-page/home');
    }
    public function help(){
        return view('static-page/help');
    }
    public function about(){
        return view('static-page/about');
    }
}
