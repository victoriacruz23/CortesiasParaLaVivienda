<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistreController;
use App\Http\Controllers\SessionController;
use GuzzleHttp\Middleware;

Route::get('/', function () {
    return view('home');
})->Middleware('auth');
Route:: get('/registre', [RegistreController::class, 'create'])
->middleware('guest')
->name('registre.index');

Route:: post('/registre', [RegistreController::class, 'store'])->name('registre.store');

Route:: get('/login', [SessionController::class, 'create'])
->middleware('guest')
->name('login.index');

Route:: post('/login', [SessionController::class, 'store'])

->name('login.store');

Route:: get('/logout', [SessionController::class, 'destroy'])
->middleware('auth')
->name('login.destroy');