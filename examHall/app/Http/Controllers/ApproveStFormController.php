<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crform;
use App\User;
use Auth;
use Illuminate\Support\Facades\Mail;

class ApproveStFormController extends Controller
{
    public function index()
    {
        $department_id = Auth::user()->department;
        $crform = Crform::with(['course' => function ($query) use ($department_id) {
            $query->where('department_id', '=', $department_id)->get();
        }])->orderBy('user_id')->get();

        $data = [];
        foreach ($crform->toArray() as $value) {
            if (!is_null($value["course"])) {
                $data[$value['user_id']][] = $value;
            }
        }

        return view('ExamHall.studentregistrationform')->with([
            'crform' => $data,
            'department_id' => $department_id

        ]);

    }

    public function approve($id)
    {
        $crformUpdate = Crform::where(['id' => $id])->update(['status' => 1]);

        $crformFirst = Crform::with(['course'])->where(['id' => $id])->first();

        $userinfo = User::where(['id' => $crformFirst->user_id])->first();

        $courseName = $crformFirst->course->name;

        $data = array( 'name' => $userinfo->name , 'course' => $courseName);

        Mail::send('ExamHall.text', $data, function ($message) use ($userinfo, $courseName) {
            $message->to($userinfo->email, 'regform')->subject
            ('Your Course registration form' );
            $message->from('samiasamu012@gmail.com', 'samia');
        });

        return redirect()->route('regform-view');
    }


    public function approveNo($id)
    {

        $crformUpdate = Crform::where(['id' => $id])->update(['status' => 2]);

        $crformFirst = Crform::where(['id' => $id])->first();
        $userinfo = User::where(['id' => $crformFirst->user_id])->first();
        $data = array('name' => "samia");


        Mail::send('ExamHall.text2', $data, function ($message) use ($userinfo) {
            $message->to($userinfo->email, 'regform')->subject
            ('Your Course registration form');
            $message->from('samiasamu012@gmail.com', 'samia');
        });
        return redirect()->route('regform-view');
    }


}


