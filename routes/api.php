<?php

use illuminate\Http\Request;
use illuminate\Support\Facades\Route;

Route::middleeware('auth:api')->get('/user',
function (Request $request) {
    return $request->user();
});