<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\LeadershipController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/result', [ResultsController::class, 'index'])->name('results');

Route::get('/exams', function () {
    return view('exams');
})->name('exams');

Route::get('/exams/cat-exam', function () {
    return view('exams.cat');
})->name('exam.cat');

Route::get('/api/scorecards-proxy', function (Request $request) {
    $page = $request->get('page', 1);
    $baseCourseId = $request->get('base_course_id', 56);
    $url = "https://courses.catking.in/courses/scorecards?type=api&base_course_id={$baseCourseId}&page={$page}";

    $response = Http::get($url);

    return response($response->body())->header('Content-Type', 'application/json');
});

Route::get('/offline-centers', function () {
    return view('offline-centers');
})->name('offline-centers');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/terms-condition', function () {
    return view('terms-condition');
})->name('terms-condition');

Route::get('/refund-policy', function () {
    return view('refund-policy');
})->name('refund-policy');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/mnemonics', [App\Http\Controllers\MnemonicController::class, 'index'])->name('mnemonics');
Route::get('/mnemonic/{slug}', [App\Http\Controllers\MnemonicController::class, 'show'])->name('mnemonic.show');

Route::get('/meet-the-directors', function () {
    return view('meet-the-directors');
})->name('meet-the-directors');

// Leadership Programs
Route::get('/future-leaders-program/{year?}', [LeadershipController::class, 'flp'])->name('flp');
Route::get('/management-leadership-program/{year?}', [LeadershipController::class, 'mlp'])->name('mlp');
Route::get('/executive-leadership-program', [LeadershipController::class, 'elp'])->name('elp');
Route::get('/careers', function () {
    return view('careers');
})->name('careers');

// MCQ Module
Route::get('/mcq', [App\Http\Controllers\McqController::class, 'index'])->name('mcq.index');
Route::get('/mcq-category/{slug}', [App\Http\Controllers\McqController::class, 'category'])->name('mcq.category');
Route::get('/mcq-test/{slug}', [App\Http\Controllers\McqController::class, 'test'])->name('mcq.test');
Route::get('/mcq-questions/{slug}', [App\Http\Controllers\McqController::class, 'questions'])->name('mcq.questions');







