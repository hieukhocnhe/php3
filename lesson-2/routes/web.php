<?php

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
Route::get('home', function () {
    return view('home');
});

// Route::get('product/{id}', function ($id) {
//     return "Product id : $id";
// })->where('id','[0-9]+');

Route::view('about', 'about')->name('page.about');

Route::get('/user/{id}/comment/{comment_id?}', function ($id, $comment_id = null) {
    return "User id : $id - Comment id : $comment_id";
});

Route::prefix('admin')->group(function () {
    Route::get('products', function () {
        return "Products";
    });
    Route::get('users', function () {
        return "Users";
    });
});
