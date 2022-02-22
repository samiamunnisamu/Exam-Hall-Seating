<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Hall;
use App\Department;
use App\Exam;
use App\Addteacherhall;
use App\Course;

class TeacherhalldetailsController extends Controller
{
    public function index(){
        $addteacherhall=Addteacherhall::get();
        $halls = Hall::get();
        $exam = Exam::get();
        $users = User::where([
            'rules'=>2
        ])->get();
        return view('ExamHall.teacherhalldetails')->with([
            'addteachershall' => $addteacherhall,
            'users'=>$users,
            'halls' => $halls,
            'exam' => $exam
        ]);
 }

 public function deleteTeacherhall(Request $request){
    
    $addteacherhall=Addteacherhall::where(['id'=>$request->id])->delete();
   

    
    return redirect()->back()->withSuccess('DELETE!');
    
}


}
