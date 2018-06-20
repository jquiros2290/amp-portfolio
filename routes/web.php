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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact', 'HomeController@submit_contact')->name('submit_contact');

Route::get('/projects', 'HomeController@project_form');
Route::post('/projects', 'HomeController@project_submit')->name('projects');

