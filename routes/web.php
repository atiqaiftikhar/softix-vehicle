<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StreetController;
use App\Http\Controllers\TruckController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::prefix('/admin')->group(function(){
    // Route::prefix('/admin')->middleware(['auth','isAdmin'])->group(function(){




    //   Frontend pages
      Route::get("home",[HomeController::class,'home']);
      Route::get("cardetails",[CarController::class,'index']);
      Route::get("carselling",[CarController::class,'sell']);
      Route::get("motorcycles",[MotorcycleController::class,'index']);
      Route::get("carvaluation",[CarController::class,'valuation']);
      Route::get("carsellingtips",[CarController::class,'tips']);
      Route::get("tradein",[CarController::class,'trade']);
      Route::get("truck",[TruckController::class,'index']);
      Route::get("our_range",[DealerController::class,'index']);




     Route::get('/', function(){
        return view('admin');
        })->name('admin.index');


  Route::group(['prefix'=>'admin'],function(){
       Route::group(['prefix' => '/user'], function() {
            Route::get('/',[UserController::class,'user'])->name('user.index');

        });

            Route::group(['prefix' => '/products'], function() {
            Route::get('/',[ProductController::class,'product'])->name('product.index');
            Route::get('/create',[ProductController::class,'create'])->name('product.create');
            Route::post('/store',[ProductController::class,'store'])->name('product.store');
            Route::get('/edit',[ProductController::class,'edit'])->name('product.edit');
            Route::post('/update',[ProductController::class,'update'])->name('product.update');
            Route::get('/delete',[ProductController::class,'delete'])->name('product.delete');

        });
            Route::group(['prefix' =>'/category'], function() {
            Route::get('/',[CategoryController::class,'category'])->name('category.index');
            Route::get('/create',[CategoryController::class,'create'])->name('category.create');
            Route::post('/store',[CategoryController::class,'store'])->name('category.store');
            Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
            Route::get('/update/{id}',[CategoryController::class,'update'])->name('category.update');
            Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

        });

             Route::group(['prefix' => '/role'], function() {
             Route::get('/',[RoleController::class,'role'])->name('role.index');
             Route::get('/create',[RoleController::class,'create'])->name('role.create');
             Route::post('/store',[RoleController::class,'store'])->name('role.store');
             Route::get('/edit/{id}',[RoleController::class,'edit'])->name('role.edit');
             Route::post('/update/{id}',[RoleController::class,'update'])->name('role.update');
             Route::get('/delete/{id}',[RoleController::class,'delete'])->name('role.delete');

        });

             Route::group(['prefix' => '/location'], function() {
             Route::get('/',[LocationController::class,'loc'])->name('location.index');
             Route::get('/create',[LocationController::class,'create'])->name('location.create');
             Route::post('/store',[LocationController::class,'store'])->name('location.store');
             Route::get('/edit/{id}',[LocationController::class,'edit'])->name('location.edit');
             Route::post('/update/{id}',[LocationController::class,'update'])->name('location.update');
             Route::get('/delete/{id}',[LocationController::class,'delete'])->name('location.delete');
        });


            Route::group(['prefix' => '/province'], function() {
            Route::get('/',[ProvinceController::class,'prov'])->name('province.index');
            Route::get('/create',[ProvinceController::class,'create'])->name('province.create');
            Route::post('/store',[ProvinceController::class,'store'])->name('province.store');
            Route::get('/edit/{id}',[ProvinceController::class,'edit'])->name('province.edit');
            Route::post('/update/{id}',[ProvinceController::class,'update'])->name('province.update');
            Route::get('/delete/{id}',[ProvinceController::class,'delete'])->name('province.delete');
        });


            Route::group(['prefix' => '/city'], function() {
            Route::get('/',[CityController::class,'city'])->name('city.index');
            Route::get('/create',[CityController::class,'create'])->name('city.create');
            Route::post('/store',[CityController::class,'store'])->name('city.store');
            Route::get('/edit/{id}',[CityController::class,'edit'])->name('city.edit');
            Route::post('/update/{id}',[CityController::class,'update'])->name('city.update');
            Route::get('/delete/{id}',[CityController::class,'delete'])->name('city.delete');
        });



             Route::group(['prefix' => '/street'], function() {
             Route::get('/',[StreetController::class,'street'])->name('street.index');
             Route::get('/create',[StreetController::class,'create'])->name('street.create');
             Route::post('/store',[StreetController::class,'store'])->name('street.store');
             Route::get('/edit/{id}',[StreetController::class,'edit'])->name('street.edit');
             Route::post('/update/{id}',[StreetController::class,'update'])->name('street.update');
             Route::get('/delete/{id}',[StreetController::class,'delete'])->name('street.delete');
        });



            Auth::routes();
            Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
            Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
            return "this page requires that you be logged in and an Admin";
                }]);
                });
