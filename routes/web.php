<?php

use App\Http\Controllers\PostController;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
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
    return view('home', [ 
        "title" => "Home",
        "name" => "Fajrul Aslim" 
    ]);
});

Route::get('/about', function () {
    return view('about', [ 
        "title" => "About",
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('/blogs/categories', [
        "title" => "Post Categories",
        "categories" => Category::all(),
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category){
    return view('/blogs/posts', [
        "title" => "Blogs",
        "heading" => "Posts By Category: $category->name",
        "posts" => $category->posts->load('author', 'category'),
        "category" => $category->name,
    ]);
});
Route::get('/author/{author:username}', function (User $author){
    return view('/blogs/posts', [ 
        "title" => "Blogs",
        "heading" => "Posts By Author: $author->name",
        "posts" => $author->posts->load('author', 'category')
    ]);
});
