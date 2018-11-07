<?php

namespace App\Http\Controllers;

use App\Ville;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    //
    public function index($v)
    {
        $ville = Ville::where('name', $v)->first();
        if ($ville){
            return view('photo-rouen', compact('ville'));
        } else {
            return view('home');
        }
    }
}
