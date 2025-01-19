<?php

use Illuminate\Support\Facades\Route;

Route::get('builders/catalog', function () {
    return view('builders.catalog');
});

Route::get('builders/plumblerservice', function () {
    return view('builders.plumblerservice');
});
Route::get('builders/tilerservice', function () {
    return view('builders.tilerservice');
});

Route::get('builders/electricianservice', function () {
    return view('builders.electricianservice');
});
Route::get('builders/plasterer', function () {
    return view('builders.plasterer');
});
Route::get('builders/painter', function () {
    return view('builders.painter');
});
Route::get('builders/carpenter', function () {
    return view('builders.carpenter');
});