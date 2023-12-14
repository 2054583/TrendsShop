<?php

use App\Http\Controllers\StyleController;
use App\Http\Controllers\SoulierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Session\Middleware\StartSession;

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

      Route::get('/apropos', function () {
          return view('apropos');
      });  


      Route::controller(SoulierController::class)->group(function () {
          Route::resource('soulier',SoulierController::class);
        
            Route::get('/', 'index');
            Route::get('/soulier/create', 'create');
            Route::get('/soulier/{id}', 'show');
            Route::get('/soulier/{id}/edit', 'edit');
        
            Route::post('/soulier', 'store');
            Route::patch('/soulier/{id}', 'update');
            Route::delete('/soulier/{id}', 'destroy');
        
        });

      //Auth::routes(['verify' => true]);

     
      Route::get('lang/{locale}', [App\Http\Controllers\LocalizationController::class, 'index']);
      Auth::routes();

      Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

