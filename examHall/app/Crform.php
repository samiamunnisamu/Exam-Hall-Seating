<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crform extends Model
{
    protected $fillable = ['course_id', 'user_id', 'types', 'status'];
    protected $table = 'crform';

    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
