<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PcController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
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
    return view('login');
});
Route::get('beranda', function () {
    return view('beranda');
})->middleware('auth:members');
Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('auth:web');

Route::get('/',[AuthController::class,'login'])->name('login');
Route::post('/',[AuthController::class,'auth']);
Route::get('register',[MemberController::class,'register']);
Route::post('register',[MemberController::class,'create']);
Route::get('logout',[AuthController::class,'logout']);

Route::get('login/admin',[AuthController::class,'login_admin']);
Route::post('login/admin',[AuthController::class,'auth']);
Route::get('register/admin',[UserController::class,'register']);
Route::post('register/admin',[UserController::class,'create']);
Route::get('logout/admin',[AuthController::class,'logout_admin']);

Route::get('produk/detail/{id}',[PcController::class, 'detail']);
Route::get('beranda',[PcController::class, 'show']);
Route::get('/produk',[ProdukController::class, 'show']);
Route::get('/produk/add',[ProdukController::class, 'add']);
Route::post('/produk/create',[ProdukController::class, 'create']);
Route::get('/produk/hapus/{id}',[ProdukController::class, 'hapus']);
Route::get('/produk/edit/{id}',[ProdukController::class, 'edit']);
Route::post('/produk/update/{id}',[ProdukController::class, 'update']);
Route::post('/produk/cari',[ProdukController::class, 'search']);