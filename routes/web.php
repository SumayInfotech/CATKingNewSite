<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ResultsController;

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




