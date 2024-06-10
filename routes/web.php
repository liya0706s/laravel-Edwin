<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;  //確保引入控制器

// Route::get('/hihi', function () {
//     return view('welcome');
// });

// Route::get('admin/posts/example', array('as'=>'admin.home' ,function () {

//     $url = route('admin.home');

//     return "this url is ". $url;

// }));

Route::get('/post/{id}', [PostsController::class, 'index']);  
//使用控制器類和方法的數組形成

Route::resource('posts', PostsController::class);
// 使用控制器类的完全限定名定义资源路由

// Route::get('/posts/{id}', [PostsController::class, 'show']);  
