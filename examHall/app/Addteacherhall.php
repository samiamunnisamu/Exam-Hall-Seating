<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addteacherhall extends Model
{
    protected $table='addteachershall';
    protected $fillable=['department_id','user_id','hall_id','exam_name',
    'exam_date','exam_time'];
}
