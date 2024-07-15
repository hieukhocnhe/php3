<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\BookController;
use App\Livewire\Counter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('home', function () {
//     return view('home');
// });

// Route::get('product/{id}', function ($id) {
//     return "Product id : $id";
// })->where('id','[0-9]+');

// Route::view('about', 'about')->name('page.about');

// Route::get('/user/{id}/comment/{comment_id?}', function ($id, $comment_id = null) {
//     return "User id : $id - Comment id : $comment_id";
// });

// Route::prefix('admin')->group(function () {
//     Route::get('products', function () {
//         return "Products";
//     });
//     Route::get('users', function () {
//         return "Users";
//     });
// });

// Route::get('/counter', Counter::class);

// //Cập nhật
// DB::table('posts')->where('id', '=', 1)->update([
//     'title' => 'Post 1',
//     'content' => 'Content 1',
//     'view' => 1000
// ]); // Trả về số lượng bản ghi được cập nhật

// DB::table('posts')->delete(7);

// // Sử dụng query builder
// Route::get('/posts', function () {
//     // $posts = DB::table('posts')->limit(10)->get();
//     $posts = DB::table('posts')->select('id', 'title', 'view')->where('view', '>', 800)->get();
//     dd($posts);
// });

// $posts = DB::table('posts')
//     ->join('categories', 'posts.cate_id', '=', 'categories.id')
//     ->get();
// dd($posts);

// Route::get('/post-list', function () {
//     $posts = DB::table('posts')->limit(10)->get();
//     return view('post-list', compact('posts'));
// });

// Route::prefix('category')->group(function() {
//     Route::get('/list', [CategoryController::class, 'index'])->name('category.index');
// });

Route::get('/', [BookController::class, 'index'])->name('books.index');

Route::get('/create', [BookController::class, 'create'])->name('book.create');

Route::post('/create', [BookController::class, 'store'])->name('book.store');

Route::get('/edit/{id}', [BookController::class, 'edit'])->name('book.edit');

Route::put('/edit/{id}', [BookController::class, 'update'])->name('book.update');

Route::get('/delete/{id}', [BookController::class, 'destroy'])->name('book.destroy');




