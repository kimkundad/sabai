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



Auth::routes();

Route::get('/', 'HomeController@welcome')->name('welcome');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/pretty_detail/{id}', 'HomeController@pretty_detail')->name('pretty_detail');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::group(['middleware' => ['UserRole:manager|employee|customer']], function() {

    Route::get('/pretty_live/{id}', 'HomeController@pretty_live')->name('pretty_live');
});


Route::group(['middleware' => ['UserRole:manager|employee']], function() {

    Route::resource('admin/user', 'UserController');
    Route::get('api/del_user/{id}', 'UserController@del_user')->name('del_user');
    
    Route::resource('admin/ban_position', 'BanpositionController');
    Route::get('api/del_position/{id}', 'BanpositionController@del_position')->name('del_position');

    Route::resource('admin/pretty', 'PrettyController');
    Route::get('api/del_pretty/{id}', 'PrettyController@del_pretty')->name('del_pretty');
    Route::post('api/post_status_pretty', 'PrettyController@post_status_pretty');


  });
