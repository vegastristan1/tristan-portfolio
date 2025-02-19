<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimationController extends Controller
{
    public function index_boxes()
    {
        return view('pages.workspace.animation.boxes');
    }

    public function index_boxes_2()
    {
        return view('pages.workspace.animation.boxes-2');
    }

    public function index_raindrop()
    {
        return view('pages.workspace.animation.raindrop');
    }

    public function index_bubble()
    {
        return view('pages.workspace.animation.bubble');
    }

    public function index_test()
    {
        return view('pages.workspace.animation.test');
    }
}
