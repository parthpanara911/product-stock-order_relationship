<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StockController;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Request;

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

Route::get('/', function () {
    return view('welcome');
});


// Task routes

Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product',[ProductController::class,'store']);
Route::get('/product/view',[ProductController::class,'view'])->name('product.view');
Route::post('/product/delete/',[ProductController::class,'delete'])->name('product.delete');


Route::get('/get-product-price', [OrderController::class, 'getProductPrice'])->name('getProductPrice');
Route::get('/order/create',[OrderController::class,'create'])->name('order.create');
Route::post('/order',[OrderController::class,'store']);
Route::get('/order/view',[OrderController::class,'view'])->name('order.view');
Route::post('/order/delete',[OrderController::class,'delete'])->name('order.delete');

Route::get('/stock/create',[StockController::class,'create'])->name('stock.create');
Route::post('/stock',[StockController::class,'store']);
Route::get('/stock/view',[StockController::class,'view'])->name('stock.view');
Route::post('/stock/delete/',[StockController::class,'delete'])->name('stock.delete');



// CRUD routes
Route::get('/form/create',[UserController::class,'create'])->name('form.create');
Route::post('/form',[UserController::class,'store']);
Route::get('/form/view',[UserController::class,'view'])->name('form.view');
Route::get('/form/edit/{id}',[UserController::class,'edit'])->name('form.edit');
Route::post('/form/update/{id}',[UserController::class,'update'])->name('form.update');
Route::get('/form/delete/{id}',[UserController::class,'delete'])->name('form.delete');

// Get Inserted data
Route::get('/customer',function(){
    $customer=Customer::all();
    echo "<pre>";
    print_r($customer);
});

// ===== Session =====
// Retrieve
Route::get('getallsession',function(){
    $session=Session::all();
    // $session=session()->all();
    echo "<pre>";
    print_r($session);
    echo "</pre>"; 
});

// Set Session 
Route::get('setsession',function(Request $request){
    $request->session()->put('user_id',123);
    $request->session()->put('user_name','Parth');
    // $request->session()->flash('status','Done');
    return redirect('getallsession');
});

// Destroy Session
Route::get('destroysession',function(){
    // session()->forget('user_id');
    // session()->forget('user_name');
    session()->forget(['user_id','user_name']);
    return redirect('getallsession');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
