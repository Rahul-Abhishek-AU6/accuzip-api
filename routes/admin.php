<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('dashboard', 'AdminController@index')->name('dashboard');
Route::get('listing-user', 'UserController@AllUser')->name('listing-user');
Route::get('edit-user/{id}', 'UserController@EditUser')->name('edit-user');
Route::get('delete-user/{id}', 'UserController@DeleteUser')->name('delete-user');
Route::resource('posts', 'PostController');
Route::resource('store-address', 'StoreAddressController');
Route::resource('order', 'OrderController');
Route::resource('testimonial', 'TestimonialController');
// Route::resource('product-content','ProductContentController');

Route::get('category-listing', 'ProductCategoryContoller@AllCategory')->name('category-listing');
Route::get('add-category', 'ProductCategoryContoller@AddNew')->name('add-category');
Route::get('edit-category/{id}', 'ProductCategoryContoller@EditCat')->name('edit-category');
Route::post('update-category', 'ProductCategoryContoller@UpdateCat')->name('update-category');
Route::post('save-category', 'ProductCategoryContoller@SaveCategory')->name('save-category');

Route::get('product-listing', 'ProductContoller@AllProduct')->name('product.index');
Route::get('add-product', 'ProductContoller@AddNew')->name('product.create');
Route::get('edit-product/{id}', 'ProductContoller@EditProduct')->name('product.edit');
Route::post('update-product', 'ProductContoller@UpdateProduct')->name('update-product');
Route::post('save-product', 'ProductContoller@SaveProduct')->name('product.store');
Route::post('save-product-extra', 'ProductContoller@saveProductExtra')->name('product.store.extra');
Route::get('delete-product/{id}', 'ProductContoller@DeleteProduct')->name('product.destroy');
Route::get('delete-product/image/{id}', 'ProductContoller@DestroyImage')->name('product-image.destroy');

Route::get('setting-listing', 'SettingContoller@AllProduct')->name('setting-listing');
Route::get('edit-setting/{id}', 'SettingContoller@EditProduct')->name('edit-setting');
Route::post('update-setting', 'SettingContoller@UpdateProduct')->name('update-setting');

Route::get('attribute', 'AttributeController@index')->name('attribute.index');
Route::get('attribute/create', 'AttributeController@create')->name('attribute.create');
Route::post('attribute/store', 'AttributeController@store')->name('attribute.store');
Route::get('attribute/delete/{id}','AttributeController@destroy')->name('attribute.destroy');
Route::get('attribute/edit/{id}','AttributeController@edit')->name('attribute.edit');
Route::post('attribute/update/{id}', 'AttributeController@update')->name('attribute.update');
Route::get('attribute/show/{id}', 'AttributeController@show')->name('attribute.show');

Route::get('attribute-value','AttributeValueController@index')->name('attribute-value.index');
Route::get('attribute-value/create','AttributeValueController@create')->name('attribute-value.create');
Route::post('attribute-value/store','AttributeValueController@store')->name('attribute-value.store');
Route::post('attribute-value/update/{id}', 'AttributeValueController@update')->name('attribute-value.update');
