<?php

use Illuminate\Support\Facades\Route;

// Models
use App\Models\House;

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

Route::get('/', function () {
    $houses = House::all();

    dd($houses);
});

Route::get('/contatti', function () {
    return view('contact');
});
