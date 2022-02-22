<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Department;
use App\User;
use App\Crform;
use Auth;

class UpdatecrformController extends Controller
{
    public function index(){
        $users = User::get();
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
        
        $department = Department::where(['name'=>$departmentsearch])->first();
    
        $course=Course::where(['department_id'=>$department->id])->get();
        //$courses = Course::where(['id'=>Auth::user()->id])->get();
        
        return view('ExamHall.viewcrform')->with([
            'courses'=>$course,
            'users'=>$users
           
        ]);

    }
    // public function editCrform($id){
    //     $user = User::find($id);
    //     return view('ExamHall.updatecrform')->with(['user'=>$user]);   
    
    // }
    // public function updateCrform(Request $request){
    
    //     foreach($request['taken-course'] as $value){
    //         $crform = Crform::create([
    //     'course_id'=>$value,
    //     'user_id'=>Auth::user()->id,
    //     'types'=>$request->types
        
    //         ]);
    //     }
        
    //     $user->save(); 
        
    //     return redirect()->route('view-crform');
    // }
}
