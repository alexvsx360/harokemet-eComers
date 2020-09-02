<?php

#Cms
Route::middleware(['cmsguard'])->group(function () {
    Route::prefix('cms')->group(function () {
        Route::get('dashboard', 'CmsController@dashboard');
        Route::get('massage', 'CmsController@getMassage');
        Route::delete('massage/{id}', 'CmsController@destroyMassage');
        Route::get('orders', 'CmsController@orders');
        Route::get('orders/{id}/edit_orders', 'CmsController@editOrders');
        Route::put('orders/{id}', 'CmsController@orderUpdate');
        Route::resource('menu', 'MenuController');
        Route::resource('content', 'contentController');
        Route::resource('categories', 'CategoriesController');
        Route::resource('products', 'ProductsController');
    });
});
#LogOut
Route::get('logout', 'UserController@logout');

#Shop
Route::prefix('shop')->group(function () {
    Route::get('/', 'ShopController@categories');
    Route::get('order-now', 'ShopController@orderNow');
    Route::get('ajax/add-to-cart', 'ShopController@ajaxAddToCart');
    Route::get('cart', 'ShopController@cart');
    Route::get('clear-cart', 'ShopController@clearCart');
    Route::get('remove-item/{pid}', 'ShopController@removeItem');
    Route::get('update-cart/{op}/{pid}', 'ShopController@updateItem');
    Route::get('{curl} ', 'ShopController@products');
    Route::get('{curl} /{purl} ', 'ShopController@products');
});

#User
Route::prefix('user')->group(function () {
    Route::get('signin', 'UserController@getSignin');
    Route::post('signin', 'UserController@postSignin');
    Route::get('signup', 'UserController@getSignup');

    Route::post('signup', 'UserController@postSignup');
});
#user data 
Route::get('user/my', 'DataController@getMy');
Route::get('user/edit', 'DataController@edit');
Route::post('user/save-data', 'DataController@postData');

#Pages
Route::get('/', 'PagesController@home');
Route::get('contact', 'PagesController@contact');
Route::post('contact', 'PagesController@massage');
Route::get('{url}', 'PagesController@content');
