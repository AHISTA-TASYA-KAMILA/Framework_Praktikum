<?php

use GuzzleHttp\Middleware;
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

Route::get('/', function () {
    return view('welcome');
});

//Rute Get Sederhana
route::get('/hello', function(){
    return 'Hello,World';
});

//Rute Dengan Parameter
Route::get('/user/{id}', function ($id){
    return "User ID: ".$id;
});

//Rute dengan parameter opsional
Route::get('/user/{name?}', function ($name = 'Guest'){
    return "Hello,".$name;
});

//Rute dengan nama
Route::get('/profile',function(){
    return 'This is the profile page.';
})->name('profile');

//Menggunakan rute bernama untuk pengalihan
Route::get('/redirect-to-pprofile', function(){
    return redirect()->route('profile');
});

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', function(){
        return 'Admin Dashboard';
    });

    Route::get('/profile', function(){
        return 'Admin Profile';
    });
});

Route::get('/dashboard',function(){
    return 'Welcome to your dashboard!';
})->Middleware('auth');

