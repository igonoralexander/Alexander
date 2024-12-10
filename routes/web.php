<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FileController;
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

Route::get('/', [ProjectsController::class, 'index']);

Route::post('/email', [EmailController::class, 'sendEmail']) -> name('send.email');

Route::get('/download/{filename}', [FileController::class, 'download'])->name('file.download');

