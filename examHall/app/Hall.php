<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $fillable=['hall_number','location','total_sit','floor','sit_row','sit_column'];
}
