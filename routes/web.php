<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('/', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'AuthLogin']);


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('logout', [AuthController::class, 'logout']);


Route::get('/admin/admin/list',function(){
    return view('admin.admin.list');
});
