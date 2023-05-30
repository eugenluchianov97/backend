<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('/auth/login', \App\Http\Controllers\API\LoginController::class);
Route::post('/auth/register', \App\Http\Controllers\API\RegisterController::class);


Route::group(['middleware' => ['cors', 'auth:sanctum']], function () {
    Route::post('/check-auth', \App\Http\Controllers\API\CheckAuthController::class);
    Route::post('/auth/logout', \App\Http\Controllers\API\LogoutController::class);

    Route::get('/users', function(Request $request) {
        $users = User::all();
        return  response()->json(['users' => $users]);
    });
});
