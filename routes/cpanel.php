<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::domain(config('app.cms_domain'))->group(function () {

    require __DIR__ . '/auth.php';

    Route::get("/login", 'App\Http\Controllers\cms\LoginController@loginShow')->name('login');
    Route::post("/login", 'App\Http\Controllers\cms\LoginController@login')->name('cms.login.submit');

    Route::get('/forgot-password', 'App\Http\Controllers\cms\ForgotPasswordController@index')->name('cms.forgotPassword.index');


    // admin auth routes
    Route::group(['middleware' => 'auth:admin'], function () {

        Route::get('/change-password', 'App\Http\Controllers\cms\ChangePasswordController@changePassword')->name('cms.changePassword.index');
        Route::post('/change-password/{id}', 'App\Http\Controllers\cms\ChangePasswordController@passwordChange')->name('cms.password.submit');

        Route::get('/', 'App\Http\Controllers\cms\StatisticsController@index')->name("cms.statistics.index");

        Route::get('/logout', 'App\Http\Controllers\cms\LoginController@logout')->name("cms.logout");
        Route::get('/products', 'App\Http\Controllers\cms\ProductController@index')->name("cms.product.index");
        Route::get('/product/show/{id}', 'App\Http\Controllers\cms\ProductController@show')->name("cms.product.show");
        Route::get('/product/create', 'App\Http\Controllers\cms\ProductController@create')->name("cms.product.create");
        Route::post('/product/store', 'App\Http\Controllers\cms\ProductController@store')->name("cms.product.store");
        Route::get('/product/edit/{id}', 'App\Http\Controllers\cms\ProductController@edit')->name("cms.product.edit");
        Route::post('/product/update/{id}', 'App\Http\Controllers\cms\ProductController@update')->name("cms.product.update");
        Route::get('/product/delete/{id}', 'App\Http\Controllers\cms\ProductController@delete')->name("cms.product.delete");
    });
});
