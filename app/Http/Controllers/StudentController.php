<?php

namespace App\Http\Controllers;
// import model to do logic in datase
use App\Models\student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //crete function for shows studentform to view 
    public function formview(){
        return view("studentform");
    }
    // ekhane new student er student holo data table ar $student holo variable . jokhon $student = new student likhi 
    // tar mane student namer table er vitor joto feild ase ta $student er vitor create hoye jay .
    public function receivedstudentdata(Request $request){
        
        // dd($request->all());
        $student = new student();
        $student->name = $request->name;
        // database er nam   user je nam pathaise
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->father_name = $request->father_name;
        $student->save();
    }
    public function student_list(){
        $data =student::all();    
        return view("studentlist",data: compact('data'));
}
}