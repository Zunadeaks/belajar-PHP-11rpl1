<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;

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

// URL Index / Home
Route::get('/', function () {
    $user = ['name' => 'Fariz', 'role' => 'admin'];
    return view('pages.home', $user);
});

Route::redirect('/', '/home');
Route::get('/home', [HomeC::class, 'index']);
Route::get('/about', [HomeC::class, 'about']);
Route::get('/contact', [HomeC::class, 'contact']);

