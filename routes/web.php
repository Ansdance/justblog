<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DashboardController;



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
    return view('homeD');
})->name('homeD');
Route::get('/aboutD', function () {
    return view('aboutD');
})->name('aboutD');
Route::get('/contactD', function () {
    return view('contactD');
})->name('contactD');

Route::get('/contactD/all/{id}', [ContactController::class, 'showOneMessage'])->name('contactD-data-one');
Route::get('/contactD/all/{id}/update', [ContactController::class, 'updateMessage'])->name('contactD-update');
Route::post('/contactD/all/{id}/update', [ContactController::class, 'updateMessageSubmit'])->name('contactD-update-submit');
Route::get('/contactD/all/{id}/delete', [ContactController::class, 'deleteMessage'])->name('contactD-delete');
Route::get('/contactD/all', [ContactController::class, 'allData'])->name('contactD-data');
Route::post('/contactD/submit', [ContactController::class, 'submit'])->name('contactD-form');

Route::group(['prefix'=>'admin','namespace'=>'Admin', 'middleware'=>['auth']],function(){
Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.index');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//check
Route::get('/check', function () {
    return view('zcheck');
});
