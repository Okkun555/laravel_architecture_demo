<?php

use Illuminate\Support\Facades\Route;

Route::post('register', App\Http\Controllers\Auth\RegisterController::class)->name('auth.register');

// ログインが必要な処理は以下にまとめる FIXME: 別ファイルに切り出してもOK
Route::group(['middleware' => ['jwt.auth']], function () {});
