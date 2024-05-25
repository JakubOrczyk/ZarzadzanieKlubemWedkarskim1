<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LakeController;
use App\Http\Controllers\FishController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/lake/image-upload', [LakeController::class, 'imageUpload'])->name('lake.image_upload');
Route::post('/lake/image-upload', [LakeController::class, 'imageUploadStore'])->name('lake.image_upload.store');
Route::resource('lake', LakeController::class);
Route::get('/lake/{id}/addFish', [LakeController::class, 'addFish'])->name('lake.addFish');
Route::post('/lake/{lakeId}/assignFish/{fishId}', [LakeController::class, 'assignFish'])->name('lake.assignFish');
Route::delete('/lake/{lakeId}/unassignFish/{fishId}', [LakeController::class, 'unassignFish'])->name('lake.unassignFish');

Route::get('/fish/image-upload', [FishController::class, 'imageUpload'])->name('fish.image_upload');
Route::post('/fish/image-upload', [FishController::class, 'imageUploadStore'])->name('fish.image_upload.store');
Route::resource('fish', FishController::class);

Route::get('/tournament/image-upload', [TournamentController::class, 'imageUpload'])->name('tournament.image_upload');
Route::post('/tournament/image-upload', [TournamentController::class, 'imageUploadStore'])->name('tournament.image_upload.store');
Route::resource('tournament', TournamentController::class);


Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'login')->name('login');
    Route::post('/auth/login', 'authenticate')->name('login.authenticate');
    Route::get('/auth/logout', 'logout')->name('logout');
});
