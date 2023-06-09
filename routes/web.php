<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\QuestionAnswerController;
use App\Http\Controllers\SiteCreationController;
use App\Http\Controllers\ResumeController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/services', [QuestionAnswerController::class, 'index'])->name('services');
Route::get('/resume', [ResumeController::class, 'index'])->name('resume');

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


Route::get('site-creation', function () {
    return view('site-creation');
})->name('site-creation');



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

