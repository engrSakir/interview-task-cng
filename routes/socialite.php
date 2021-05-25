<?php


use App\Http\Controllers\Auth\SocialiteController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

Route::get('/login/google', [SocialiteController::class,'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [SocialiteController::class,'handleGoogleCallback']);

Route::get('/login/facebook', [SocialiteController::class,'redirectToFacebook'])->name('login.facebook');
Route::get('/login/facebook/callback', [SocialiteController::class,'handleFacebookCallback']);

Route::get('/login/github', [SocialiteController::class,'redirectToGitHub'])->name('login.github');
Route::get('/login/github/callback', [SocialiteController::class,'handleGitHubCallback']);
