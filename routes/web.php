<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RoutesController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\PagesController::class, 'home'])->name('home');
Route::get('/logout', [LogoutController::class,'logout'])->name('logout');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('');
Route::get('/history', [App\Http\Controllers\PagesController::class,'history'])->name('history');
Route::get('', [PagesController::class, 'landing']) -> name('landing');
Route::get('/routes', [PagesController::class, 'route'])-> name('routes');
Route::get('/accounts', [PagesController::class , 'account']) -> name('accounts');
Route::get('/balances', [AccountsController::class, 'showBalance'])->name('balance');
// Route::get('/logout', [\App\Http\Controllers\LogoutController::class,
// // function(){
// //     return redirect('/landing');
// // },
// 'logout']) -> name('logout.perform');

//Resource Posts
Route::post('/accounts', [AccountsController::class, 'store']);
Route::post('/routes', [RoutesController::class,'store'] );
// Route::post('/admin',[AdminsController::class,'store']);
