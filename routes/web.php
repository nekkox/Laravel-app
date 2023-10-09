<?php

use Illuminate\Support\Facades\Cache;
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

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/posts/{post}', function ($slug) {

    #build the path to the blog files
    $path = __DIR__ . "/../resources/posts/{$slug}.html";
    //  ddd($path);

    #check if the searched blog file exists. If not then back to the homepage
    if (!file_exists($path)) {
        // abort(404);
        return redirect('/');
    }

    #if file exists then make cache(store the file in memory) of the file content
    $post = cache()->remember("posts.{$slug}", 60, function () use ($path){
    var_dump('ccccccccc');

        #fetch the content of the file. And pass it to the view
        return file_get_contents($path);
    });

    //$post = file_get_contents($path);
    return view('post', ['post' => $post,]);
})->where('post', '[A-z-_]+');
