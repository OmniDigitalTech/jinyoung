<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::domain(config('app.sub_domain_management') . '.' . config('app.domain'))->middleware(['auth', 'management'])->group(function () {
    Route::get('/dashboard', 'ManagementController@index')->name('dashboard');

    Route::prefix('slider')->group(function (){
        Route::get('/', 'SliderController@index')->name('management.slider.index');
        Route::post('/store', 'SliderController@store')->name('management.slider.store');
        Route::get('/edit/{slider}', 'SliderController@edit')->name('management.slider.edit');
        Route::put('/update/{slider}', 'SliderController@update')->name('management.slider.update');
        Route::get('/up/{slider}', 'SliderController@update')->name('management.slider.up');
        Route::get('/delete/{slider}', 'SliderController@destroy')->name('management.slider.delete');
    });
});
