<?php

use Illuminate\Support\Facades\Route;
use App\Models\Contact;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class,'index'])->name('contacts.index');
Route::get('/message', [UserController::class,'message'])->name('contacts.message');


Route::post('contacts/store', [UserController::class,'store'])->name('contacts.store');

Route::get('contacts/{id}/edit',[UserController::class,'edit']);

Route::put('contacts/{id}/update',[UserController::class,'update']);
Route::delete('contacts/{id}/delete',[UserController::class,'destroy']);
