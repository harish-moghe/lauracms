<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth'], 'namespace' => 'Laura\Controllers\Backend', 'before' => 'admin'], function() {
    // only /admin/ routes in here that will be in a namespace folder of "backend" with admin middleware
//    Route::auth();
    Route::resource('pages', 'PagesController'); // app/Http/controllers/backend/PagesController.php
    Route::resource('user', 'UserController');
    Route::get('dashboard', 'DashboardController@index');
    Route::resource('content-types', 'ContentTypesController');
    Route::get('layout/create/', 'LayoutController@create');
    Route::post('layout/create/', 'LayoutController@store');
    Route::get('layout/edit/', 'LayoutController@edit');
    Route::post('layout/save/', 'LayoutController@save');
    
});
