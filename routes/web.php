<?php

use Illuminate\Support\Facades\Route;
use \Modules\Management\Http\Controllers\ManagementController as management;
use Modules\Website\Http\Controllers\WebsiteController as website;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::domain(config('app.sub_domain_management') . '.' . config('app.domain'))->middleware(['auth', 'management'])->group(function () {
    Route::get('/', [management::class, 'index'])->name('management.index');
});

Route::domain(config('app.domain'))->group(function () {
    Route::get('/{locale}', [website::class, 'index'])->name('homepage');

    Route::get('/authenticated-admin', function () {
        return redirect()->route('management.index');
    });
});

//Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function(){
//    Route::get('/dashboard', management::class)->name('dashboard');
//});
