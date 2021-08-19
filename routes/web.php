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
Route::get('/test1', function () {
    return 'Welcome...';
});

//route parameters

//requir param
Route::get('/test2/{id}', function ($id) {
    return $id;
});
//optional param
Route::get('/test3/{id?}', function ($id=1) {
    return 'welcome 3' . $id;
});
Route::get('/test4/{id?}', function () {
    return 'welcome 4';
});

//route name
Route::get('/show-number/{id}', function ($id) {
    return $id;
}) -> name('a');
Route::get('/show-string/{id?}', function () {
    return 'welcome 6';
}) -> name('b');


//route namespaces
/* Route::namespace('Front')->group(function(){
    //all route only access controller or method in folder name Front
    //Route::get('users', 'Front\UserController@showAdminName' );  //if namespaces('') is empty we should put full path
    Route::get('users', 'UserController@showUserName' );
});
 */

/*  //Route group
 //this method make easy not write users in eash url
Route::prefix('users')->group(function(){
    //if use prefix('') ,we should put as
    //Route::get('users\show', 'UserController@showUserName');

    Route::get('show', 'Front\UserController@showUserName');
    Route::delete('delete', 'UserController@showUserName');
    Route::get('edit', 'UserController@showUserName');
    Route::put('update', 'UserController@showUserName');
}); */

Route::group(['prefix' => 'users' , 'middleware' => 'auth'], function() {

    Route::get('/', function () {
        return 'work';
    });
    Route::get('show', 'Front\UserController@showUserName');
    Route::delete('delete', 'Front\UserController@showUserName');
    Route::get('edit', 'Front\UserController@showUserName');
    Route::put('update', 'Front\UserController@showUserName');
});



Route::get('check', function () {
    return 'middleware';
}) -> middleware('auth');






