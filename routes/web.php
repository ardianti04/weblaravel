<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\EdulevelController;
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
Route::get('login', function () {
    return view('login');
});


Route::get('edulevel', [EdulevelController::class, 'data']);

Route::get('edulevel.add',[EdulevelController::class,'add']);
Route::post('edulevel',[EdulevelController::class,'addProcess']);

// Route::get('/',[TemplateController::class,'index']);

// Route::get('/home',[HomeController::class,'index']);
