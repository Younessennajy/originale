<?php
use App\Http\Controllers\CourseController;

use Illuminate\Support\Facades\Route;


Route::fallback(function () {
    return view('courses.notFound');
});
Route::resource('courses', CourseController::class);


Route::get('/home', [CourseController::class,'home']);
Route::get('/',function () {
    return view('welcome');
});



