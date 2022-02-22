<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Teacher;
use App\Session;
use Auth;

class TeacherdetailsController extends Controller
{
    public function index(){
        $users = User::where([
            'rules'=>2
        ])->get();
        return view('ExamHall.teacherdetails')->with([
            'users'=>$users
        ]);
}

public function editTeacher($id){
    $user = User::find($id);
    return view('ExamHall.teacheredit')->with(['user'=>$user]);   

}

public function updateTeacher(Request $request){
    
    $user=User::find($request->id);
    $user->name=$request['teacher-name'];
    $user->email=$request['teacher-email'];
    $user->department=$request['department'];
    $user->gender=$request['teacher-gender'];
    $user->phone=$request['teacher-phone'];
    
    $user->save(); 
    
    
}



public function deleteTeacher(Request $request){
    $user=User::where(['id'=>$request->id])->delete();
   

    
    return redirect()->route('viewte-details');
    
}

}
