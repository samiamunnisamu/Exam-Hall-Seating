<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferCourse extends Model
{
    protected $table = "offercourses";
    protected $fillable = ['course_id', 'semester_id', 'session_id'];

}
