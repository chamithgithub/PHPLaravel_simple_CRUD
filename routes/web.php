<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/',[UserController::class,'index'])->name('index');
Route::get('/create',[UserController::class,'create'])->name('usercreate');
Route::post('/store',[UserController::class,'store'])->name('userstore');
Route::get('/delete',[UserController::class,'delete'])->name('userdelete');
Route::get('/{id}/update',[UserController::class,'upate'])->name('userupdate');
Route::post('/{id}/edit',[UserController::class,'edit'])->name('useredit');