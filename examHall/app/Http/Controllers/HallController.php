<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hall;

class HallController extends Controller
{
    public function index(){
        return view('ExamHall.hall');
    }
    public function hallAdd(Request $request){
       
        $hall = Hall::create([
             'hall_number'=>$request['hall-number'],
             'location'=>$request['hall-location'],
             'total_sit'=>$request['hall-sit'],
             'sit_row'=>$request['total-row'],
             'sit_column'=>$request['total-column'],
             'floor'=>$request['hall-floor']
         ]);
         
         return redirect()->back()->withSuccess('IT WORKS!');        
 
     } 

}
