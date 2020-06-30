<?php

use \Illuminate\Http\Request;

Route::group(['namespace' => 'ITHilbert\Employees\Http\Controllers',
              'middleware' => ['web', 'auth']], function () {


    Route::group(['prefix' => 'employees',
                'middleware' => ['hasPermission:Mitarbeiterverwaltung']], function(){

        Route::get('', 'EmployeesController@index')->name('employees');
        Route::get('index', 'EmployeesController@index')->name('employees.index');
        Route::get('create', 'EmployeesController@create')->name('employees.create');
        Route::post('store', 'EmployeesController@store')->name('employees.store');
        
        Route::any('show/{user_id}', 'EmployeesController@show')->name('employees.show');
        Route::get('edit/{user_id}', 'EmployeesController@edit')->name('employees.edit');
        Route::post('update/{user_id}', 'EmployeesController@update')->name('employees.update');
        Route::delete('destroy/{user_id}', 'EmployeesController@destroy')->name('employees.destroy');
        Route::get('destroy/{user_id}', 'EmployeesController@destroy')->name('employees.destroy');    
    });



    Route::group(['prefix' => 'profil'], function(){
        Route::get('', 'ProfilController@show')->name('profil');
        Route::get('show', 'ProfilController@show')->name('profil.show');
        Route::get('edit', 'ProfilController@edit')->name('profil.edit');       
        Route::post('update', 'ProfilController@update')->name('profil.update');
    
    });

});

