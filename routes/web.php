<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TpiController;
use App\Http\Controllers\DataikanController;
use App\Http\Controllers\NelayanController;
use App\Http\Controllers\AlattangkapController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BbmController;

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

Auth::routes();

// Route::get('/perikanan', [App\Http\Controllers\PerikananController::class, 'index'])->name('perikanan');
// Route::resource('tpi', [App\Http\Controllers\TpiController::class]);

Route::get('/user',[UserController::class,'index']);

Route::get('/dashboard', function () {
    return view("admin/dashboard");
});
// Route::get('/tpi', function () {
//     return view("admin/tpi");
// });
Route::get('/tpi',[TpiController::class,'index']);

Route::get('/tambahtpi',[TpiController::class,'tambahtpi']);

Route::post('/storetpi',[TpiController::class,'storetpi']);

Route::get('/edittpi/{tpi}',[TpiController::class,'edit']);

// Route::get('/dataikan', function () {
//     return view("admin/dataikan");
// });
Route::get('/dataikan',[DataikanController::class,'index']);

Route::get('/tambahdataikan', function () {
    return view("admin/tambahdataikan");
});
// Route::get('/editdataikan', function () {
//     return view("admin/editdataikan");
// });
Route::get('/editdataikan/{dataikan}',[DataikanController::class,'edit']);

// Route::get('/nelayan', function () {
//     return view("admin/nelayan");
// });
Route::get('/nelayan',[NelayanController::class,'index']);

Route::get('/tambahnelayan', function () {
    return view("admin/tambahnelayan");
});
// Route::get('/editnelayan', function () {
//     return view("admin/editnelayan");
// });
Route::get('/editnelayan',[NelayanController::class,'edit']);

Route::get('/alattangkap',[AlattangkapController::class,'index']);

Route::get('/tambahalat', function () {
    return view("admin/tambahalat");
});
// Route::get('/editalattangkap', function () {
//     return view("admin/editalattangkap");
// });
Route::get('/editalattangkap/{alattangkap}',[AlattangkapController::class,'edit']);

Route::get('/bbm',[BbmController::class,'index']);