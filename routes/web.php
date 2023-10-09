<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('setlocale/{lang}', [LangController::class, 'setLocale'])->name('setLocale');

Route::get('/', [SiteController::class, 'main'])->name('site.main');
Route::get('galery/video', [SiteController::class, 'galeryVideo'])->name('site.galeryVideo');
Route::get('schedule', [SiteController::class, 'schedule'])->name('site.schedule');
Route::get('groups', [SiteController::class, 'groups'])->name('site.groups');
Route::get('about', [SiteController::class, 'about'])->name('site.about');
Route::get('employees', [SiteController::class, 'employees'])->name('site.employees');