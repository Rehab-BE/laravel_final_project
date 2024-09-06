<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'controller' => PublicController::class,
], function () {

    Route::get('index', 'index')->name('index');
    Route::get('contact', 'contact')->name('contact');
    Route::get('testimonials', 'testimonial')->name('testimonial');
    Route::get('topics-detail', 'topic_detail')->name('topic_detail');
    Route::get('topics-listing', 'topic_list')->name('topic_list');

});


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
