<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

// admin
Route::get('/', [AdminController::class, 'index']);

// template
Route::get('/auth/login/admin/template/{dashboard}', [AdminController::class, 'template']);





















