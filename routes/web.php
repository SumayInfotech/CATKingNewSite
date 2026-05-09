<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ResultsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/result', [ResultsController::class, 'index'])->name('results');

Route::get('/api/scorecards-proxy', function (Request $request) {
    $page = $request->get('page', 1);
    $baseCourseId = $request->get('base_course_id', 56);
    $url = "https://courses.catking.in/courses/scorecards?type=api&base_course_id={$baseCourseId}&page={$page}";

    $response = Http::get($url);

    return response($response->body())->header('Content-Type', 'application/json');
})->name('scorecards-proxy');
