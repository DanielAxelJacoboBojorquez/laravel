<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;  

class FrontendController extends Controller
{
    public function index(){
        $languages = Language::all();
        return view('welcome', ['languages' => $languages]);
    }
}
