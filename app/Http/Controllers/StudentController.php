<?php

namespace App\Http\Controllers;
use App\Models\Students;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function fetchStudents(){
        $student = Students::whereBetween('id',[10,20])->orderBy('id','DESC')->get(); // between 20 - 10
        return $student;
    }
}
