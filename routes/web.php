<?php

use Illuminate\Support\Facades\Route;

Route::domain(config('app.web_domain'))->group(function () {

    Route::get('/', function () {
        return view('frontend.index');
    });
    Route::get('/', 'App\Http\Controllers\frontend\HomeController@index')->name('frontend.index');

    Route::get('/why-solar', function () {
        return view('frontend.about-solar.why-solar');
    });

    Route::get('/latest-opportunities', function () {
        return view('frontend.latest-offers.index');
    });

    Route::get('/offers', function () {
        return view('frontend.latest-offers.offers');
    });

    Route::get('/offers-show', function () {
        return view('frontend.latest-offers.offers-show');
    });
    Route::get('/how-it-works', function () {
        return view('frontend.about-solar.how-it-works');
    });

    Route::get('/environmental-benefits', function () {
        return view('frontend.about-solar.environmental-benefits');
    });

    Route::get('/exhibitions', function () {
        return view('frontend.exhibitions.index');
    });

    Route::get('/exhibition', function () {
        return view('frontend.exhibitions.exhibition');
    });


    Route::get('/connect-with-us', function () {
        return view('frontend.connect-with-us');
    });


    Route::get('/business-process', function () {
        return view('frontend.business-process');
    });

    Route::get('/products', 'App\Http\Controllers\frontend\ProductController@index')->name("frontend.product.index");
    Route::get('/product/show/{slug}', 'App\Http\Controllers\frontend\ProductController@show')->name("frontend.product.show");

    Route::get('/solutions', function () {
        return view('frontend.solutions.index');
    });

    Route::get('/about-us', function () {
        return view('frontend.company.about-us');
    });

    Route::get('/contact-us', function () {
        return view('frontend.contact-us');
    });

    Route::post('contact', 'App\Http\Controllers\frontend\ContactUsController@submit')->name('frontend.contact.submit');
});
