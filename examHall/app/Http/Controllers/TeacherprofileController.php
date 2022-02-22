<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class TeacherprofileController extends Controller
{
    public function index(){
        $users = User::where(['id'=>Auth::user()->id])->first();
        return view('ExamHall.teacherprofile')->with([
            'users'=>$users
        ]);
       

    }

    
public function editteProfile($id){
    $user = User::find($id);
    return view('ExamHall.teacherppedit')->with(['user'=>$user]);   

}

public function updateteProfile(Request $request){
    
    $user=User::find($request->id);
    $user->name=$request['teacher-name'];
    $user->email=$request['teacher-email'];
    $user->department=$request['department'];
    $user->gender=$request['teacher-gender'];
    $user->phone=$request['teacher-phone'];
    
    $user->save(); 
    
    return redirect()->route('viewte-profile');
}

    
}
