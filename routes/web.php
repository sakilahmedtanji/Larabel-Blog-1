<?php

use App\Http\Controllers\admin\admincontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\homepagecontroller;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',[homepagecontroller::class,'index']);
Route::get('/aboutme',[homepagecontroller::class,'aboutme']);
Route::get('/contact',[homepagecontroller::class,'contact']);
Route::get('/post',[homepagecontroller::class,'posta']);
Auth::routes([
    'register'=> false
]);


Route::get('/admin/dashboard',[admincontroller::class,'dashboard']);
Route::get('/admin/logout',[admincontroller::class,'adminlogout']);
