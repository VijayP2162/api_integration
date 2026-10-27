<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Register\Masterregister;


// Login page
Route::get('/', function () {
    return view('login');
})->name('login');


Route::get('/test-controller', function () {
    return [
        'file' => file_exists(app_path('Http/Controllers/Dashboard.php')),
        'class' => class_exists(\App\Http\Controllers\Dashboard::class),
    ];
});

// Login
Route::post('/authenticate', [Masterregister::class, 'authenticate'])
    ->name('authenticate');


// Register page
Route::get('/master_register', [Masterregister::class, 'master_register'])
    ->name('master_register');


// Register data
Route::post('/register_data', [Masterregister::class, 'register_data'])
    ->name('register_data');


// Protected routes
Route::middleware('auth')->group(function () {

    Route::get('/Dashboard', [Dashboard::class, 'dashboard'])
        ->name('Dashboard');

    Route::get('/Employee_list', [Masterregister::class, 'Employee_list'])
        ->name('Employee_list');

    Route::put('/edit_employee_details/{id}', [Masterregister::class, 'edit_employee_details'])
        ->name('edit_employee_details');

    Route::post('/logout', function (Request $request) {

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');

    })->name('logout');
});