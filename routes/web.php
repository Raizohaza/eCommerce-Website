<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Auth\ResetPasswordController;

use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\FavoriteController;
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
Route::get('/users/{users}/edit', 'App\Http\Controllers\HomeController@edit');
Route::post('/users/{users}/update-users', 'App\Http\Controllers\HomeController@update');
//send mail
Route::get('/send-mail', 'App\Http\Controllers\HomeController@send_mail');
Route::get('/',  [App\Http\Controllers\HomeController::class, 'init']);
Route::get('/pie', 'App\Http\Controllers\ProductController@get_all_products_for_pie_chart');
Route::get('/test', function () {
    $data = DB::table('users')->get();

    print_r($data);
});
Route::group(['middleware'  => ['auth','admin']], function() {
	// you can use "/admin" instead of "/dashboard"
	Route::get('/dashboard', function () {
    	return view('admin.dashboard');
	});
	// below is used for adding the users.
	Route::get('/role-register','App\Http\Controllers\Admin\DashboardController@registered');
	//below route for edit the users detail and update.
	Route::get('/role-edit/{id}','App\Http\Controllers\Admin\DashboardController@registeredit');
	//update button route
	Route::put('/role-register-update/{id}','App\Http\Controllers\Admin\DashboardController@registerupdate');
	//delete route
    Route::delete('/role-delete/{id}','App\Http\Controllers\Admin\DashboardController@registerdelete');

	Route::get('/role-categorier','App\Http\Controllers\Admin\DashboardController@categoried');

	Route::get('/role-categorier-edit/{id}','App\Http\Controllers\Admin\DashboardController@categoriededit');
	//update button route
	Route::put('/role-categorier-update/{id}','App\Http\Controllers\Admin\DashboardController@categoriedupdate');
	//delete route
    Route::delete('/role-categorier-delete/{id}','App\Http\Controllers\Admin\DashboardController@categorierdelete');
	//create category
	Route::get('/role-category','App\Http\Controllers\CategoryController@index');
	Route::post('/role-add','App\Http\Controllers\CategoryController@store');

	//products
	Route::get('/role-products','App\Http\Controllers\ProductController@index')->name('admin.producter');
    Route::get('/role-products-edit/{id}', 'App\Http\Controllers\ProductController@edit')->name('admin.product-edit');
    Route::put('/role-products-update/{id}', 'App\Http\Controllers\ProductController@update')->name('admin.product-update');
    Route::delete('/role-products-delete/{id}', 'App\Http\Controllers\ProductController@ProductDestroy');
 
});
Auth::routes(['verify' => true]);
// Route::get('/', function () {return view('home');})->middleware('verified');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/category', [App\Http\Controllers\CategoryController::class, 'init']);

Route::get('/product', [App\Http\Controllers\ProductController::class, 'init']);

Route::get('/product_images', [App\Http\Controllers\Product_ImagesController::class, 'init']);

Route::get('/category/{id}', [App\Http\Controllers\CategoryController::class, 'show']);

Route::get('/favorite', [App\Http\Controllers\FavoriteController::class, 'show']);

Route::get('/category/product/{id}', [App\Http\Controllers\ProductController::class, 'show']);

Route::get('category/product/fav/{{id}}/{Liked}', [App\Http\Controllers\Admin\FavoriteController::class,'store']);

Route::get('/Cart', [App\Http\Controllers\PurchaseController::class, 'ajaxRequest']);

Route::post('updatePurchase', [App\Http\Controllers\PurchaseController::class, 'ajaxRequestUpdatePurchase']);
