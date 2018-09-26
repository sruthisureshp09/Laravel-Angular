<?php



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('me', 'AuthController@me');

});

Route::resource('categories', 'CategoryController');
Route::resource('subcategories', 'SubCategoryController');
Route::post('storesubcategories/{id}', 'SubCategoryController@storeSub');
Route::get('showsubcategories/{id}', 'SubCategoryController@showSub');
Route::resource('products', 'ProductController');
Route::post('fileupload','ProductController@uploadMultiFiles');



Route::resource('user', 'UserController');
//Route::post('login',  'UserController@checkAuth'); 
