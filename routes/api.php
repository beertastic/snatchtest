<?php

//use Illuminate\Http\Request;
//use App\testUsers;
//use App\testUserHistory;

Route::get('testUsers', 'testUsersController@index');
Route::get('testUsers/{user}', 'testUsersController@show');
Route::post('testUsers', 'testUsersController@store');
Route::put('testUsers/{user}', 'testUsersController@update');
Route::delete('testUsers/{user}', 'testUsersController@delete');

Route::get('testUserHistory', 'testUserHistoryController@index');
Route::get('testUserHistory/{user}', 'testUserHistoryController@show');
Route::post('testUserHistory', 'testUserHistoryController@store');
Route::put('testUserHistory/{user}', 'testUserHistoryController@update');
Route::delete('testUserHistory/{user}', 'testUserHistoryController@delete');

Route::get('lastpos/{user}', 'testUsersController@lastpos');

