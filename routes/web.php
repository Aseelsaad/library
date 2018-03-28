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

Route::get('/','FrontendController@index');
Route::get('/books','FrontendController@books');
Route::get('/book/{id}','FrontendController@book');
Route::get('/graduation-documentation','FrontendController@gd');
Route::post('/graduation-documentation','FrontendController@done')->name('success');


Auth::routes();
Route::get('/logout','Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');

//allow only Admin user to access these routes
Route::group(['prefix' => 'admin','middleware' => ['auth','admin']],function()
{
Route::post('toggleRetrieved/{orderId}', 'OrderController@toggleRetrieved')->name('toggle.retrieved');
  Route::get('/',function(){
    return view('admin.index');
  })->name('admin.index');

  Route::resource('book','BooksController');
  Route::resource('category','CategoriesController');
  Route::resource('students','StudentsController');
  Route::get('orders/{type?}','OrderController@Orders');
});

//to allow only authenticated users to access these routes
Route::group(['middleware' => 'auth'], function () {
    Route::get('borrowerinfo','CheckoutController@shipping')->name('checkout.shipping');
});
Route::get('receipt','CheckoutController@receipt')->name('checkout.receipt');
Route::resource('address','AddressController');
Route::get('book-search','BooksController@search')->name('book.search');
