<?php

use App\Http\Controllers\CustomerController;
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

Route::get('/clientes', [CustomerController::class, 'index'])->name('admin.customer.index');
Route::get('/cliente/novo', [CustomerController::class, 'create'])->name('admin.customer.create');
Route::get('/cliente/mostrar/{customer}', [CustomerController::class, 'show'])->name('admin.customer.show');
Route::post('/customer/store', [CustomerController::class, 'store'])->name('admin.customer.store');
Route::get('/cliente/editar/{customer}', [CustomerController::class, 'edit'])->name('admin.customer.edit');
Route::put('/cliente/editando/{customer}', [CustomerController::class, 'update'])->name('admin.customer.update');
Route::delete('/cliente/apagar/{customer}', [CustomerController::class, 'destroy'])->name('admin.customer.destroy');

// Route::resource('cliente', CustomerController::class);
