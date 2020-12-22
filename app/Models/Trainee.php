<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    public function courses()
    {
        return $this->hasMany('App\Models\Course', 'id', 'id', 'course_id');
    }
}
