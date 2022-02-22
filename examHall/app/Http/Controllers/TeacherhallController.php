<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Hall;
use App\Department;
use App\Exam;
use App\Addteacherhall;
use App\Course;

class TeacherhallController extends Controller
{
    public function index(){
        $halls = Hall::get();
        $exam = Exam::get();
        $users = User::where([
            'rules'=>2
        ])->get();
        return view('ExamHall.teacherhall')->with([
            'users'=>$users,
            'halls' => $halls,
            'exam' => $exam
        ]);
 }
 public function teacherHallAdd(Request $request){
     //dd($request->all());
     $exam= Exam::where(['id' => $request['exam-name']])->first();
    // dd($exam);
    $addteacherhall=Addteacherhall::create([
        
        'user_id'=>$request['teacher-id'],
        'department_id'=>$exam->department_id,
        'hall_id'=>$exam->hall_id,
        'exam_name' => $exam->exam_name,
        'exam_date' => $exam->exam_date,
        'exam_time' => $exam->exam_start_time
    ]);
    return redirect()->back()->withSuccess('IT WORKS!');
 }

}
