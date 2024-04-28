<?php

use Illuminate\Support\Facades\Route;

Route::get('contact',[\ContactTest\Contact\Http\Controllers\ContactController::class,'index'])->name('contact');
Route::post('contact',[\ContactTest\Contact\Http\Controllers\ContactController::class,'send']);
