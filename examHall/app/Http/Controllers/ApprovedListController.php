<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Department;
use App\User;
use App\Crform;
use Auth;

class ApprovedListController extends Controller
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
        
        $department = Department::where(['name'=>$departmentsearch])->first();
    
        $course=Course::where(['department_id'=>$department->id])->get();
        //$courses = Course::where(['id'=>Auth::user()->id])->get();
        
        return view('ExamHall.cseapprovedlist')->with([
            'courses'=>$course
           
        ]);
}


public function approveCse(){
    // dd(Auth::user()->department);
    
     $department_id=Auth::user()->department;
 $crform = Crform::with(['course'=> function ($query) use ($department_id) {
     $query->where('department_id', '=', $department_id)->get();
 }])->orderBy('user_id')->get();

 $data=[];
 foreach($crform->toArray() as $value){
     if(!is_null($value["course"])){
         $data[$value['user_id']][]=$value;
     }
 }

     return view('ExamHall.cseapprovedlist')->with([
         'crform'=>$data,
         'department_id'=>$department_id
         
     ]);

 }


}
