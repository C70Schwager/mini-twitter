<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index(){
        return view('tweets.index');
    }

    public function create(){
        return view('tweets.create');
    }

    public function show(){
        return view('tweets.show');
    }
}
