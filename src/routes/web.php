<?php

use Illuminate\Support\Facades\Route;

Route::get('contact',[\Test\Contact\Http\Controllers\ContactController::class,'index'])->name('contact');
Route::post('contact',[\Test\Contact\Http\Controllers\ContactController::class,'send']);
