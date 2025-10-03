<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;

Route::redirect('/','/admin');

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin','home')->name('admin.home');
});

Route::get( '/cadastrar',[Usercontroller::class,'create'])
    ->name('user.create');

Route::post('cadastrar', [UserController::class, 'store'])
->name('user.store');
