<?php
use App\Http\Controllers\BuyerAuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[BuyerAuthController::class,'login']);
Route::get('/registration',[BuyerAuthController::class,'registration']);
Route::post('/register-buyer',[BuyerAuthController::class,'registerBuyer'])->name ('register-buyer');
Route::post('/login-buyer',[BuyerAuthController::class,'loginBuyer'])->name ('login-buyer');
Route::get('/home', [PagesController::class, 'index'])->name('home');


////////////////cart//////////////////////
Route::get('/products', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
