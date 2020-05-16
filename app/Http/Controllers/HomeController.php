<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;  

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $languages = Language::all();
        return view('home', ['languages' => $languages]);
    }

    public function store(Request $request)
    {
        $new_language = new Language();

        $file = $request->file('image');
        $random_name = time();
        $destinationPath = 'images/';
        $extension = $file->getClientOriginalExtension();
        $filename = $random_name.'-'.$file->getClientOriginalName();
        $uploadSuccess = $request->file('image')->move($destinationPath, $filename);

        $new_language->title = $request->title;
        $new_language->description = $request->description;
        $new_language->image = $filename;
        $new_language->save();

        return redirect()->route('home'); 
    }
}
