<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use App\Exam;
use App\Hall;
use App\Semester;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $departments = Department::get();

        return view('ExamHall.exam.index')->with([
            'departments' => $departments,
        ]);

    }

    public function examSearch(Request $request)
    {
        $halls = Hall::get();
        $courses = Course::where(['department_id' => $request['department-id']])->get();
        $semester = Semester::get();

        return view('ExamHall.exam')->with([
            'halls' => $halls,
            'courses' => $courses,
            'semester' => $semester,
            'departmentId' => $request['department-id'],
        ]);
    }


    public function examAdd(Request $request)
    {
        Exam::create([
            'exam_name' => $request['course-name'],
            'exam_date' => $request['exam-date'],
            'exam_start_time' => $request['exam-start'],
            'exam_end_time' => $request['exam-end'],
            'hall_id' => $request['hall-number'],
            'course_id' => $request['course-code'],
            'semester' => $request['semester'],
            'total_student' => $request['total-stu'],
            'department_id' => $request['dep-id']
        ]);


        return redirect()->back()->withSuccess('IT WORKS!');
    }
}
