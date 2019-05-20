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
    return view('welcome');
});

// Auth::routes();
Auth::routes(['verify' => true]);


Route::get('myaccount', 'UsersController@index');

Route::resource('products', 'ProductsController');
Route::resource('articles', 'ArticlesController');


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

//Route::get('profile', 'UsersController@edit')->name('profile');
Route::get('profile', 'UsersController@index')->middleware('verified')->name('profile');
Route::get('profile/edit', 'UsersController@edit');
Route::patch('profile', 'UsersController@update');
Route::get('/profile/password/edit', 'UsersController@editpassword');
Route::patch('/profile/password', 'UsersController@changePassword')->name('changePassword');

Route::get('profile/trash', 'ReportController@allUserTrash');

Route::get('trash', 'ReportController@allTrash');

Route::match(['get', 'post'], 'ajax-image-upload', 'UsersController@ajaxImage');

