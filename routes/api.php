<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentApiController;
use App\Http\Controllers\StudentAddressApiController;

Route::get('getData/{id?}', [StudentApiController::class, 'getStudentData']);
Route::get('getAddress/{id?}', [StudentAddressApiController::class, 'getStudentAddress']);
Route::post('addStudentData', [StudentApiController::class, 'addStudentData']);
Route::post('addStudentAddress', [StudentAddressApiController::class, 'addStudentAddress']);
Route::put('updateStudentData', [StudentApiController::class, 'updateStudentData']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
