<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // if (!Auth::check()) {
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    // }
        return view('user.master');
    }
}
