<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home.index');
    }
    public function about() {
        return view('info.info');
    }
    public function gallery() {
        $images = Page::orderBy('created_at')->take(24)->get();

        return view('container.container',[
            'images' => $images
        ]);
    }
    public function oneDrw($id) {
        $images = Page::where('id',$id)->first();
        return view('one_drawing.one_drw',[
            'images' => $images
        ]);
    }
}
