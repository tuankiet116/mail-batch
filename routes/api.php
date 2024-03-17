<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::post('/webhook/google-form', function (Request $request) {
    Log::debug("Request", $request->toArray());
});
