<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;

class VerifyController extends Controller
{
    public function index(){
        $users = User::get();
        return view('ExamHall.userverify')->with([
            'users'=>$users
        ]);
       
        

    }

    public function userVerification($id){
        User::where(['id'=>$id])->update(['status'=>1]);
        return redirect()->back()->withSuccess('IT WORKS!');
    }
    
}
