<?php

use App\Http\Controllers\admin\admincontroller;
use App\Http\Controllers\admin\Blogcontroller;
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
Route::post('/contactmassage',[homepagecontroller::class,'contactmassage']);
Route::get('/post',[homepagecontroller::class,'posta']);
Auth::routes([
    'register'=> false
]);


Route::get('/admin/dashboard',[admincontroller::class,'dashboard']);
Route::get('/admin/edit-setting',[admincontroller::class,'editsetting']);
Route::post('/admin/dashboard/settingupdate',[admincontroller::class,'settingupdate']);
Route::get('/admin/dashboard/contactmassage',[admincontroller::class,'showmassage']);
Route::get('/admin/dashboard/deletemassage/{id}',[admincontroller::class,'deletemassage']);

Route::get('/admin/logout',[admincontroller::class,'adminlogout']);

Route::get('blog/post',[Blogcontroller::class,'createblog']);

Route::post('blog/store-blog',[Blogcontroller::class,'storeblog']);
Route::get('/admin/blog-list',[Blogcontroller::class,'bloglist']);
Route::get('/admin/blog-delete/{id}',[Blogcontroller::class,'deleteBlog']);
Route::get('/admin/blog-edit/{id}',[Blogcontroller::class,'editBlog']);
Route::post('/admin/blog-update/{id}',[Blogcontroller::class,'updateBlog']);
