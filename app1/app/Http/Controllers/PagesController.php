<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
        $title = 'Welcome to Laravel!';
        return view('welcome', compact('title'));
        //return view("index", ["title"=>$title]);
    }

    public function index(){
        $title = 'welcome to index page!';
        return view('index', compact('title'));
        //return view("index", ["title"=>$title]);
    }

    public function about(){
        $data = array(
            'title' => 'This is about page',
            'services' => ['developing', 'web designing', 'software engineering']
        );
        //return view('about', compact('data'));
        return view('about')->with($data);
    }
}
