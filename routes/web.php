<?php

use Illuminate\Support\Facades\Route;

Route::get('/hihi', function () {
    return view('welcome');
});

Route::get('admin/posts/example', array('as'=>'admin.home' ,function () {

    $url = route('admin.home');

    return "this url is ". $url;

}));