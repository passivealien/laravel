<?php

namespace App\Http\Controllers;
use App\Models\StudentModel2;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        //
        $data = array(
            'title' => 'Dashboard Page',
            'students' => StudentModel2::getAllStudents()
        );
        // ddd($data);
        return view('dashboard', $data);
        //
    }
}
