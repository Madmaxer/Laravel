<?php
//User Controllers
use App\Http\Controllers\User\RegisterUserController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\LogoutUserController;
//Translations Controllers
use App\Http\Controllers\Translations\AllTranslationsController;
use App\Http\Controllers\Translations\OneTranslationController;
use App\Http\Controllers\Translations\CreateTranslationController;
use App\Http\Controllers\Translations\EditTranslationController;
use App\Http\Controllers\Translations\SerachTranslationController;
use App\Http\Controllers\Translations\DeleteTranslationController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Admin

//User
Route::post('/register', RegisterUserController::class);
Route::post('/login', LoginUserController::class);
//Translations
Route::get('/translations', AllTranslationsController::class);
Route::get('/translations/{id}', OneTranslationController::class);
Route::get('/translations/serach/{id}', SerachTranslationController::class);

//Protected Sanctum
Route::group(['middleware' => ['auth:sanctum']], function () {
    //Admin

    //User
    Route::post('/logout', LogoutUserController::class);
    //Translations
    Route::post('/translations/create', CreateTranslationController::class);
    Route::put('/translations/edit/{id}', EditTranslationController::class);
    Route::delete('/translations/{id}', DeleteTranslationController::class);
});