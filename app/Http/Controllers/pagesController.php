<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
class pagesController extends Controller
{
    // home
    public function home(){
        return view('welcome');
    }
    // about
    public function about(){
        return view('about');
    }
    // contact
    public function contact(){

        return view('contact');
    }
}
