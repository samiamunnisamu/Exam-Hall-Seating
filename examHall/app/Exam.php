<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        'exam_name',
        'exam_date',
        'exam_start_time',
        'exam_end_time',
        'hall_id',
        'course_id',
        'total_department_attend',
        'total_student',
        'semester',
        'department_id'
    ];
}


