<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        // if (!Auth::check()) {
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    // }
    return view('admin.layouts.pages.home');
    }

    public function createAppointment(){
        return view('admin.layouts.pages.createAppointment');
    }

    public function viewAppointment(){
        return view('admin.layouts.pages.views_appointment_details');
    }
}
