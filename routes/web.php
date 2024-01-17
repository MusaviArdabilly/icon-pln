<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\InternalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PublicController::class, 'index']);
Route::get('/lp-v2', [PublicController::class, 'index_v2']);

Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);

Route::get('/idea', [InternalController::class, 'idea']);
Route::get('/idea/{id}', [InternalController::class, 'detail_idea']);
Route::get('/innovation', [InternalController::class, 'innovation']);
Route::get('/innovation/{id}', [InternalController::class, 'detail_innovation']);
Route::get('/repository', [InternalController::class, 'repository']);

Route::prefix('admin')->group(function () {
    Route::get('/idea', [AdminController::class, 'idea']);
    Route::get('/innovation', [AdminController::class, 'innovation']);
    Route::get('/user-managemenet', [AdminController::class, 'user_management']);
});
