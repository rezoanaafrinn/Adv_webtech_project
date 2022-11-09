<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $message = "This is the history of our company.";
        return view('hello')->with('message', $message);
    }
}
