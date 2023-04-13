<?php

use App\Models\Category;
use App\Models\Post;
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

    //find all the  posts with their category loaded and not have to load every time
    return view('posts',[
        'posts' => Post::with('category')->get()
    ]);
});


Route::get('posts/{post:slug}', function (Post $post) { // Post::where('slug',$post)->firstOFail()
    //find a post by its slug and pass it to a view called "posts"

    return view('post',[
        'post' => $post
    ]);

});

Route::get('categories/{category:slug}', function (Category $category) { // Post::where('slug',$category)->category

    return view('posts',[
        'posts' => $category->posts
    ]);

});

Route::get('categories/{category:slug}', function (Category $category) { // Post::where('slug',$category)->category

    return view('posts',[
        'posts' => $category->posts
    ]);
});
