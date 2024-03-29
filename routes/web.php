<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExploreController;

// Route::get('/', function () {
//     return view('landingpage');
// });
Route::get('/',[App\Http\Controllers\PostingController::class,'allposting'])->name('landingpage');
// Route::get('/explore', function () { return view('explore'); });

Auth::routes();
//////////////////////////////////////////Buat Admin//////////////////////////////////////////////////////////////////////////
Route::group(['middleware' => ['Status']], function () {
    //////////////////////////////////////////////////////////////////////////
    Route::get('/dashboard', [AdminController::class,'index'])->name('Admin');
    Route::get('/dashboard/detail/{id}', [AdminController::class,'detailadmin']);
    Route::get('/dashboard/delete/{id}', [AdminController::class,'deleteadmin']);
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

    Route::get('/explore', [ExploreController::class,'index']);
    Route::get('/explore/pakaian', [ExploreController::class,'pakaian']);
    Route::get('/explore/celana', [ExploreController::class,'celana']);
    Route::get('/explore/suit', [ExploreController::class,'suit']);
    Route::get('/explore/women', [ExploreController::class,'women']);
    Route::get('/explore/men', [ExploreController::class,'mens']);
    Route::get('/explore/formal', [ExploreController::class,'formal']);




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

