<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Department;
use Auth;

class CourseupdateController extends Controller
{
    public function index(){
        $courses = Course::get();
        return view('ExamHall.courseshow')->with([
            'courses'=>$courses
        ]);
       

    }

    public function courseEdit($id){
        $courses = Course::find($id);
        $departments= Department::get();
        return view('ExamHall.courseupdate')->with([
            'courses'=>$courses,
            'departments'=>$departments
        ]);   
    
    }
    
    public function courseUpdate(Request $request){
    
        $courses = Course::find($request->id);
        $courses->name=$request['course-name'];
        $courses->course_code=$request['course-code'];
        $courses->course_credit=$request['course-credit'];
        $courses->department_id=$request['dept-name'];
        
        
        $courses->save(); 
        
        return redirect()->route('course-view');
    }
}
