<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CategoryController;
use  App\Http\Controllers\admin\BrandController;
use  App\Http\Controllers\admin\CountryController;
use  App\Http\Controllers\admin\ProductFrameController;
use  App\Http\Controllers\admin\LensesController;
use  App\Http\Controllers\LoginController;
use App\Http\Controllers\CilentController;
use  App\Http\Controllers\admin\HomeController;
use  App\Http\Controllers\admin\GarbageController;
use  App\Http\Controllers\user\UserController1;
use PharIo\Manifest\Email;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


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
Route::get('login', [LoginController::class, 'getLogin']) ->name('login')->middleware('alreadyLoggedIn');
Route::post('postLogin', [LoginController::class, 'postLogin']) ->name('postLogin');
Route::get('loggout', [LoginController::class, 'logout']) ->name('logout');
Route::get('register', [LoginController::class, 'register']) ->name('register')->middleware('alreadyLoggedIn');
Route::post('registerStore', [LoginController::class, 'registerStore']) ->name('registerStore');

Route::get('/forget-password',[LoginController::class,'forgetPass'])->name('forgetPass')->middleware('alreadyLoggedIn');
Route::post('/forget-password',[LoginController::class,'postForgetPass'])->name('postForgetPass');
Route::get('/password-reset',[LoginController::class,'showResetForm'])->name('showResetForm');
Route::get('/password-reset/{token}',[LoginController::class,'showResetForm'])->name('showResetForm');
Route::post('/password-reset',[LoginController::class,'resetPassword'])->name('resetPassword');


