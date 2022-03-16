<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $logo_sliders = App\LogoSlider::all();
    return view('index', compact('logo_sliders'));
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
