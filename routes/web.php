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


Route::group(['middleware'=>'auth'],function (){

    Route::get('/', function () {
//    session()->flash('danger','Your Subscrption ');
        return view('pages.index');
    })->name('home');

    Route::get('/menu', 'MenusController@index')->name('menu_create');
    Route::post('/menu/add', 'MenusController@add')->name('menu_add');
    Route::post('/menu/edit', 'MenusController@edit')->name('menu_edit');
    Route::get('/menu_delete/{id}', 'MenusController@delete')->name('menu_delete');

    Route::get('/order', 'OrdersController@index')->name('order_list');

    Route::get('/order/create', 'OrdersController@add_view')->name('order_create');
    Route::post('/order/add', 'OrdersController@add')->name('order_add');
    Route::post('/order/order_previous', 'OrdersController@previous')->name('order_previous');
    Route::post('/order/edit', 'OrdersController@edit')->name('order_edit');
    Route::get('/order_delete/{id}', 'OrdersController@delete')->name('order_delete');
    Route::get('/delivery', 'OrdersController@delivery')->name('delivery_list');

});


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin/create', function () {
    return view('users.add');
})->name('admin_create');
Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/admin/users', 'UsersController@index')->name('admin_users_list');
Route::post('/admin/add', 'UsersController@add')->name('admin_add');
Route::post('/admin/login', 'UsersController@login')->name('admin_login');
Route::post('/admin/edit', 'UsersController@edit')->name('admin_edit');
Route::get('/edit/{id}', 'UsersController@edit_view')->name('admin_edit_view');
Route::get('/edit_status/{id}/{status}', 'UsersController@edit_staus')->name('admin_edit_status');
