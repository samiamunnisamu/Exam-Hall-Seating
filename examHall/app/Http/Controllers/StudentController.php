<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Student;
use App\Department;
use App\Session;
use App\Semester;
use App\Teacher;
use App\User;

class StudentController extends Controller
{
    public function index(){
        $departments = Department::get();
        $sessions = Session::get();
        $semesters = Semester::get();
        return view('ExamHall.students')->with([
            'departments'=>$departments,
            'sessions'=>$sessions,
            'semesters'=>$semesters
        ]);
    }
    public function studentAdd(Request $request){
        
        $student=User::create([

            'name'=>$request['student-name'],
            'email'=>$request['student-email'],
            'password' => Hash::make($request['student-password']),
            'gender'=>$request['student-gender'],
            'phone'=>$request['student-phone'],
            'image'=>$request['student-image'],
            'department'=>$request['department'],
            'rules'=>1

        ]);
       
        if ($student){
            Student::create([
                'semester_id'=>$request['student-semester'],
                'session_id'=>$request['student-session'],
                'user_id'=>$student->id
            ]);
        }
        return redirect()->back()->withSuccess('IT WORKS!');
    }
}
