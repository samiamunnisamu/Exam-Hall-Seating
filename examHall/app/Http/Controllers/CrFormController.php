<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Department;
use App\User;
use App\Crform;
use Auth;

class CrFormController extends Controller
{
    public function index(){
        $department =Auth::user()->department;
        $departmentsearch='' ;
        if ($department==1){
            $departmentsearch='CSE' ;
        }
        else if ($department==2){
            $departmentsearch='BBA' ;
        }
        else if ($department==3){
            $departmentsearch='LAW' ;
        }
        else if ($department==4){
            $departmentsearch='ENGLISH' ;
        }
        
        $department = Department::where(['name'=>$departmentsearch])->first();
    
        $course=Course::where(['department_id'=>$department->id])->get();
        //$courses = Course::where(['id'=>Auth::user()->id])->get();
        
        return view('ExamHall.crform')->with([
            'courses'=>$course
           
        ]);
    }

    public function crformAdd(Request $request){
foreach($request['taken-course'] as $value){
    $crform = Crform::create([
'course_id'=>$value,
'user_id'=>Auth::user()->id,
'types'=>$request->types

    ]);
}
return redirect()->back()->withSuccess('Registration successfully!');

    }

}
