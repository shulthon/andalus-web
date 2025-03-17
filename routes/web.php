<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        "name"=>"Andalus",
        "tes"=>"OK bos"
    ]);
});

Route::get('/our-service', function () {
    return view('service',[
        "name"=>"Andalus",
        "tes"=>"OK bos"
    ]);
});

Route::get('/our-product', function () {
    return view('product',[
        "name"=>"Andalus",
        "tes"=>"OK bos"
    ]);
});

Route::get('/media-partner', function () {
    return view('media',[
        "name"=>"Andalus",
        "tes"=>"OK bos"
    ]);
});


Route::get('/contact-us', function () {
    return view('contact',[
        "name"=>"Andalus",
        "tes"=>"OK bos"
    ]);
});