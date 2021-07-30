<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadedFileController;
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
    return redirect('/uploaded-files');
});

Route::get('uploaded-files',[UploadedFileController::class, 'index'])->name('uploaded_files.index');
Route::post('uploaded-files',[UploadedFileController::class, 'store'])->name('uploaded_files.store');
