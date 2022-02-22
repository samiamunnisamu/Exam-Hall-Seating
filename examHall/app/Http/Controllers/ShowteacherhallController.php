<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Hall;
use App\Department;
use App\Exam;
use App\Addteacherhall;
use App\Course;
use Auth;

class ShowteacherhallController extends Controller
{
    public function index(){
        $addteacherhall=Addteacherhall::where(['user_id'=>Auth::id()])->get();
       // dd($addteacherhall);
        
        return view('ExamHall.teacherhall2')->with([
            'addteachershall' => $addteacherhall
           
        ]);

    }
}
