<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::prefix('admin')->group(function(){

    Route::get('/dashboard', [AdminController::class, 'index'])->name('Dashboard');
    //appointment
    Route::get('/appointment', [AdminController::class, 'createAppointment'])->name('create_appointment');
    Route::get('/view_appointment', [AdminController::class, 'viewAppointment'])->name('view_appointment');
    Route::get('/add_doctor', [AdminController::class, 'addDoctor'])->name('add_doctor');
    Route::get('/view_doctor', [AdminController::class, 'viewDoctor'])->name('view_doctor');
    Route::get('/staff', [AdminController::class, 'staff'])->name('staff');
    Route::get('/add_staff', [AdminController::class, 'AddStaff'])->name('add_staff');
    Route::get('/permission', [AdminController::class, 'create_permission'])->name('create_permission');
    Route::get('/register', [AdminController::class, 'register'])->name('student_registration');
    Route::get('/record', [AdminController::class, 'student_record'])->name('student_record');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
