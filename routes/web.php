<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/app', function(){
    return view('layouts.app');
});

Route::get('/nav', function(){
    return view('layouts.sidebar');
});
Route::get('/model', function(){
    return view('layouts.card');
});

Route::get('/card', [HomeController::class, 'index']);