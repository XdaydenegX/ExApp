<?php

use App\Http\Controllers\ClothesController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryNewsController;
use App\Http\Controllers\Dakimakurs;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\PasskeyByStudentController;

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

// Route::get('home', [NewsController::class, 'GetNews']);

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('news_detail/{id}', [NewsController::class, 'GetCurrentNews']);
    Route::get('sections', function () {
        return view('sections');
    });
    Route::prefix('sections')->group(function () {
        Route::get('/clothes', [ClothesController::class, 'GetAllClothes']);
        Route::get('/clothes_detail/{id}', [ClothesController::class, 'GetCurrentClothes']);
        Route::get('/dakimakurs', [Dakimakurs::class, 'getAllDaks']);
        Route::get('/dakimaka_detail/{id}', [Dakimakurs::class, 'getCurrentDaks']);
        Route::get('/manga', [MangaController::class, 'getManga']);
        Route::get('/manga_detail/{id}', [MangaController::class, 'getCurrentManga']);
    });
    Route::get('students', [PasskeyByStudentController::class, 'getAllStudentAndPassKeys']);
});
Auth::routes();

