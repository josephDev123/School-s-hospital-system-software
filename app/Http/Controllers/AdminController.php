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

    public function addDoctor(){
        return view('admin.layouts.pages.add_doctor');
    }

    public function viewDoctor(){
        return view('admin.layouts.pages.view_doctor');
    }

    public function staff(){
        return view('admin.layouts.pages.view_staff');
    }

    public function AddStaff(){
        return view('admin.layouts.pages.add_staff');
    }
}
