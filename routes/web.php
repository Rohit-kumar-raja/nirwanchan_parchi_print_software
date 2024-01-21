<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NoteController;

require __DIR__ . '/auth.php';
Route::redirect('/', 'note');
Route::redirect('dashbard', 'category');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('category', CategoryController::class);
    Route::get('category/status/{id}', [CategoryController::class, 'status'])->name('category.status');
    Route::resource('note', NoteController::class);
    Route::post('parchi/import', [NoteController::class, 'import'])->name('note.import');
    Route::get('generate/print/{id?}', [NoteController::class, 'print'])->name('generate.print');
    Route::get('print/table/data', [NoteController::class,'tablePrint'])->name('print.table');
});
