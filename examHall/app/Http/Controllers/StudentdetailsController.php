<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class StudentdetailsController extends Controller
{
    public function index(){
        $users = User::where([
            'rules'=>1
        ])->get();
        return view('ExamHall.studentdetails')->with([
            'users'=>$users
        ]);
}

public function editStudent($id){
    $user = User::find($id);
    return view('ExamHall.studentedit')->with(['user'=>$user]);   

}


public function updateStudent(Request $request){
    
    $user=User::find($request->id);
    $user->name=$request['student-name'];
    $user->email=$request['student-email'];
    $user->department=$request['department'];
    $user->gender=$request['student-gender'];
    $user->phone=$request['student-phone'];
    
    $user->save(); 
    
}   

public function deleteStudent(Request $request){
    $user=User::where(['id'=>$request->id])->delete();
   

    
    return redirect()->route('viewst-details');

}
}
