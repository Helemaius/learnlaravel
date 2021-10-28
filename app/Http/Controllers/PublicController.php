<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function home(){
        $name = "Hellu";
        $array = ['piim', 'sai', 'leib'];
       return view('home', compact('name', 'array'));
    }

    public function posts(){
        $posts =DB::table('posts')->where('title','LIKE', '%a.')->where('id', '<', 500)->limit(10)->orderBy('title', 'desc')->get();

        return view('posts', compact('posts'));
    }
}


