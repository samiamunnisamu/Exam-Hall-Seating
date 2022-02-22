<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Crform;
use Auth;

class StudentprofileController extends Controller
{
    public function index(){
        $users = User::where(['id'=>Auth::user()->id])->first();
        return view('ExamHall.studentprofile')->with([
            'users'=>$users
            
        ]);
       

    }

    public function editstProfile($id){
        $user = User::find($id);
        return view('ExamHall.studentppedit')->with(['user'=>$user]);   
    
    }
    
    public function updatestProfile(Request $request){
        
        $user=User::find($request->id);
        $user->name=$request['student-name'];
        $user->email=$request['student-email'];
        $user->department=$request['department'];
        $user->gender=$request['student-gender'];
        $user->phone=$request['student-phone'];
        
        $user->save(); 
        
        return redirect()->route('viewst-profile');  
    } 
    
}
