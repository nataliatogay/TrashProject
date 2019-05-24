<?php
use Illuminate\Support\Facades\Route;
use App\Models\Category;

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

/*
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('books', 'BooksController');
});
*/

Route::get('myaccount', 'UsersController@index');

Route::resource('products', 'ProductsController');
Route::resource('articles', 'ArticlesController');


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth')->middleware('verified');

Route::get('profile', 'UsersController@index')->middleware('verified')->name('profile');
Route::get('edit', 'UsersController@edit');
Route::get('profile/edit', 'UsersController@edit');
Route::patch('profile', 'UsersController@update');
Route::get('/profile/password/edit', 'UsersController@editpassword');
Route::patch('/profile/password', 'UsersController@changePassword')->name('changePassword');

Route::get('profile/trash', 'ReportController@allUserTrash');

Route::get('trash', 'ReportController@allTrash');

Route::get('shop', function(){
    // $categories = ['category1', 'category2', 'category3', 'category4'];
    $categories = Category::all();
    $categoryName = 'my_category';
    $products = ['prod1', 'prod2', 'prod3', 'prod4'];
    return view('shop')
            ->with('categories', $categories)
            ->with('categoryName', $categoryName)
            ->with('products', $products);
});


Route::get('/shop/{product}', 'ProductsController@show')->name('shop.show');
Route::get('/search', 'ProductsController@search')->name('search');
Route::get('/shop', 'ProductsController@index')->name('shop.index');


Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart/{product}', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');


Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');

