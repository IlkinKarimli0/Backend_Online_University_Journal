<?php

use Illuminate\Support\Facades\Route;

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
//Login system
Route::get('/login', '\App\Http\Controllers\LoginSystem@show');

Route::post("/check","\App\Http\Controllers\LoginSystem@check")->name('check');

//Session stuffs

Route::get('/session', '\App\Http\Controllers\LoginSystem@logout');




//HOMEPAGE

Route::get('/home','\App\Http\Controllers\homepage@view');

//Homepage for admins

Route::get('/home_admin', function () {
    return view('homepage_0');
});




//Feedback system
Route::get('/feedback','\App\Http\Controllers\FeedbackSystem@show')->name('feedback');

Route::post("submit",'\App\Http\Controllers\FeedbackSystem@store')->name('submit');

//Feedback system admin
Route::get('feedback1','\App\Http\Controllers\FeedbackSystem@view')->name('feedback_for_admin');

Route::get('delete/{id}','\App\Http\Controllers\FeedbackSystem@delete');



//Courses page
Route::get('/courses', function () {
    if(!session()->get("user_id")){
        return "Can't Reach This Address";
    }
    return view('courses');
});


//Courses page for admins

Route::get('courses_admin',function(){
   return view('courses_0');
})->name('courses_for_admin');


//Personaling pages for student

Route::get('/personal','\App\Http\Controllers\PersonalingSystem@view')->name('Personaling');

Route::get('/password','\App\Http\Controllers\PersonalingSystem@view_password')->name('Personaling_for_password');

Route::post("change_password",'\App\Http\Controllers\PersonalingSystem@change_password');

Route::get('personal_admin',function (){
    return view('personal_0');
});

//Updating avatar
Route::post('update_avatar','\App\Http\Controllers\PersonalingSystem@update_avatar');
