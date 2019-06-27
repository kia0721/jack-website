<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    //
    protected $table = "jack_studentcourse";
    const CREATED_AT = 'dateRegistered';

    public function setUpdatedAtAttribute($value)
	{
	    // to Disable updated_at
	}
}
