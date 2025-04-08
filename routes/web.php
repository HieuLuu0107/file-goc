<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // hoặc return 'Laravel đang chạy!';
});

Route::get('/test', function () {
    return 'Đây là trang test';
});
