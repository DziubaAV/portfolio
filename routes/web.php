<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PortfolioController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');

Route::get('resume/{locale}', function ($locale) {
    Session::put('locale', $locale);

    return redirect()->back();
})->name('locale');


Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/portfolio', [PortfolioController::class, 'index']);





Route::get('/video', function () {
    return view('video');
})->name('video');

Route::get('/video',[VideoController::class, 'allVideo'])->name('youtube-video');


Route::get('/projects', function () {
    return view('projects');
})->name('projects');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact/submit',[ContactController::class, 'submit'])->name('contact-form');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
