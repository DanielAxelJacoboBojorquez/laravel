<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Add_Language;

class LanguagesController extends Controller
{
    public function store(Request $request){
        $new_add_language = new Add_Language();

        $file = $request->file('image');
        $random_name = time();
        $destinationPath = 'images/languages/';
        $extension = $file->getClientOriginalExtension();
        $filename = $random_name.'-'.$file->getClientOriginalName();
        $uploadSuccess = $request->file('image')->move($destinationPath, $filename);

        $new_add_language->title = $request->title;
        $new_add_language->description = $request->description;
        $new_add_language->image = $filename;
        $new_add_language->save();

        return redirect()->route('home');
    }
}
