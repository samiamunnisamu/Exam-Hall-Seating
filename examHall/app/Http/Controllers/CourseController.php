<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Department;



class CourseController extends Controller
{
    public function index(){
        $departments = Department::get();
        return view('ExamHall.courses')->with([
            'departments'=>$departments
        ]);

        
        
    }

        public function courseAdd(Request $request){
            $course = Course::create([
                'name'=>$request['course-name'],
                'course_code'=>$request['course-code'],
                'course_credit'=>$request['course-credit'],
                'department_id'=>$request['dept-name']
            ]);
       
           
            return redirect()->back()->withSuccess('IT WORKS!');
        }
    }



