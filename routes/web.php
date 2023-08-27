<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
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

Route::view('posts/create' , 'posts.create');

Route::post('/posts' , function () {
    DB::table('posts')->insert([
        'title' => request('title'),
        'body' => request('body'),
        'author' => request('author'),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ]);
    return back();
});

Route::get('/posts' , function () {
    $posts = DB::table('posts')->latest()->get();
    return view('posts.index' , compact('posts'));
});

Route::get('/posts/{id}' , function ($id) {
    $post = DB::table('posts')->find($id);
    return view('posts.show' , compact('post') );
});






