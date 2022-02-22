<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    protected $fillable = [
        'name',
        'course_code',
        'course_credit',
        'department_id'
    ];

    public function crforms()
    {
        return $this->hasMany('App\Crform');
    }
}
