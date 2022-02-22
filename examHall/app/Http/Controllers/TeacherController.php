<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Teacher;

class TeacherController extends Controller
{
    public function index(){
        $departments = Department::get();
        return view('ExamHall.teachers')->with([
            'departments'=>$departments
        ]);
    }

    public function teacherAdd(Request $request){
       
        $teacher=User::create([

            'name'=>$request['teacher-name'],
            'email'=>$request['teacher-email'],
            'password' => Hash::make($request['teacher-password']),
            'gender'=>$request['teacher-gender'],
            'phone'=>$request['teacher-phone'],
            'image'=>$request['teacher-image'],
            'department_id'=>$request['dept-name'],
            'rules'=>2

        ]);
      

        return redirect()->back()->withSuccess('IT WORKS!');
    }



}
