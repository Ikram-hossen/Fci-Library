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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::group(['prefix' => 'admin'], function(){
    Route::get('/login', 'UserController@showLoginForm')->name('admin.login');
    Route::post('login', 'UserController@login')->name('admin.login.post');
    Route::get('logout', 'UserController@logout')->name('admin.logout');
 
    // authenticated admin access
    Route::group(['middleware' => ['auth:admin']], function () {
 
        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');
 
        Route::group(['prefix' => 'student'], function(){
            Route::get('/create', 'StudentController@create')->name('admin.student.create');
            Route::post('/save', 'StudentController@store')->name('admin.student.save');
            Route::get('/show', 'StudentController@index')->name('admin.student.show');
            Route::get(' /view/{id}', 'StudentController@view')->name('admin.student.view');
            Route::get('/edit/{id}', 'StudentController@edit')->name('admin.student.edit');
            Route::post('/update/{id}', 'StudentController@update')->name('admin.student.update');
            Route::post('/delete/{id}', 'StudentController@delete')->name('admin.student.delete');
        });
        Route::group(['prefix' => 'book'], function(){
            Route::get('/create', 'BooksController@create')->name('admin.book.create');
            Route::post('/save', 'BooksController@store')->name('admin.book.save');
            Route::get('/show', 'BooksController@index')->name('admin.book.show');
            Route::
            get('/view/{id}', 'BooksController@view')->name('admin.book.view');
            Route::get('/edit/{id}', 'BooksController@edit')->name('admin.book.edit');
            Route::post('/update/{id}', 'BooksController@update')->name('admin.book.update');
            Route::post('/delete/{id}', 'BooksController@delete')->name('admin.book.delete');
        });
        Route::group(['prefix' => 'year'], function(){
            Route::get('/year-setup', 'YearSetupController@index')->name('admin.year.year-setup');
            Route::get('/create', 'YearSetupController@create')->name('admin.year.create');
            Route::post('/save', 'YearSetupController@store')->name('admin.year.save');
            Route::get('/edit/{id}', 'YearSetupController@edit')->name('admin.year.edit');
            Route::post('/update/{id}', 'YearSetupController@update')->name('admin.year.update');
            Route::post('/delete/{id}', 'YearSetupController@delete')->name('admin.year.delete');
    
        });
        Route::group(['prefix' => 'department'], function(){
            Route::get('/department-setup', 'DeptSetupController@index')->name('admin.department.department-setup');
            Route::get('/create', 'DeptSetupController@create')->name('admin.department.create');
            Route::post('/save', 'DeptSetupController@store')->name('admin.department.save');
            Route::get('/edit/{id}', 'DeptSetupController@edit')->name('admin.department.edit');
            Route::post('/update/{id}', 'DeptSetupController@update')->name('admin.department.update');
            Route::post('/delete/{id}', 'DeptSetupController@delete')->name('admin.department.delete');
    
        });
        Route::group(['prefix' => 'shift'], function(){
            Route::get('/shift-setup', 'ShiftSetupController@index')->name('admin.shift.shift-setup');
            Route::get('/create', 'ShiftSetupController@create')->name('admin.shift.create');
            Route::post('/save', 'ShiftSetupController@store')->name('admin.shift.save');
            Route::get('/edit/{id}', 'ShiftSetupController@edit')->name('admin.shift.edit');
            Route::post('/update/{id}', 'ShiftSetupController@update')->name('admin.shift.update');
            Route::post('/delete/{id}', 'ShiftSetupController@delete')->name('admin.shift.delete');
    
        });
        Route::group(['prefix' => 'shift'], function(){
            Route::get('/shift-setup', 'ShiftSetupController@index')->name('admin.shift.shift-setup');
            Route::get('/create', 'ShiftSetupController@create')->name('admin.shift.create');
            Route::post('/save', 'ShiftSetupController@store')->name('admin.shift.save');
            Route::get('/edit/{id}', 'ShiftSetupController@edit')->name('admin.shift.edit');
            Route::post('/update/{id}', 'ShiftSetupController@update')->name('admin.shift.update');
            Route::post('/delete/{id}', 'ShiftSetupController@delete')->name('admin.shift.delete');
    
        });
        Route::group(['prefix' => 'language'], function(){
            Route::get('/language-setup', 'LanguageSetupController@index')->name('admin.language.language-setup');
            Route::get('/create', 'LanguageSetupController@create')->name('admin.language.create');
            Route::post('/save', 'LanguageSetupController@store')->name('admin.language.save');
            Route::get('/edit/{id}', 'LanguageSetupController@edit')->name('admin.language.edit');
            Route::post('/update/{id}', 'LanguageSetupController@update')->name('admin.language.update');
            Route::post('/delete/{id}', 'LanguageSetupController@delete')->name('admin.language.delete');
    
        });

    });


 });

    	



 
