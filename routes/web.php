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
Route::namespace('Front')->group(function(){
    //all route only access controller or method in folder name Front
    //Route::get('users', 'Front\UserController@showAdminName' );  //if namespaces('') is empty we should put full path
    Route::get('users', 'UserController@showUserName' );
});
