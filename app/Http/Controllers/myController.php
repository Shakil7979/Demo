<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function __invoke(){
        return "I am a single Controller baby";
    }
}
