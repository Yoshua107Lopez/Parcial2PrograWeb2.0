<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MedicamentoController;
Use App\Http\Controllers\MiscelaneaController;
Use App\Http\Controllers\RestringidosController;
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
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');


Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [LoginController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');


    Route::get('/medicamento', [MedicamentoController::class, 'index'])->name('medicamentos.index'); 

    Route::get('/miscelanea', [MiscelaneaController::class, 'index'])->name('Miscelanea.index');
    
    Route::get('/medicamento/create', [MedicamentoController::class, 'create'])->name('medicamentos.create'); 
    
    Route::get('/miscelanea/create', [MiscelaneaController::class, 'create'])->name('Miscelanea.create');
    
    Route::post('/medicamento/create', [MedicamentoController::class, 'store'])->name('medicamentos.store');
    
    Route::post('/miscelanea/create', [MiscelaneaController::class, 'store'])->name('Miscelanea.store');
    
    Route::resource('medicamento', MedicamentoController::class);
    
    Route::resource('miscelanea', MiscelaneaController::class);

    Route::get('/restringidos', [RestringidosController::class, 'index'])->name('restringidos.index');

    Route::get('/restringidos/create', [RestringidosController::class, 'create'])->name('restringidos.create');

    Route::post('/restringidos/create', [RestringidosController::class, 'store'])->name('restringidos.store');

    Route::resource('restringidos', RestringidosController::class);
