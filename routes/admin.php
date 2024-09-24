<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\MessageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// group(['middleware' => 'verified'], 
Route::middleware('auth')->group (function () {
    Route::group(
        [
            'controller' => TopicController::class,
        ],
        function () {
            Route::get('topics', 'index')->name('topics.index');
            Route::get('topics/create', 'create')->name('topics.create');
            Route::post('topics/store', 'store')->name('topics.store');
            Route::get('topics/{id}/show', 'show')->name('topics.show');
            Route::get('topics/edit/{id}', 'edit')->name('topics.edit');
            Route::put('topics/update/{id}', 'update')->name('topics.update');
            Route::delete('topics/{id}/delete', 'destroy')->name('topics.delete');
        }
    );

    Route::group(
        [
            'controller' => CategoryController::class,
        ],
        function () {
            Route::get('categories', 'index')->name('categories.index');
            Route::get('categories/create', 'create')->name('categories.create');
            Route::post('categories', 'store')->name('categories.store');
            Route::get('categories/edit/{id}', 'edit')->name('categories.edit');
            Route::put('categories/update/{id}', 'update')->name('categories.update');
            Route::delete('categories/delete/{id}', 'destroy')->name('categories.delete');
        }
    );

    Route::group(
        [
            'controller' => MessageController::class,
        ],
        function () {
            Route::get('messages','index')->name('messages.index');
            Route::get('messages/{id}/show', 'show')->name('messages.show');
            Route::delete('messages/{id}', 'destroy')->name('messages.destroy');
        }
    );

    Route::group(
        [
            'controller' => TestimonialController::class,
        ],
        function () {
            Route::get('testimonials', 'index')->name('testimonials.index');
            Route::get('testimonials/create', 'create')->name('testimonials.create');
            Route::post('testimonials', 'store')->name('testimonials.store');
            Route::get('testimonials/edit/{id}', 'edit')->name('testimonials.edit');
            Route::put('testimonials/update/{id}', 'update')->name('testimonials.update');
            Route::delete('testimonials/delete/{id}', 'destroy')->name('testimonials.delete');
        }
    );

    Route::group(
        [
            'controller' => UserController::class,
        ],
        function () {
            Route::get('users', 'index')->name('users.index');
            Route::get('users/create', 'create')->name('users.create');
            Route::post('users', 'store')->name('users.store');
            Route::get('users/edit/{id}', 'edit')->name('users.edit');
            Route::put('users/update/{id}', 'update')->name('users.update');
        }
    );
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
