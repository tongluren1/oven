<?php

use Illuminate\Http\Request;

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

Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function(){
    Route::get('/user', function( Request $request ){
        return $request->user();
    });

    // 返回咖啡店列表
    Route::get('/cafes', 'API\CafesController@getCafes');
    // 添加咖啡店信息
    Route::post('/cafes', 'API\CafesController@postNewCafe');
    // 咖啡店详情
    Route::get('/cafes/{id}', 'API\CafesController@getCafe');
});