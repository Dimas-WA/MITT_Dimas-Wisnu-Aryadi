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

// Route::get('/', 'AuthController@dashboard');

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::post('/register-store', 'AuthController@register')->name('register.user');

Route::post('/login-post', 'AuthController@login')->name('login.post');


Route::group(['middleware' => 'checkUserAuthSession'], function () {
// Route::get('/skills', 'AuthController@skills');

Route::get('/', function () {
    return view('dashboard');
});
Route::get('dashboard', function () {
    return view('dashboard');
});

    Route::resource('skills', 'SkillController');
    Route::resource('skilllevels', 'SkillLevelController');
    Route::resource('userskills', 'UserSkillController')
    // ->only(['store', 'update', 'destroy']
    // )
    ;

    Route::get('userskills/{username}', 'UserSkillController@by_user');

});