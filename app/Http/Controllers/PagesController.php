<?php

namespace App\Http\Controllers;

use \Request;
use App\Item;
use \Session;

class PagesController extends Controller
{
    public function __construct(){

        $this->middleware('guest');

    }

    public function about(){

        $title = "about";
        return view('pages.about', compact('title'));

    }
}
