<?php
use Illuminate\Support\Facades\Route;

Route::get('/createStudent', 'StudentController@create')->name('student.create');
Route::post('/storeStudent', 'StudentController@store')->name('student.store');
Route::get('/viewStudent', 'StudentController@index')->name('student.index');
Route::get('/editStudent/{id}', 'StudentController@edit')->name('student.edit');
Route::post('/updateStudent/{id}', 'StudentController@update')->name('student.update');