<?php
use  App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// for showing controller
Route::get('/form', [Studentcontroller::class,'formview']);
//  Receved user adda and send to controoler class receivedstudentdata .
Route::post('/form', [StudentController::class,'receivedstudentdata'])->name('formdata');