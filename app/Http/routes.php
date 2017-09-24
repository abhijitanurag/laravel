<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
   return view('welcome');

});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/wel','rte@index');

Route::auth();

Route::get('red',function(){
   return Request::all();
});
Route::resource('/batch','BatchController');
Route::resource('/student','StudentController');
Route::resource('/teacher','TeacherController');
Route::resource('/subject','SubjectController');

Route::resource('/timetable','TimetableController');
Route::resource('/studentTimetable','StudentTimeTable');
Route::resource('/teacherTimetable','TeacherTimeTable');
Route::resource('/studentdetail','StudentDetail');
Route::resource('/teacherdetail','TeacherDetail');
Route::resource('/teacherattendence','TeacherAttendence');
Route::resource('/studentattendence','StudentAttendence');