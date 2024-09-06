<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('users',[UserController::class, 'user'])->name('user');
Route::get('testimonials',[TestimonialController::class, 'testimonial'])->name('testimonial');
Route::get('messages',[AdminController::class, 'message'])->name('message');

Route::group([
    'controller' => TopicController::class,
], function () 
{
    Route::get('topics','index')->name('topics.index');
    Route::get('topics/create','create')->name('topics.create');
    Route::post('topics','store')->name('topics.store');
}
);

Route::group([
    'controller' => CategoryController::class,
], function () 
{
    Route::get('categories','index')->name('categories.index');
    Route::get('categories/create','create')->name('categories.create');
    Route::post('categories','store')->name('categories.store');
}
);