<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddLanguage;

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
        return view('home');
    }

    public function store(Request $request){
        $new_addlanguage = new AddLanguage();

        $file = $request->file('image');
        $random_name = time();
        $destinationPath = 'images/languages/';
        $extension = $file->getClientOriginalExtension();
        $filename = $random_name.'-'.$file->getClientOriginalName();
        $uploadSuccess = $request->file('image')->move($destinationPath, $filename);

        $new_addlanguage->title = $request->title;
        $new_addlanguage->description = $request->description;
        $new_addlanguage->image = $filename;
        $new_addlanguage->save();
    }
}
