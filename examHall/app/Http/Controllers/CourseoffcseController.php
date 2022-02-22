<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use PDF;
use App\OfferCourse;
use App\Course;

class CourseoffcseController extends Controller
{
   public function gen(){
      
   //dd($OfferCourse);

   $OfferCourse=OfferCourse::join("courses", "courses.id", "=", "offercourses.course_id")
   ->join("departments", "departments.id", "=", "offercourses.department_id")
   ->join("sessions", "sessions.id", "=", "offercourses.session_id")
       ->select('offercourses.*','courses.name as course_name','courses.course_code as course_code','courses.course_credit as course_credit','sessions.*','departments.*')
      ->where(['offercourses.department_id'=>1])
      ->orderBy('offercourses.semester_id','ASC')
       ->get();
       $OfferCourse=$OfferCourse->groupBy('semester_id')
       ->toArray();
       //dd($OfferCourse);


       
   



      //$courses=Course::get();
      $html = view('ExamHall.courseoffcse', [ 'offercourses'=>$OfferCourse])->render();
$pdf = App::make('dompdf.wrapper');
$pdf = $pdf->loadHTML($html);

      /*  $pdf=App::make('dompdf.wrapper');
       $pdf=PDF::loadview('ExamHall.courseoffcse')->with([
        
      ]);*/
       return $pdf->stream();
    }
    public function gen1(){
        $OfferCourse=OfferCourse::join("courses", "courses.id", "=", "offercourses.course_id")
        ->join("departments", "departments.id", "=", "offercourses.department_id")
        ->join("sessions", "sessions.id", "=", "offercourses.session_id")
            ->select('offercourses.*','courses.name as course_name','courses.course_code as course_code','courses.course_credit as course_credit','sessions.*','departments.*')
           ->where(['offercourses.department_id'=>2])
           ->orderBy('offercourses.semester_id','ASC')
            ->get();
            $OfferCourse=$OfferCourse->groupBy('semester_id')
            ->toArray();
            //dd($OfferCourse);
     
     
            
        
     
     
     
           //$courses=Course::get();
           $html = view('ExamHall.courseoffbba', [ 'offercourses'=>$OfferCourse])->render();
     $pdf = App::make('dompdf.wrapper');
     $pdf = $pdf->loadHTML($html);
     
           /*  $pdf=App::make('dompdf.wrapper');
            $pdf=PDF::loadview('ExamHall.courseoffcse')->with([
             
           ]);*/
            return $pdf->stream();
    }
    public function gen2(){
        $OfferCourse=OfferCourse::join("courses", "courses.id", "=", "offercourses.course_id")
        ->join("departments", "departments.id", "=", "offercourses.department_id")
        ->join("sessions", "sessions.id", "=", "offercourses.session_id")
            ->select('offercourses.*','courses.name as course_name','courses.course_code as course_code','courses.course_credit as course_credit','sessions.*','departments.*')
           ->where(['offercourses.department_id'=>3])
           ->orderBy('offercourses.semester_id','ASC')
            ->get();
            $OfferCourse=$OfferCourse->groupBy('semester_id')
            ->toArray();
            //dd($OfferCourse);
     
     
            
        
     
     
     
           //$courses=Course::get();
           $html = view('ExamHall.courseofflaw', [ 'offercourses'=>$OfferCourse])->render();
     $pdf = App::make('dompdf.wrapper');
     $pdf = $pdf->loadHTML($html);
     
           /*  $pdf=App::make('dompdf.wrapper');
            $pdf=PDF::loadview('ExamHall.courseoffcse')->with([
             
           ]);*/
            return $pdf->stream();
    }
    public function gen3(){
        $OfferCourse=OfferCourse::join("courses", "courses.id", "=", "offercourses.course_id")
        ->join("departments", "departments.id", "=", "offercourses.department_id")
        ->join("sessions", "sessions.id", "=", "offercourses.session_id")
            ->select('offercourses.*','courses.name as course_name','courses.course_code as course_code','courses.course_credit as course_credit','sessions.*','departments.*')
           ->where(['offercourses.department_id'=>4])
           ->orderBy('offercourses.semester_id','ASC')
            ->get();
            $OfferCourse=$OfferCourse->groupBy('semester_id')
            ->toArray();
            //dd($OfferCourse);
     
     
            
        
     
     
     
           //$courses=Course::get();
           $html = view('ExamHall.courseofflaw', [ 'offercourses'=>$OfferCourse])->render();
     $pdf = App::make('dompdf.wrapper');
     $pdf = $pdf->loadHTML($html);
     
           /*  $pdf=App::make('dompdf.wrapper');
            $pdf=PDF::loadview('ExamHall.courseoffcse')->with([
             
           ]);*/
            return $pdf->stream();
    }
}
