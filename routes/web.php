<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'controller' => PublicController::class,
], function () {

    Route::get('index', 'index')->name('index');
    Route::get('public_testimonials', 'test')->name('test');
    Route::get('topics-detail', 'topic_detail')->name('topic_detail');
    Route::get('topics-listing', 'topic_list')->name('topic_list');
});

Route::group([
    'controller' => ContactController::class,
], function () {
    Route::get('contact', 'contact')->name('contact');
    Route::post('contact/send', 'send')->name('contact.send');
    Route::get('contact/create', 'create')->name('contact.create');
    Route::post('contact/store', 'store')->name('contact.store');
});


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
