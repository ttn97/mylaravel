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
use App\ChuyenMuc;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'chuyenmuc'],function(){
        
        Route::get('danhsach','ChuyenMucController@getDanhsach');

        Route::get('them','ChuyenMucController@getThem');
        Route::post('them','ChuyenMucController@postThem');

        Route::get('sua/{id}','ChuyenMucController@getSua');
        Route::post('sua/{id}','ChuyenMucController@postSua');

        Route::get('xoa/{id}','ChuyenMucController@getXoa');
    });
});

Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'tintuc'],function(){
        Route::get('danhsach','TinTucController@getDanhsach');
        Route::get('them','TinTucController@getThem');
        Route::get('sua','TinTucController@getSua');
    });
});

Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'comment'],function(){
        Route::get('danhsach','CommentController@getDanhsach');
        Route::get('them','CommentController@getThem');
        Route::get('sua','CommentController@getSua');
    });
});

Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'user'],function(){
        Route::get('danhsach','UserController@getDanhsach');
        Route::get('them','UserController@getThem');
        Route::get('sua','UserController@getSua');
    });
});

