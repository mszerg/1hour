<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CFOController;
use App\Http\Controllers\Front\Invoice\InvoiceController;
use App\Http\Controllers\Front\Payment\PaymentController;
use App\Http\Controllers\Front\Accruals\AccrualsController;

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

//namespace - папка в контроллерах

Route::get('/cfo', [CFOController::class,'Index']);
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
    Route::group(['namespace'=>'Manager','prefix'=>'manager'],function (){
        Route::get('/',  'IndexController')->name('admin.manager.index');;
        Route::get('/create',  'CreateController')->name('admin.manager.create');
        //Route::get('/store',  'StoreController')->name('admin.manager.store');;
    });
});

route::group(['namespace'=>'Front'],function(){
    route::group(['namespace'=>'Main'],function(){
        route::get('/','IndexController');
    });
    route::group(['namespace'=>'MarketingDogovor','prefix'=>'marketingdogovors'],function(){
        route::get('/','IndexController')->name('front.marketingdogovor.index');
        route::get('/create','CreateController')->name('front.marketingdogovor.create');
        route::post('/','StoreController')->name('front.marketingdogovor.store');
        route::get('/{marketingdogovor}/edit','EditController')->name('front.marketingdogovor.edit');
        route::patch('/{marketingdogovor}','UpdateController')->name('front.marketingdogovor.update');
        route::delete('/{marketingdogovor}','DeleteController')->name('front.marketingdogovor.delete');
            route::group(['namespace'=>'Podch','prefix'=>'podch'],function(){
                route::get('/{marketingdogovor}/create','CreateController')->name('front.marketingdogovor.podch.create');
                route::patch('/{marketingdogovorpodch}','UpdateController')->name('front.marketingdogovor.podch.update');
                route::post('/{marketingdogovor}','StoreController')->name('front.marketingdogovor.podch.store');
                route::delete('/{marketingdogovorpodch}','DeleteController')->name('front.marketingdogovor.podch.delete');
            });

    });
    route::group(['namespace'=>'invoice','prefix'=>'invoices'],function(){
        route::get('/',[InvoiceController::class,'index'])->name('front.invoice.index');
        route::get('/create',[InvoiceController::class,'create'])->name('front.invoice.create');
        route::get('/{invoice}/edit',[InvoiceController::class,'edit'])->name('front.invoice.edit');
        route::patch('/{invoice}',[InvoiceController::class,'update'])->name('front.invoice.update');
        route::delete('/{invoice}',[InvoiceController::class,'destroy'])->name('front.invoice.delete');
        route::post('/',[InvoiceController::class,'store'])->name('front.invoice.store');
        route::get('/matching',[InvoiceController::class,'matching'])->name('front.invoice.matching');
    });
    route::group(['namespace'=>'Payment','prefix'=>'payments'],function(){
        route::get('/',[PaymentController::class,'index']);

    });
    route::group(['namespace'=>'Accruals','prefix'=>'accruals'],function(){
        route::get('/','AccrualsController')->name('front.accruals.index');;
        //route::get('/create','CreateController');
        //route::post('/create','StoreController')->name('front.accruals.store');

    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
