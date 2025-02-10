<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyHelloController extends Controller
{
    public function index() {
        return view('hello', ['title' => 'Ah, here we go again )']);
    }
}
