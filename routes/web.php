<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('Home');
Route::get('/success', 'HomeController@success')->name('success');
Route::resource('home', 'HomeController');
Auth::routes();
Route::prefix('admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/',function(){
            return redirect()->route('dashboard.index');
        });
        Route::resource('dashboard','DashboardController');
        Route::get('pdf/{id}','DashboardController@cetak_pdf')->name('cetak_pdf');
        //Route::resource('travel-package', 'TravelPackageController') ;
        //Route::resource('gallery', 'GalleryController') ;
       // Route::resource('transaction', 'TransactionController') ;
    });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
