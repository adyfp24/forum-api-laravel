<?php

use App\Http\Middleware\Authenticate;
use App\Http\Controllers\api\v1\AuthController;
use App\Http\Controllers\api\v1\UserController;
use App\Http\Controllers\api\v1\ShortlinkController;
use Illuminate\Http\Request;

# rest api - authentication routes
Route::post('v1/login',[AuthController::class, 'Login']);
Route::post('v1/register',[AuthController::class, 'Register']);
Route::post('v1/logout',[AuthController::class, 'Logout'])->middleware('auth:api');
Route::post('v1/forget',[AuthController::class, 'Forget']);

# rest api - endpoint me
Route::get('v1/me',[UserController::class, 'Me'])->middleware('auth:api');

#
