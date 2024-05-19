<?php
use App\Http\Controllers\BukutamuController;
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

Route::match(['get','post'],'/',[BukutamuController::class,'store']);
Route::get('/back', function () {
    return view('back.index');
});

Route::get('/back',[BukutamuController::class,'index']);
Route::get('/back/delete/{id}',[BukutamuController::class,'destroy']);
Route::match(['get','post'],'/back/update/{id}',[BukutamuController::class,'update']);
Route::get('/dashboard', function () {
    return view('back.layout.dashboard');
});