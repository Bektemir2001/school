<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::group(['namespace' => 'Main', 'prefix' => 'main'], function(){
        Route::get('/', 'IndexController')->name('admin.main.index');
    });
    Route::group(['namespace' => 'Lesson', 'prefix' => 'lessons'], function (){
        Route::get('/', 'IndexController');
        Route::post('/', 'StoreController');
        Route::get('/{lesson}', 'ShowController');
        Route::patch('/{lesson}', 'UpdateController');
        Route::delete('/{lesson}', 'DeleteController');
    });
    Route::group(['namespace' => 'Klass', 'prefix' => 'klasses'], function (){
        Route::get('/', 'IndexController');
        Route::post('/', 'StoreController');
        Route::get('/{klass}', 'ShowController');
        Route::patch('/{klass}', 'UpdateController');
        Route::delete('/{klass}', 'DeleteController');
        Route::get('/forTeacher/get', 'GetForTeacherController');
    });

    Route::group(['namespace' => 'Teacher', 'prefix' => 'teachers'], function (){
        Route::get('/', 'IndexController');
        Route::post('/', 'StoreController');
        Route::get('/{teacher}', 'ShowController');
        Route::patch('/{teacher}/update', 'UpdateController');
        Route::delete('/{teacher}', 'DeleteController');
        Route::get('/addedKlasses/{teacher}', 'GetKlassesController');
        Route::post('/{teacher}', 'AddKlassesController');
    });
    Route::group(['namespace' => 'Student', 'prefix' => 'students'], function (){
        Route::get('/', 'IndexController');
        Route::post('/', 'StoreController');
        Route::get('/{student}', 'ShowController');
        Route::patch('/{student}/update', 'UpdateController');
        Route::delete('/{student}', 'DeleteController');
    });
});
