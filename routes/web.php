<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CFOController;

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

//Route::get('/', 'MainController@home');
//Route::get('/about', 'MainController@about' );
Route::get('/', [CFOController::class,'CFO_list']);
Route::get('/about',[MainController::class,'about']);
Route::get('/review',[MainController::class,'review'])->name('review');
Route::post('/review/check',[MainController::class,'review_check']);
Route::get('/example-view',[CFOController::class,'example']);
Route::get('/vendor/grid',[CFOController::class,'example']);
Route::get('/marketing/dogovors',[\App\Http\Controllers\MarketingController::class,'review']);

route::group(['namespace'=>'Admin','prefix'=>'admin'],function(){
    route::group(['namespace'=>'main'],function(){
        route::get('/','IndexController');
    });
    route::group(['namespace'=>'Category','prefix'=>'categories'],function(){
        route::get('/','IndexController')->name('admin.category.index');
        route::get('/create','CreateController')->name('admin.category.create');
        route::post('/','StoreController')->name('admin.category.store');
        route::get('/{category}/edit','EditController')->name('admin.category.edit');
        route::patch('/{category}','UpdateController')->name('admin.category.update');
        route::delete('/{category}','DeleteController')->name('admin.category.delete');
    });
});

route::group(['namespace'=>'Front'],function(){
    route::group(['namespace'=>'Main'],function(){
        route::get('/','IndexController');
    });
    route::group(['namespace'=>'MarketingDogovor','prefix'=>'marketingdogovors'],function(){
        route::get('/','IndexController')->name('front.marketingdogovor.index');
        route::get('/create','CreateController')->name('front.marketingdogovor.create');
        route::post('/','StoreController')->name('admin.marketingdogovor.store');
        route::get('/{marketingdogovor}/edit','EditController')->name('front.marketingdogovor.edit');
        route::patch('/{marketingdogovor}','UpdateController')->name('front.marketingdogovor.update');
        route::delete('/{marketingdogovor}','DeleteController')->name('front.marketingdogovor.delete');
    });
});
