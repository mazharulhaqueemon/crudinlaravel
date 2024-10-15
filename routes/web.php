<?php
use  App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// show form data to view
Route::get('/form', [Studentcontroller::class,'formview']);
//  Receved user adda and send to controoler class receivedstudentdata .
Route::post('/form', [StudentController::class,'receivedstudentdata'])->name('formdata');

Route::get('/student_list', [Studentcontroller::class,'student_list']);