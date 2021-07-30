<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TpiController;
use App\Http\Controllers\DataikanController;
use App\Http\Controllers\NelayanController;
use App\Http\Controllers\AlattangkapController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BbmController;
use App\Http\Controllers\DaftarproduksiController;
use App\Http\Controllers\DetailproduksiController;
use App\Http\Controllers\PendapatanikanController;
use App\Http\Controllers\SetoranretribusiController;

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
Route::middleware(['auth'])->group(function () {
Route::middleware(['admin'])->group(function () {

Route::get('/user',[UserController::class,'index']);
Route::get('/tambahuser',[UserController::class,'create']);
Route::post('/user/store',[UserController::class,'store']);
Route::get('/edituser/{user}',[UserController::class,'editTPI']);
Route::post('/edituser/{user}',[UserController::class,'updateTPI']);
Route::get('/hapususer/{user}',[UserController::class,'delete']);

Route::get('/koperasi',[UserController::class,'koperasi']);
Route::get('/tambahkoperasi',[UserController::class,'createKoperasi']);
Route::post('/koperasi/store',[UserController::class,'storeKoperasi']);
Route::get('/editkoperasi/{user}',[UserController::class,'editKoperasi']);
Route::post('/editkoperasi/{user}',[UserController::class,'updateKoperasi']);

Route::get('/dashboard', function () {
    return view("admin/dashboard");
});

Route::get('/tpi',[TpiController::class,'index']);
Route::get('/tambahtpi',[TpiController::class,'create']);
Route::post('/tpi/store',[TpiController::class,'store']);
Route::get('/edittpi/{tpi}',[TpiController::class,'edit']);
Route::post('/edittpi/{tpi}',[TpiController::class,'update']);
Route::get('/hapustpi/{tpi}',[TpiController::class,'delete']);

Route::get('/dataikan',[DataikanController::class,'index']);
Route::get('/tambahdataikan',[DataikanController::class,'create']);
Route::post('/dataikan/store',[DataikanController::class,'store']);
Route::get('/editdataikan/{dataikan}',[DataikanController::class,'edit']);
Route::post('/editdataikan/{dataikan}',[DataikanController::class,'update']);
Route::get('/hapusdataikan/{dataikan}',[DataikanController::class,'delete']);

Route::get('/nelayan',[NelayanController::class,'index']);
Route::get('/tambahnelayan',[NelayanController::class,'create']);
Route::post('/nelayan/store',[NelayanController::class,'store']);
Route::get('/editnelayan/{nelayan}',[NelayanController::class,'edit']);
Route::post('/editnelayan/{nelayan}',[NelayanController::class,'update']);
Route::get('/hapusnelayan/{nelayan}',[NelayanController::class,'delete']);

Route::get('/alattangkap',[AlattangkapController::class,'index']);
Route::get('/tambahalat',[AlattangkapController::class,'create']);
Route::post('/alattangkap/store',[AlattangkapController::class,'store']);
Route::get('/editalattangkap/{alattangkap}',[AlattangkapController::class,'edit']);
Route::post('/editalattangkap/{alattangkap}',[AlattangkapController::class,'update']);
Route::get('/hapusalattangkap/{alattangkap}',[AlattangkapController::class,'delete']);


Route::get('/bbm',[BbmController::class,'index']);

Route::get('/daftarproduksi',[DaftarproduksiController::class,'index']);

Route::get('/detailproduksi',[DetailproduksiController::class,'index']);

Route::get('/pendapatanikan',[PendapatanikanController::class,'index']);

Route::get('/setoranretribusi',[SetoranretribusiController::class,'index']);
    });
    Route::middleware(['koperasi'])->group(function () {
        Route::get('/dashboard', function () {
            return view("admin/dashboard");
        });
        
    });
});
