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

Route::get('/', function () {
    $websiteName =  config('app.websiteName');
    return view('home',['websiteName'=>$websiteName]);
});
Route::get('/aboutUs', function () {
    return view('aboutUs');
});
Route::get('/contactUs', function () {
    $websiteName =  config('app.websiteName');
    $contactPerson =  config('app.contactPerson');
    $contactNumber =  config('app.contactNumber');
    return view('contactUs',['websiteName'=>$websiteName,'contactPerson'=>$contactPerson,'contactNumber'=>$contactNumber]);
});

Route::get('/createStudent', 'StudentController@create')->name('student.create');
Route::post('/storeStudent', 'StudentController@store')->name('student.store');