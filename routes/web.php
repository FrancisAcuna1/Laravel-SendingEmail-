<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MailController;

Route::get('/', [MailController::class, 'sendticket']);
Route::post('send', [MailController::class, 'send_email']);
Route::get('success', [MailController::class, 'success']);
Route::get('/', [MailController::class, 'back']);


