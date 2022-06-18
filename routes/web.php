<?php

use App\Http\Controllers\Backend\Admin\CategoryController;
use App\Http\Controllers\Backend\Admin\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
    return view('welcome');
});
*/


//******Admin Route */
Route::group(['prefix'=>'admin','as'=>'admin.'],function(){
    //******Dashboard Route */
    Route::get('dashboard',function(){
        return view('backend.pages.dashboard');
    });
    //*******Categories Route */
    Route::resource('categories',CategoryController::class)->except('destroy');

    Route::get('/categories/{id}/delete',[CategoryController::class,'destroy'])->name('category.destroy');
            //********Product Route */
    Route::resource('product',ProductController::class)->except('destroy');
    Route::get('/product/{id}/delete',[ProductController::class,'destroy'])->name('product.destroy');

});



?>
