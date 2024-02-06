<?php

use App\Http\Controllers\RedirectPage;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});



Route::get('/redirect/login', [RedirectPage::class, 'redirectLogin'])->name('redirectLogin');
Route::get('/login', function () {
    return view('login');
});

Route::get('/redirect/registrasi', [RedirectPage::class, 'redirectRegistrasi'])->name('redirectRegistrasi');
Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/redirect/todo', [RedirectPage::class, 'redirectTodo'])->name('redirectTodo');
Route::get('/todo', function () {
    return view('todo');
});