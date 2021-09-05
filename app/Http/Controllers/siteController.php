<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    function home(){
        
        return view('HomePage');
    }

    function about(){

        return view('AboutPage');
    }

    function contact(){

        return view('ContactPage');

    } 

    function google(){

        return view('google.com');

    } 


}
