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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/photo-gallery', 'PhotoGalleryController@listPhotos')
    ->name('gallery.index');
Route::get('/photo-gallery/add-photo', 'PhotoGalleryController@showPhotoForm')
    ->name('gallery.add_photo');
Route::post('/photo-gallery/add-photo' , 'PhotoGalleryController@savePhotoForm')
    ->name('gallery.save_photo');