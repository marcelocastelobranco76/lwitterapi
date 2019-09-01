<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
     /*
    *Tweet lists
    */
    public function index() {
        return view('tweetDashBoard');
    }
}
