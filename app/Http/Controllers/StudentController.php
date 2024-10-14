<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //crete function for shows studentform to view 
    public function formview(){
        return view("studentform");
    }
}
