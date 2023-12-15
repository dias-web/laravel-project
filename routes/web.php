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

Route::get('/', 'App\Http\Controllers\User\UserController@index');

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLogin');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');

Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');

Route::get('/create', 'App\Http\Controllers\User\CreateUserController@showCreateUserPage');

Route::get('/edit', 'App\Http\Controllers\User\EditUserController@showEditUserPage');

Route::get('/avatar', 'App\Http\Controllers\User\AvatarController@showAvatarPage');

Route::get('/profile', 'App\Http\Controllers\User\ProfileController@showProfile');

Route::get('/security', 'App\Http\Controllers\User\SecurityController@showSecurityPage');

Route::get('/status', 'App\Http\Controllers\User\StatusController@showStatusPage');
