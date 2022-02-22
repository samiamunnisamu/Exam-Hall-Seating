<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Semester;
use App\Session;

class DepartmentController extends Controller
{
    public function index(){
        return view('ExamHall.index');
    }


    public function departmentAdd(Request $request){
       
       $department = Department::create([
            'name'=>$request['department-name']
        ]);

        return redirect()->back()->withSuccess('IT WORKS!');
        

    } 

    public function semesterAdd(Request $request){
        $semester = Semester::create([
            'name'=>$request['semester-name']
            
        ]);
        return redirect()->back()->withSuccess('IT WORKS!');
        

    }

    public function sessionAdd(Request $request){
        $session = Session::create([
            'session'=>$request['session-name']
            
        ]);
        return redirect()->back()->withSuccess('IT WORKS!');

    }
}

