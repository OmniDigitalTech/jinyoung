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

    Route::prefix('vision-mission')->group(function (){
        Route::get('/', 'VisionMissionController@index')->name('management.vision-mission.index');
        Route::post('/store', 'VisionMissionController@store')->name('management.vision-mission.store');
        Route::get('/edit/{vision}', 'VisionMissionController@edit')->name('management.vision-mission.edit');
        Route::put('/update/{vision}', 'VisionMissionController@update')->name('management.vision-mission.update');
        Route::get('/delete/{vision}', 'VisionMissionController@destroy')->name('management.vision-mission.delete');
    });

    Route::prefix('histories')->group(function (){
        Route::get('/', 'HistoryController@index')->name('management.history.index');
        Route::post('/store', 'HistoryController@store')->name('management.history.store');
        Route::get('/edit/{history}', 'HistoryController@edit')->name('management.history.edit');
        Route::put('/update/{history}', 'HistoryController@update')->name('management.history.update');
        Route::get('/delete/{history}', 'HistoryController@destroy')->name('management.history.delete');
    });
});
