<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/roles', [RoleController::class, 'roles']);
