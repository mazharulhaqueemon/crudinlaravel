<?php

namespace App\Http\Controllers;
use App\Models\student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //crete function for shows studentform to view 
    public function formview(){
        return view("studentform");
    }
    
    public function receivedstudentdata(Request $request){
        
        // dd($request->all());
        $student = new student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->father_name = $request->father_name;
        $student->save();
    }
}