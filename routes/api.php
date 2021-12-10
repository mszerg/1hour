<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Manager\IndexController;

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

//namespace - папка в контроллерах
Route::group(['namespace'=>'Admin','prefix'=>'admin'],function (){
    Route::group(['namespace'=>'Manager','prefix'=>'manager'],function (){
        Route::get('/',  'ManagerController');
        Route::post('/store',  'StoreController');
        Route::patch('/{manager}',  'UpdateController');
        Route::delete('/{manager}',  'DeleteController');

    });
});