Route::prefix('admin')->middleware('login','admin')->name('admin.')->group(function () {
    
    Route::get('home', [HomeController::class, 'home']) ->name('home');
        Route::prefix('user')->name('user.')->group(function () {
        Route::get('index', [UserController::class, 'index']) ->name('index');

        Route::get('delete/{id}', [UserController::class, 'delete']) ->name('delete')->where('id', '[0-9]+');

        Route::get('create', [UserController::class, 'create']) ->name('create');
        Route::post('store', [UserController::class, 'store']) ->name('store');
        
        Route::get('edit/{id}', [UserController::class, 'edit']) ->name('edit')->where('id', '[0-9]+');
        Route::post('update/{id}', [UserController::class, 'update']) ->name('update')->where('id', '[0-9]+');
        
    });

    Route::prefix('category')->name('category.')->group(function () {
        Route::get('index', [CategoryController::class, 'index']) ->name('index');

        Route::get('delete/{id}', [CategoryController::class, 'delete']) ->name('delete')->where('id', '[0-9]+');

        Route::get('create', [CategoryController::class, 'create']) ->name('create');
        Route::post('store', [CategoryController::class, 'store']) ->name('store');
        
        Route::get('edit/{id}', [CategoryController::class, 'edit']) ->name('edit')->where('id', '[0-9]+');
        Route::post('update/{id}', [CategoryController::class, 'update']) ->name('update')->where('id', '[0-9]+');
        
    });

    Route::prefix('brand')->name('brand.')->group(function () {
        Route::get('index', [BrandController::class, 'index']) ->name('index');

        Route::get('delete/{id}', [BrandController::class, 'delete']) ->name('delete')->where('id', '[0-9]+');

        Route::get('create', [BrandController::class, 'create']) ->name('create');
        Route::post('store', [BrandController::class, 'store']) ->name('store');
        
        Route::get('edit/{id}', [BrandController::class, 'edit']) ->name('edit')->where('id', '[0-9]+');
        Route::post('update/{id}', [BrandController::class, 'update']) ->name('update')->where('id', '[0-9]+');
        
    });

    Route::prefix('country')->name('country.')->group(function () {
        Route::get('index', [CountryController::class, 'index']) ->name('index');

        Route::get('delete/{id}', [CountryController::class, 'delete']) ->name('delete')->where('id', '[0-9]+');

        Route::get('create', [CountryController::class, 'create']) ->name('create');
        Route::post('store', [CountryController::class, 'store']) ->name('store');
        
        Route::get('edit/{id}', [CountryController::class, 'edit']) ->name('edit')->where('id', '[0-9]+');
        Route::post('update/{id}', [CountryController::class, 'update']) ->name('update')->where('id', '[0-9]+');
        
    });


    Route::prefix('product')->name('product.')->group(function () {
        Route::prefix('frame')->name('frame.')->group(function () {
            Route::get('index', [ProductFrameController::class, 'index']) ->name('index');
    
            Route::get('delete/{id}', [ProductFrameController::class, 'delete']) ->name('delete')->where('id', '[0-9]+');
    
            Route::get('create', [ProductFrameController::class, 'create']) ->name('create');
            Route::post('store', [ProductFrameController::class, 'store']) ->name('store');
            
            Route::get('edit/{id}', [ProductFrameController::class, 'edit']) ->name('edit')->where('id', '[0-9]+');
            Route::post('update/{id}', [ProductFrameController::class, 'update']) ->name('update')->where('id', '[0-9]+');
            Route::get('detail/{id}', [ProductFrameController::class, 'detail']) ->name('detail')->where('id', '[0-9]+');
            
        });
        Route::prefix('lenses')->name('lenses.')->group(function () {
            Route::get('index', [LensesController::class, 'index']) ->name('index');
    
            Route::get('delete/{id}', [LensesController::class, 'delete']) ->name('delete')->where('id', '[0-9]+');
    
            Route::get('create', [LensesController::class, 'create']) ->name('create');
            Route::post('store', [LensesController::class, 'store']) ->name('store');
            
            Route::get('edit/{id}', [LensesController::class, 'edit']) ->name('edit')->where('id', '[0-9]+');
            Route::post('update/{id}', [LensesController::class, 'update']) ->name('update')->where('id', '[0-9]+');
            Route::get('detail/{id}', [LensesController::class, 'detail']) ->name('detail')->where('id', '[0-9]+');
           
            
        });
        
    });
    Route::prefix('garbage')->name('garbage.')->group(function () {
        Route::prefix('member')->name('member.')->group(function () {
            Route::get('index', [GarbageController::class, 'member']) ->name('index');
            ;
            //dùng để hồi phục lại member
            Route::get('restore/{id}', [GarbageController::class, 'restore']) ->name('restore');
            ;
            
    
               
        });
        Route::prefix('product')->name('product.')->group(function () {
            Route::get('index', [GarbageController::class, 'product']) ->name('index');
            //dùng để hồi phục lại product
            Route::get('fix/{id}', [GarbageController::class, 'fix']) ->name('fix');
            ;
    
               
        });


           
    });
    
});
Route::get('/',[UserController1::class,'home'])->name('home');
Route::get('/about',[UserController1::class,'about']);
Route::get('/contact',[UserController1::class,'contact']);
Route::post('/contact',[UserController1::class,'MailContact'])->name('MailContact');
Route::get('/shop/page={page}',[UserController1::class,'shop'])->name('shop');
Route::get('/single/{id}',[UserController1::class,'single']);
Route::get('/checkout',[UserController1::class,'checkout']);
Route::group(['prefix'=>'cart','carts'], function(){
    Route::get('view',[UserController1::class,'view'])->name('cart.view');
    Route::get('add/{id}',[UserController1::class,'add'])->name('cart.add');
    Route::get('views',[UserController1::class,'view2'])->name('carts.views');
    Route::get('adds/{id}',[UserController1::class,'add2'])->name('carts.adds');
    Route::get('remove/{id}',[UserController1::class,'remove'])->name('cart.remove');
    Route::get('removes/{id}',[UserController1::class,'remove2'])->name('carts.remove');
    Route::get('update/{id}',[UserController1::class,'update'])->name('cart.update');
    Route::get('clear',[UserController1::class,'clear'])->name('cart.clear');
});
Route::get('/customer',[UserController1::class,'customer']);
Route::get('/404',[UserController1::class,'error']);
Route::get('/Profile',[UserController1::class,'profile'])->middleware('isLoggedIn');
Route::get('/profile',[UserController1::class,'profile'])->middleware('isLoggedIn');
Route::post('/savelala/{id}',[UserController1::class,'saveprofile'])->where('id', '[0-9]+');
Route::get('/payment',[UserController1::class,'payment']);
Route::post('/search',[UserController1::class,'search2']);
Route::get('/search',[UserController1::class,'search3']);
Route::get('shop/search/page={page}',[UserController1::class,'search'])->name('shop.search');
Route::get('{category}/{name}/{properties}/page={page}',[UserController1::class,'searchProperties']);
Route::get('/addcart/{id}',[UserController1::class,'addcart']);
Route::post('/checkcommand/{id}',[UserController1::class,'checkcommand']);

