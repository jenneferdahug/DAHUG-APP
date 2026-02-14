<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Services\UserService;

Route::get('/', function () {
    return "Hello, World!";
});

Route::get('/show-users', [UserController::class, 'show']);

// Service container
Route::get('/test-container', function (Request $request) {
    $input = $request->input('key');
    return $input;
});

// Service provider
Route::get('/test-provider', function (UserService $userService) {
    return $userService->listUsers();
});