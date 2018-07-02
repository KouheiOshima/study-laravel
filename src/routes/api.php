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

// TODO: 認証処理の追加
Route::group(['middleware' => ['api']], function(){
    Route::resource('list', 'Apis\ListController');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


