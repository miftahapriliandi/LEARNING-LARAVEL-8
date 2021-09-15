<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

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
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Miftah Apriliandi",
        "email" => "miftahapriliandi@gmail.com",
        "title" => "About",
        "active" => 'about'
    ]);
});


Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view(
        'categories',
        [
            'title' => 'Post Categories',
            'active' => 'categories',
            'categories' => Category::all()
        ]
    );
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view(
        'posts',
        [
            'title' => "Post by Category : $category->name",
            'active' => 'categories',
            'posts' => $category->posts,
        ]
    );
});

Route::get('/authors/{author:username}', function (User $author) {
    return view(
        'posts',
        [
            'title' => "Post by Author : $author->name",
            'posts' => $author->post->load('category', 'author')
        ]
    );
});
