<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use App\Models\Post;
use App\Models\Media;
use Illuminate\Support\Facades\Route;

// Route::get('students', function () {
//   return Media::with('media')->get();
//   // return Media::with('model')->get();
//   // return Student::with('media')->find(1);
// }); 

// Route::get('posts', function () {
//     return Post::with('tags')->get();
// }); 
// Route::view('/', 'intro');
Route::resource('students', StudentController::class);