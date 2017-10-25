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

Route::get('/', ['uses' => 'DashboardController@index']); 

Route::get('members', ['uses' => 'MemberController@index']); 
Route::get('members/expired', ['uses' => 'MemberController@expired']); 
Route::get('members/create', ['uses' => 'MemberController@create']); 
Route::post('members/create', ['uses' => 'MemberController@store']); 
Route::get('members/{member}', ['uses' => 'MemberController@show']); 

Route::get('subscription/{member}/create', ['uses' => 'SubscriptionController@create']); 
Route::post('subscription/{member}/create', ['uses' => 'SubscriptionController@store']); 


