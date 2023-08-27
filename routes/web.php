<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostingController;

Route::get('/', function () {
    return view('landingpage');
});

Auth::routes();
//////////////////////////////////////////Buat Admin//////////////////////////////////////////////////////////////////////////
Route::group(['middleware' => ['Status']], function () {
    //////////////////////////////////////////////////////////////////////////
    Route::get('/dashboard', function () {
        return view('adminlte.v_template');
    });
});

//////////////////////////////////////////Buat User//////////////////////////////////////////////////////////////////////////
Route::group(['middleware' => ['User']], function () {
    //////////////////////////////////////////////////////////////////////////
    Route::get('/create',[PostingController::class,'posting'])->name('posting');
    Route::get('/create/detail/{id}',[PostingController::class,'detailposting']);
    Route::get('/create/add',[PostingController::class,'addposting']);
    Route::post('/create/insert',[PostingController::class,'insertposting']);
    Route::get('/create/edit/{id}',[PostingController::class,'editposting']);
    Route::post('/create/update/{id}',[PostingController::class,'updateposting']);
    Route::get('/create/delete/{id}',[PostingController::class,'deleteposting']);
    });

Auth::routes();
Route::get('/explore', [App\Http\Controllers\HomeController::class, 'explore'])->name('explore');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

