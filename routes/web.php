<?php

use Illuminate\Support\Facades\Route;
use App\Student;

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
    return view('auth.login');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/home', function () {
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
Route::get('/viewStudent', 'StudentController@index')->name('student.index');
Route::get('/editStudent/{id}', 'StudentController@edit')->name('student.edit');
Route::post('/updateStudent/{id}', 'StudentController@update')->name('student.update');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
