<?php

namespace App\Http\Controllers;

use App\Crform;
use App\Department;
use App\Exam;
use App\Hall;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeatAllotmeantController extends Controller
{
    public function index()
    {
        $halls = Hall::get();
        $exam = Exam::distinct()->get();

        return view('ExamHall.seatallotmeant')->with([
            'halls' => $halls,
            'exams' => $exam
        ]);
    }

    public function seatPlan(Request $request)
    {
        $departmentArray = [];
        $hall = Hall::where(['id' => $request['hall-number']])->first();
        $sitrow=$hall->sit_row;
        $sitcolumn=$hall->sit_column;

        $exam = Exam::whereDate('exam_date', '=', $request['exam-date'])->where(['hall_id' => $request['hall-number']])->orderBy('id', 'DESC');
        $examDataDistinct = $exam->select('department_id')->distinct('department_id')->get()->toArray();
        foreach ($examDataDistinct as $key => $value) {
            $departmentArray[] = $value['department_id'];
        }
//dd($hall);
        $totalRow = (int)ceil($hall->total_sit );
        //dd( $totalRow);
        //echo $totalRow;
        //echo "<br>";
        //echo count($departmentArray);
        $seatArrange = [];
        $departmentArrayCount = 0;

        for ($row = 0; $row <= $sitrow; $row++) {
            for ($column = 1; $column <= $sitcolumn; $column++) {
                $howManyExamWillBeheld = count($departmentArray);
                $total = count($departmentArray);
                for ($i = 0; $i <= $howManyExamWillBeheld; $i++) {
                    if ($total % $howManyExamWillBeheld == $i) {
                        if (count($departmentArray) != $departmentArrayCount) {
                            $seatArrange[] = $departmentArray[$departmentArrayCount] . '-D';
                            $departmentArrayCount++;
                        } else {
                            $departmentArrayCount = 0;
                        }
                    }
                }
            }
        }

//dd(count($seatArrange));
        $getAllExamData = Exam::whereDate('exam_date', '=', $request['exam-date'])->where(['hall_id' => $request['hall-number']])->orderBy('id', 'DESC')->get();
        foreach ($getAllExamData as $keyOfExam => $value) {


            $date = Carbon::today()->subDays(100);
            $firstStudent = Crform::with(['users'])->where('created_at', '>=', $date)->where(['course_id' => $value->course_id])->get();

//            $firstStudent = Crform::with(['users', 'course'])->where('created_at', '>=', $date)->where(['user_id' => Auth::id()])->get();
//            dd($firstStudent);
            $dep = Department::where(['id' => $value->department_id])->first();

            foreach ($firstStudent as $key => $student) {
                foreach ($seatArrange as $keyOfSet => $set) {
                    if ($set == $value->department_id . '-D') {
                        $bg = $keyOfSet % 2 == 1 ? 'bg-light' : 'bg-success';
                        $seatArrange[$keyOfSet] = '<div class="col-md-2 m-2 p-3 ' . $bg . ' "> [ ' . $student->users->name . ' - ' . $dep->name . ' ] </div>';
                        break;
                    }
                }
            }
        }

        foreach ($seatArrange as $key => $set) {
            if (strpos($set, '-D') !== false) {
                $seatArrange[$key] = '<div class="col-md-2 m-2 p-3 bg-danger">[ N/A ]</div>';

            }
        }

        $sitarrangenew=[];
        $sitcolumncount=0;
        $sitarrangenew[]='<div class="row m-4">';
        foreach ($seatArrange as $key => $set) {
            if($sitcolumn==$sitcolumncount){
                $sitarrangenew[]='</div>';
                $sitarrangenew[]='<div class="row m-4">';
                $sitcolumncount=0;
            }
            
            else{
                $sitarrangenew[]=$set;
                $sitcolumncount++;
            }
        }
        $sitarrangenew[]='</div>';

//sitarrangenedd($sitarrangenew,$sitrow,$sitcolumn);
        return view('ExamHall.seat-show-up')->with([
            'sit_row'=>$sitrow,
            'sit_column'=>$sitcolumn,
            'seatArrange' => $sitarrangenew
        ]);

    }

}
