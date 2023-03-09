<?php

// Website route
Route::get('/{path?}', function () {
    return view('website');
})->where('path', '[^admin]*');


// Admin route
Route::get('/admin/{path?}', function () {
    return view('admin');
})->where('path', '.*');