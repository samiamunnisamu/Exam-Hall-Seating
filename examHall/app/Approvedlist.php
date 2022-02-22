<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Approvedlist extends Model
{
    protected $table = 'crform';

    protected $fillable = ['course_id', 'user_id', 'status'];


    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
