<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('validate.json')->post('/api/data', function (Request $request) {
    return response()->json(['message' => 'Success']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});