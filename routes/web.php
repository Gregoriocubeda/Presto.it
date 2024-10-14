<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\CategoryController;



Route::get('/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/create', [ArticleController::class, 'create'])->name('article.create')->middleware('auth');
Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit')->middleware('auth');
Route::get('/', [ArticleController::class, 'homepage'])->name('article.homepage');
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');
Route::get('revisor/index', [RevisorController::class, 'index'])->name('revisor.index')->middleware('isRevisor');
Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::patch('accept/{article}', [RevisorController::class, 'accept'])->name('accept');
Route::patch('reject/{article}', [RevisorController::class, 'reject'])->name('reject');
Route::get('/search/article', [ArticleController::class, 'searchArticles'])->name('article.search');
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');
Route::get('/lavora-con-noi', [ArticleController::class, 'joinUs'])->name('article.lavora-con-noi');
//Cambio lingua
Route::post('/lingua/{lang}', [ArticleController::class, 'setLanguage'])->name('setLocale');


//Accesso con Google

Route::get('/google/redirect', [App\Http\Controllers\GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [App\Http\Controllers\GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');