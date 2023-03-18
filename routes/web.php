<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostsController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('checkLogin');

Route::resource('/blog', PostsController::class);


Route::get('/index', function () {
    return view('frontsite.index');
})->name('frontsite.index')->middleware('checkLogin');

Route::get('/about', function () {
    return view('frontsite.about');
})->name('frontsite.about');

Route::get('/contact', function () {
    return view('frontsite.contact');
})->name('frontsite.contact');

Route::get('/category', function () {
    return view('frontsite.category');
})->name('frontsite.category');

Route::get('/single-post', function () {
    return view('frontsite.single-post');
})->name('frontsite.single-post');

Route::get('/search-result', function () {
    return view('frontsite.search-result');
})->name('frontsite.search-result');


Route::group(['prefix'=>'dashboard', 'as'=>'dashboard.', 'middleware'=>'auth'],function () {
//    Route::get('/settings', function ()  {
//        return  view('frontsite.settings');
//    })->name('settings');
//
//
//
//    Route::post('/settings/update', '\App\Http\Controllers\Dashboard\SettingController@update')->name('settings.update');
});

Route::get('/settings', function ()  {
    return  view('frontsite.settings');
})->name('settings');



Route::post('/settings/update', '\App\Http\Controllers\Dashboard\SettingController@update')->name('settings.update');

Route::get('/users/all', [UserController::class, 'getUsersDatatable'])->name('users.all');
Route::post('/users/delete', [UserController::class, 'delete'])->name('users.delete');

Route::get('/category/all', [CategoryController::class, 'getCategoriesDatatable'])->name('category.all');
Route::post('/category/delete', [CategoryController::class, 'delete'])->name('category.delete');

Route::get('/posts/all', [PostsController::class, 'getPostsDatatable'])->name('posts.all');
Route::post('/posts/delete', [PostsController::class, 'delete'])->name('posts.delete');

Route::resources([
    'users' => UserController::class,
    'category' => CategoryController::class,
    'posts' => PostsController::class,
]);

Route::resource('users', \App\Http\Controllers\Dashboard\UserController::class);

 Route::get('/{page}',  '\App\Http\Controllers\AdminController@index');


