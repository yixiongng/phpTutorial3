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
    $websiteName =  env('websiteName');
    return view('home',['websiteName'=>$websiteName]);
});
Route::get('/aboutUs', function () {
    return view('aboutUs');
});
Route::get('/contactUs', function () {
    $websiteName =  env('websiteName');
    $contactPerson =  env('contactPerson');
    $contactNumber =  env('contactNumber');
    return view('contactUs',['websiteName'=>$websiteName,'contactPerson'=>$contactPerson,'contactNumber'=>$contactNumber]);
});

Route::get('/create', function () {
    $name = '';
    return view('student.create',['name'=>$name]);
});

Route::get('createUser',[\App\Http\Controllers\StudentController::class, 'store']);
