<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/{dir?}/{file?}', function ($dir = 'home', $file = 'index') {
    if ($dir === 'layouts') {
        return abort(404);
    } elseif (View::exists($dir.'.'.$file)) {
        return view($dir.'.'.$file);
    } else {
        return abort(404);
    }
});
