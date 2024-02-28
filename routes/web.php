<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [homeController::class,'index']);

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/post', function () {
//     return view('post');
// });

// Route::get('/awal', 'TemplateController@awal');

// Route::get('/', function () {
//     return view('index');
// });
Route::get('home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('main');
});

Route::get('edulevels','EdulevelController@data');
// Route::get('/',[TemplateController::class,'index']);

// Route::get('/home',[HomeController::class,'index']);
