<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/welcome','App\Http\Controllers\Usercontroller@getindex');

Route::get('/test1',function (){
    return 'test1';
})->name('test1');
//required parameter
Route::get('/test2/{id}',function ($id){
    return $id;
});
Route::get('landing',function (){return view('landing',['name'=>'ahmed']);});
Route::get('login',function () {
    return view('login');});
    Route::get('about', function () {
        return view('about');
    });
//optional parameter

    Route::get('/test3/{id?}', function () {
        return "welcome";
    });

    Route::namespace('front')->group(function () {
        Route::get('user', 'UserController@index');
    });
    Route::group(['namespace' => 'Admin'], function () {
        Route::get('second', 'App\Http\Controllers\Admincontroller@adminshow')->middleware('auth');
    });
    Route::get('show', function () {
        return 'must be login';
    })->name('login');

    Route::get('show', 'App\Http\Controllers\Firstcontroller@show');
    Route::get('indexx', 'App\Http\Controllers\UserControllerr@getindex');
    Route::get('adminshow', 'App\Http\Controllers\Admin\Admincontroller@adminshow');
//   // Route::get('check', function () {
//        return 'middleware';
//    })->middleware('auth');

    Route::resource('news', 'App\Http\Controllers\Newscontroller');



   // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes(['verify'=>true]);

Route::get('/home', function (){return view('home');})->middleware('verified');
