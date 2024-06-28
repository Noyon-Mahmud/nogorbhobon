<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyNewAddController;

Route::get('/propertyy/aadd', [PropertyNewAddController::class, 'create'])->name('propertyy.aadd');

